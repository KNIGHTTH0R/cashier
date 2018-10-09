<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ env('APP_NAME') }}</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  @routes
</head>
<body class="hold-transition skin-blue sidebar-mini">

  <div class="wrapper" id="app">

    @include('partials/header')

    @include('partials/sidebar')

    <div class="content-wrapper">

      @yield('content')

    </div>

    @include('partials/footer')

  </div>

<script src="{{ mix('js/app.js') }}"></script>

@include('flash::message')
@yield('js')

</body>
</html>
