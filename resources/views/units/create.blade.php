@extends('layouts.master')

@section('content')

  <section class="content-header">
    <h1>
      Unit
      <small>Create</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <i class="fa fa-dashboard"></i>
        <a href="{{ route('home') }}">Home</a>
      </li>
      <li>
        <i class="fa fa-balance-scale"></i>
        <a href="{{ route('unit.index') }}">Unit</a>
      </li>
      <li class="active">Create</li>
    </ol>
  </section>

  <section class="content">

    <div class="row">

      <div class="col-md-6">
        <div class="box box-primary">
          {!! Form::open(['route' => 'unit.store']) !!}
            <div class="box-header with-border">
              Create new unit
            </div>

            <div class="box-body">

              <div class="form-group {{ $errors->has('name') ? 'has-error': '' }}">
                {!! Form::label('name') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Unit name']) !!}
                @if($errors->has('name'))
                  <span class="help-block">{{ $errors->first('name') }}</span>
                @endif
              </div>

              <div class="form-group {{ $errors->has('code') ? 'has-error': '' }}">
                {!! Form::label('code') !!}
                {!! Form::text('code', null, ['class' => 'form-control', 'placeholder' => 'Unit code']) !!}
                @if($errors->has('code'))
                  <span class="help-block">{{ $errors->first('code') }}</span>
                @endif
              </div>
            </div>

            <div class="box-footer">
              {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>
          {!! Form::close() !!}
        </div>
      </div>

    </div>

  </section>

@endsection