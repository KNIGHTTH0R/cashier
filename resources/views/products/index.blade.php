@extends('layouts.master')

@section('content')

  <section class="content-header">
    <h1>
      Product
      <small>Index</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <i class="fa fa-dashboard"></i>
        <a href="{{ route('home') }}">Home</a>
      </li>
      <li class="active">
        <i class="fa fa-balance-scale"></i>
        Product
      </li>
      <li class="active">Index</li>
    </ol>
  </section>

  <section class="content">

    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            {!! Form::open(['route' => 'product.index', 'class' => 'form-inline']) !!}
              {!! method_field('GET') !!}
              {!! Form::text('search', null, ['class' => 'form-control']) !!}
              {!! Form::submit('Search', ['class' => 'btn btn-default']) !!}
            {!! Form::close() !!}
          </div>

          <div class="box-body">
            <table class="table table-light">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Prices</th>
                  <th>Unit</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                @forelse($products as $index => $product)
                  @php
                    $rowspan =  $product->prices->count();
                  @endphp
                  <tr>
                    <td rowspan="{{ $rowspan }}">{{ $product->name }}</td>
                    <td rowspan="{{ $rowspan }}">{{ $product->description }}</td>
                    @foreach($product->prices as $price)
                      <td>{{ idr($price->price) }}</td>
                      <td>{{ $price->unit->name }}</td>
                    @endforeach
                    <td rowspan="{{ $rowspan }}">
                      <a href="{{ route('product.edit', $product) }}" class="text-yellow mr-10" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                      <a href="{{ route('product.show', $product) }}" class="text-blue mr-10" data-toggle="toottip" title="Show"><i class="fa fa-eye"></i></a>
                      <delete-model url="{{ route('product.destroy', $product) }}"></delete-model>
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="4">No Data Found</td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </section>
@endsection