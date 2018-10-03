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
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
  <div class="wrapper" id="app">

    @include('partials/header')

    @include('partials/sidebar')

    <div class="content-wrapper">

      @yield('content')

    </div>

    @include('partials/footer')

  </div>


<script src="{{ mix('js/app.js') }}"></script>
 <script>
 $('#edit').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var name = button.data('myname')
      var email = button.data('myemail')
      var modal = $(this)
      modal.find('.modal-body #name').val(name);
      modal.find('.modal-body #email').val(email);

})

</script>

</body>
</html>
