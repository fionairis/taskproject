{{--<!DOCTYPE HTML>--}}
{{--<html>--}}
{{--<head>--}}
{{--<title></title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="alert alert-success">--}}
{{--  <strong>Success!</strong> Indicates a successful or positive action.--}}
{{--</div>--}}

{{--<div class="alert alert-warning">--}}
{{--  <strong>Warning!</strong> Indicates a warning that might need attention.--}}
{{--</div>--}}

{{--<div class="alert alert-danger">--}}
{{--  <strong>Danger!</strong> Indicates a dangerous or potentially negative action.--}}
{{--</div>--}}
{{--</body>--}}


<div class="col-lg-12">
    @if(Session::has('success'))
        <div class="alert alert-info alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p>{{ Session::get('success') }}</p>
        </div>
    @endif
    @if ( session()->has('error'))
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p>{{ Session::get('error') }}</p>
        </div>
    @endif

    @if ($errors->any())
        <br>
        <div class="alert alert-danger">
            <ol>
                @foreach ($errors->all() as $error)
                    <li style="color: #ff0000;">{{ $error }}</li>
                @endforeach
            </ol>
        </div>
    @endif
</div>
