@extends('layouts.master')

@section('content')

  <section class="content-header">
    <h1>Home</h1>
    <ol class="breadcrumb">
      <li class="active">
        <i class="fa fa-dashboard"></i>
        Home
      </li>
    </ol>
  </section>

  <section class="content">

    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua">
            <i class="fa fa-barcode"></i>
          </span>
          <div class="info-box-content">
            <span class="info-box-text">Product</span>
            <span class="info-box-number">12.000</span>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border"></div>
          <div class="box-body"></div>
          <div class="box-footer"></div>
        </div>
      </div>
    </div>
  </section>

@endsection

@section('js')
@endsection
