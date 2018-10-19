@extends('layouts.master')

@section('content')

  <section class="content-header">
    
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

<section>
  <div class="container">
  <div class="row">
  <div class="col-md-12">
  <p class="text-left">Nama Perusahaan:</p>
  <p class="text-left">Nama Laporan:</p>
  <p class="text-left">periode:</p>
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
                  <th>Jumlah Beli</th>
                  <th>Jumlah Jual</th>
                  <th>Satuan</th>
                  <th>Purchasing Date</th>
                  <th>Suplier</th>
                  <th>Action</th>
                </tr>
                
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      
                
                     
                    </td>
                    <td style="display: inline-flex; width: 100%;">
                      <a href="#" class="text-yellow mr-10" data-toggle="tooltip" title="show"><i class="fa fa-pencil"></i></a>
                      <delete-model url="#"></delete-model>
                    </td>
                  </tr>
              
                  <tr>
                    <td colspan="8">No Data Found</td>
                  </tr>
               
              </tbody>
            </table>
          </div>
          <div class="box-footer"></div>
        </div>
      </div>
    </div>
<button type="submit" class="btn btn-primary">cetak laporan</button>
  </section>

@endsection

