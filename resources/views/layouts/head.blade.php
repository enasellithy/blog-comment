<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{url('public/front-end')}}/vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{url('public/front-end')}}/css/bootstrap-rtl.min.css" />
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{url('public/front-end')}}/css/clean-blog.css" />

    <!-- Custom Fonts -->
    <link href="{{url('public/front-end')}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<style type="text/css">
body {
    overflow-x:hidden;
}
.intro-header {
    background: url('public/front-end/img/home-bg.jpg');
}
</style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
@yield('css')
</head>

<body>