@extends('layouts.master')

@section('content')

  <section class="content-header">
    <h1></h1>
    <ol class="breadcrumb">
      <li class="active">Home</li>
      <li></li>
    </ol>
  </section>

  <section class="content">

    <div class="row">
      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-header with-border">
            Unit Detail
          </div>

          <div class="box-body">

            <ul class="nav nav-stacked">
              <li>
                Name
                <span class="pull-right">
                  {{ $unit->name }}
                </span>
              </li>

              <li>
                Code
                <span class="pull-right">
                  {{ $unit->code }}
                </span>
              </li>
            </ul>
          </div>

          <div class="box-footer">
            <a href="{{ route('unit.edit', $unit) }}" class="btn btn-warning pull-right">Edit</a>
          </div>
        </div>
      </div>
    </div>

  </section>

@endsection