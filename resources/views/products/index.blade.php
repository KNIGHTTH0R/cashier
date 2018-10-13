@extends('layouts.master')

@section('content')

  <section class="content-header">
    <h1>
      Daftar
      <small>Product</small>
    </h1>
    
  <div class="container">
  <table class="table">
    
    <div class="row">
    <div class="col-md-2">
    <input type="text" class="form-control" placeholder="search">
    </div>
   <button type="submit" class="btn btn-danger">reset</button>
    
<div class="container">
  <table class="table">
    <thead>
    <tr class="table table-light">
        <th>nama product</th>
        <th>deskripsi</th>
        <th>harga</th>
        <th>modify</th>

     </tr>
    </thead>
    <tbody>     
      <tr class="success">
        <td>#</td>
        <td>#</td>
        <td>#</td>
        <td>
           <a href="#"button type="submit"button class="btn btn-info">Edit</a>
                  <form action="#"  method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">Delete</button>

      </tr>
      
    </tbody>
  </table>
</div>


@endsection