<!DOCTYPE html>
<html lang="en">
<head>
    @yield('head')
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>App Name - @yield('title')</title>
</head>
<body>
@section('sidebar')

@show

<div class="container">
    @yield('content')
    @if(Session::has('flash_message_error'))
        <div class="alert alert-danger alert-block">
            <strong>{!!session('flash_message_error')!!}</strong>
        </div>
    @endif

    @if(Session::has('flash_message_success'))
        <div class="alert alert-success alert-block">
            <strong>{!!session('flash_message_success')!!}</strong>
        </div>
    @endif



</div>
</body>
</html>
