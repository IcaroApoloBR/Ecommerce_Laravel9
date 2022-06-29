@if ($message = Session::get('success'))
    <div class='bg-green-200 text-green-900 rounded-lg shadow-md p-6 pr-10 mb-6'>
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($message = Session::get('error'))
    <div class="bg-red-200 text-red-900 rounded-lg shadow-md p-6 pr-10 mb-6">
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($message = Session::get('info'))
    <div class="alert alert-info alert-block">
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($errors->any())
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert"></button>
        Please check the form below for errors
    </div>
@endif
