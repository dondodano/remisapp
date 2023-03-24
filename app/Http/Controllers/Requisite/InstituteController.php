<?php

namespace App\Http\Controllers\Requisite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Requisite\Institute;

class InstituteController extends Controller
{
    public function index()
    {
        $institutes = Institute::where('active',1)->get();
        return view('content.requisite.institute.index', [ 'institutes' => $institutes ]);
    }

    public function create()
    {
        return view('content.requisite.institute.create');
    }

    public function store(Request $request)
    {
        $term = $request->input('term');
        $definition = $request->input('definition');

        if(strlen($term) == 0 || strlen($definition) == 0)
        {
            toastr("Please fill all fields required!", "error");
            return back();
        }else{

            $institute = Institute::firstOrCreate([
                'term' => $term,
                'definition' => $definition
            ]);
            $institute->save();

            if($institute)
                logUserActivity($request, 'Created new institute with ID = ['.$institute->id.']');
                toastr("Institute successfully saved!", "success");
                return back();

        }
    }

    public function edit($id)
    {
        $institute = Institute::with('program')->findOrFail($id);
        return view('content.requisite.institute.edit', ['institute' => $institute]);
    }

    public function update(Request $request, $id)
    {
        $term = $request->input('term');
        $definition = $request->input('definition');

        if(strlen($term) == 0 || strlen($definition) == 0)
        {
            toastr("Please fill all fields required!", "error");
            return back();
        }else{

            $institute = Institute::findOrFail($id);
            $institute->update([
                'term' => $term,
                'definition' => $definition,
                'date_modified' => setTimestamp()
            ]);

            if($institute)
                logUserActivity($request, 'Updated institute with ID = ['.$institute->id.']');
                toastr("Institute successfully updated!", "info");
                return back();

        }
    }

    public function status($id, $action)
    {
        $institute = Institute::findOrFail($id);

        if($action == 'active')
        {
            $institute->status = 1;
        }else{
            $institute->status = 0;
        }

        $institute->date_modified = setTimestamp();
        $institute->update();

        toastr("Status updated! ", "info");
        return back();
    }

    public function delete($id)
    {
        $institute = Institute::findOrFail($id);
        $institute->active = 0;
        $institute->date_modified = setTimestamp();
        $institute->update();

        if($institute)
            toastr("Institute [<strong>".$institute->term."</strong>] successfully removed!", "info");
            return back();

    }
}
