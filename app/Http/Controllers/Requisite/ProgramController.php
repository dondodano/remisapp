<?php

namespace App\Http\Controllers\Requisite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Requisite\Institute;
use App\Models\Requisite\Program;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::with('institute')->where('active',1)->get();
        return view('content.requisite.program.index', [ 'programs' => $programs ]);
    }

    public function create()
    {
        $institutes = Institute::where('active',1)->get();
        return view('content.requisite.program.create', ['institutes' => $institutes]);
    }

    public function store(Request $request)
    {
        $institute = $request->input('institute');
        $term = $request->input('term');
        $definition = $request->input('definition');

        if(strlen($term) == 0 || strlen($definition) == 0)
        {
            toastr("Please fill all fields required!", "error");
            return back();
        }else{

            $program = Program::firstOrCreate([
                'institute_id' => $institute,
                'term' => $term,
                'definition' => $definition
            ]);
            $program->save();

            if($program)
                logUserActivity($request, 'Created new program with ID = ['.$program->id.']');
                toastr("Program successfully saved!", "success");
                return back();

        }
    }

    public function edit($id)
    {
        $program = Program::findOrFail($id);
        $institutes = Institute::where('active',1)->get();
        return view('content.requisite.program.edit', ['program' => $program, 'institutes' => $institutes]);
    }

    public function update(Request $request, $id)
    {
        $institute = $request->input('institute');
        $term = $request->input('term');
        $definition = $request->input('definition');

        if(strlen($term) == 0 || strlen($definition) == 0)
        {
            toastr("Please fill all fields required!", "error");
            return back();
        }else{

            $program = Program::findOrFail($id);
            $program->update([
                'institute_id' => $institute,
                'term' => $term,
                'definition' => $definition,
                'date_modified' => setTimestamp()
            ]);

            if($program)
                logUserActivity($request, 'Updated program with ID = ['.$program->id.']');
                toastr("Program successfully updated!", "info");
                return back();

        }
    }

    public function status($id, $action)
    {
        $program = Program::findOrFail($id);

        if($action == 'active')
        {
            $program->status = 1;
        }else{
            $program->status = 0;
        }

        $program->date_modified = setTimestamp();
        $program->update();

        toastr("Status updated! ", "info");
        return back();
    }

    public function delete($id)
    {
        $program = Program::findOrFail($id);
        $program->active = 0;
        $program->date_modified = setTimestamp();
        $program->update();

        if($program)
            toastr("Program [<strong>".$program->term."</strong>] successfully removed!", "info");
            return back();

    }
}
