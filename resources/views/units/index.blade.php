@extends('layouts.master')

@section('content')

  <section class="content-header">
    <h1>
      Unit
      <small>Index</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <i class="fa fa-dashboard"></i>
        <a href="{{ route('home') }}">Home</a>
      </li>
      <li class="active">
        <i class="fa fa-balance-scale"></i>
        Unit
      </li>
      <li class="active">Index</li>
    </ol>
  </section>

  <section class="content"></section>

@endsection