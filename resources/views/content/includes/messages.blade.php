@if (count($errors) >  0)
    <div class="alert alert-danger text-center" id="msgbox" style="margin-top:20px;">
        <strong>Error ! </strong>
        @foreach ($errors->all() as $error)
        {!!$error!!}
        @endforeach
    </div>
@endif

@if($message = Session::get('success'))
    <div class="alert alert-success text-center" id="msgbox" s style="margin-top:20px;">
        <strong>Success ! </strong>
        {!!$message!!}
    </div>
@endif

@if($message = Session::get('error'))
    <div class="alert alert-danger text-center" id="msgbox" s style="margin-top:20px;">
        <strong>Error ! </strong>
        {!!$message!!}
    </div>
@endif

@if($message = Session::get('warning'))
    <div class="alert alert-warning text-center" id="msgbox" s style="margin-top:20px;">
        <strong>Warning ! </strong>
        {!!$message!!}
    </div>
@endif

@if($message = Session::get('info'))
    <div class="alert alert-info text-center" id="msgbox" s style="margin-top:20px;">
        <strong>Information ! </strong>
        {!!$message!!}
    </div>
@endif
