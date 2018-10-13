@extends('layouts.master')

@section('content')

  <section class="content-header">
    <h1>
      Purchase
      <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <i class="fa fa-dashboard"></i>
        <a href="{{ route('home') }}">Home</a>
      </li>
      <li>
        <i class="fa fa-balance-scale"></i>
        <a href="{{ route('purchase.index') }}">Purchase</a>
      </li>
      <li class="active">Edit</li>
    </ol>
  </section>

  <section class="content">

    <div class="row">

      <div class="col-md-6">
        <div class="box box-primary">
          {!! Form::model($purchase, ['route' => ['purchase.update', $purchase]]) !!}
            {{ method_field('PATCH') }}
            <div class="box-header with-border">
              Edit purchase
            </div>

            <div class="box-body">

              <div class="form-group {{ $errors->has('product_id') ? 'has-error': '' }}">
                {!! Form::label('product_id', 'Product') !!}
                {!! Form::select('product_id', \App\Product::options(), null, ['class' => 'form-control', 'placeholder' => 'Select Product']) !!}
                @if($errors->has('product_id'))
                  <span class="help-block">{{ $errors->first('product_id') }}</span>
                @endif
              </div>

              <div class="form-group {{ $errors->has('unit_id') ? 'has-error': '' }}">
                {!! Form::label('unit_id', 'Unit') !!}
                {!! Form::select('unit_id', \App\Unit::options(), null, ['class' => 'form-control', 'placeholder' => 'Select Unit']) !!}
                @if($errors->has('unit_id'))
                  <span class="help-block">{{ $errors->first('unit_id') }}</span>
                @endif
              </div>

              <div class="form-group {{ $errors->has('quantity') ? 'has-error': '' }}">
                {!! Form::label('quantity') !!}
                {!! Form::number('quantity', null, ['class' => 'form-control', 'placeholder' => 'Input quantity']) !!}
                @if($errors->has('quantity'))
                  <span class="help-block">{{ $errors->first('quantity') }}</span>
                @endif
              </div>

              <div class="form-group {{ $errors->has('price') ? 'has-error': '' }}">
                {!! Form::label('price') !!}
                {!! Form::number('price', null, ['class' => 'form-control', 'placeholder' => 'Input price each']) !!}
                @if($errors->has('price'))
                  <span class="help-block">{{ $errors->first('price') }}</span>
                @endif
              </div>

              <div class="form-group {{ $errors->has('total_price') ? 'has-error': '' }}">
                {!! Form::label('total_price') !!}
                {!! Form::number('total_price', null, ['class' => 'form-control', 'placeholder' => '0', 'readonly' => true]) !!}
                @if($errors->has('total_price'))
                  <span class="help-block">{{ $errors->first('total_price') }}</span>
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

@section('js')
  <script>
    let quantity = $('#quantity');
    let price = $('#price');
    let total_price = 0;

    $('#quantity').on('input', function(){
      total_price = parseInt(quantity.val()) * parseInt(price.val());
      $('#total_price').val(total_price);
    });

    $('#price').on('input', function(){
      total_price = parseInt(quantity.val()) * parseInt(price.val());
      $('#total_price').val(total_price);
    });
  </script>
@endsection