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

      <section>
      <div class="container">
      <div class="row">
      <div class="col-md-4">
      <label for="inputAddress">create backup</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="{{ date('Y-m-d_Hi') }}">
      <button type="submit" class="btn btn-primary">create backup file</button>

       <form>
      <div class="form-group">
     <label for="exampleFormControlFile1">upload backup file</label>
     <input type="file" class="form-control-file" id="exampleFormControlFile1">
     <button type="submit" class="btn btn-primary">upload backup file</button>
     </div>
     </form>
       </div>
       

       <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="box">
          <div class="box-header with-border"></div>
          <div class="box-body">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <th class="w-10">No.</th>
                  <th>file name</th>
                  <th>file size</th>
                  <th>create at</th>
                  <th>Action</th>
                </tr>
                
                  <tr>
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
                    <td colspan="8">list backup data</td>
                  </tr>
               
              </tbody>
            </table>
          </div>
          <div class="box-footer"></div>
        </div>
      </div>
    </div>

      
    
    

     
  </section>





@endsection