@extends('layouts.master')

@section('content')

  <section class="content-header">
    <h1>
      Product
      <small>Create</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="{{ route('home') }}">Home</a>
      </li>
      <li>
        <a href="{{ route('product.index') }}">Product</a>
      </li>
      <li class="active">Create</li>
    </ol>
    
      <div class="container">
      <div class="row">
      <div class="col-md-4">
      <label for="inputAddress">Product</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="masukan product">


    <label for="exampleFormControlTextarea1">Deskripsi Product</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Deskripsi" ></textarea>
 
  

      <label for="inputAddress2">Harga Tunai</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="harga product">
    
    
      
        <label for="inputState">Satuan</label>
        <select id="inputState" class="form-control">
          <option selected>Choose...</option>
          <option>...</option>
        </select>

         <button type="submit" class="btn btn-primary">Input Product</button>
      </div> 
      
  
 

<div class="container">
  <div class="row">
      <div class="col-md-4">
     <label for="inputAddress">Nama satuan</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="masukan satuan">

    <button type="submit" class="btn btn-primary">Input satuan</button>
    </div>


      <div class="container">
      <div class="row">
      <div class="col-md-12">
      <h2>Daftar Satuan</h2>
           
  <table class="table">
    <thead>
      <tr class="table table-light">
        <th>SATUAN</th>
        <th>JUMLAH</th>
        <th>MODIFY</th>
      </tr>
    </thead>
    <tbody>
      <tr>
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
  </section>
 

 

@endsection