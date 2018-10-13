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
        <div class="box box-warning">
          {!! Form::model($unit, ['route' => ['unit.update', $unit]]) !!}
            {{ method_field('PATCH') }}
            <div class="box-header with-border">
              Edit unit
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
              <a href="{{ route('unit.index') }}" class="btn btn-default">Cancel</a>
              {!! Form::submit('Save', ['class' => 'btn btn-primary pull-right']) !!}
            </div>
          {!! Form::close() !!}
        </div>
      </div>

    </div>

  </section>

@endsection