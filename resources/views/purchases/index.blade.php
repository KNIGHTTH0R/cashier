@extends('layouts.master')

@section('content')

  <section class="content-header">
    <h1>
      Purchase
      <small>Index</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <i class="fa fa-dashboard"></i>
        <a href="{{ route('home') }}">Home</a>
      </li>
      <li class="active">
        <i class="fa fa-balance-scale"></i>
        Purchase
      </li>
      <li class="active">Index</li>
    </ol>
  </section>

  <section class="content">

    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border"></div>
          <div class="box-body">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <th class="w-10">No.</th>
                  <th>Product</th>
                  <th>Unit</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Total Price</th>
                  <th>Purchasing Date</th>
                  <th>Suplier</th>
                  <th>Action</th>
                </tr>
                @forelse($purchases as $index => $purchase)
                  <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $purchase->product->name }}</td>
                    <td>{{ $purchase->unit->code }}</td>
                    <td>{{ $purchase->quantity }}</td>
                    <td>{{ idr($purchase->price) }}</td>
                    <td>{{ idr($purchase->total_price) }}</td>
                    <td>{{ $purchase->created_at }}</td>
                    <td>
                      @if($purchase->suplier)
                        <a href="{{ route('suplier.show', $purchase->suplier) }}">{{ $purchase->suplier_name }}</a>
                      @else
                        -
                      @endif
                    </td>
                    <td style="display: inline-flex; width: 100%;">
                      <a href="{{ route('purchase.edit', $purchase) }}" class="text-yellow mr-10" data-toggle="tooltip" title="show"><i class="fa fa-pencil"></i></a>
                      <delete-model url="{{ route('purchase.destroy', $purchase) }}"></delete-model>
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="8">No Data Found</td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
          <div class="box-footer"></div>
        </div>
      </div>
    </div>

  </section>

@endsection