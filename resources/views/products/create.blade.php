@extends('layouts.master')

@section('content')

  <section class="content-header">
    <h1>
      Product
      <small>Create</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="{{ route('home') }}">Home</a>
      </li>
      <li>
        <a href="{{ route('product.index') }}">Product</a>
      </li>
      <li class="active">Create</li>
    </ol>
  </section>

  <section class="content"></section>

@endsection