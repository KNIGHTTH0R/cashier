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

  <section class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="box">
          <div class="box-header with-border">
            List of available unit
          </div>

          <div class="box-body">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <th style="width: 10px;">No.</th>
                  <th>Name</th>
                  <th>Code</th>
                  <th style="width: 85px;">Action</th>
                </tr>

                @forelse($units as $index => $unit)
                  <tr>
                    <td>{{ $index + 1}}</td>
                    <td>{{ $unit->name }}</td>
                    <td>{{ $unit->code }}</td>
                    <td>
                      <a href="{{ route('unit.edit', $unit) }}" class="text-green mr-10" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                      <a href="{{ route('unit.show', $unit) }}" class="text-blue mr-10" data-toggle="toottip" title="Show"><i class="fa fa-eye"></i></a>
                      <a href="{{ route('unit.destroy', $unit) }}" class="text-red" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="4">No data found.</td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="col-md-6 hidden">
        <div class="box box-success">

          <div class="box-header with-border">
            Edit Unit
          </div>

          <div class="box-body">

          </div>

        </div>
      </div>

    </div>
  </section>

@endsection