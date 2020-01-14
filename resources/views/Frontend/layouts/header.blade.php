@section('header')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title',$title  )</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/styles.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/Animate.css') }}">


    <script src="https://kit.fontawesome.com/dde2e89b65.js" crossorigin="anonymous"></script>



</head>
<body>
@endsection

