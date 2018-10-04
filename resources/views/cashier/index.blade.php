@extends('layouts.master')

@section('content')

  <section class="content-header">
  </section>

  <section class="content">

    <div class="row">

      <div class="col-md-4 fill">
        <div class="box">
          <div class="box-header with-border">

            <div class="input-group">
              <select name="" id="" class="form-control">
                <option value="">Walk in customer</option>
              </select>
              <div class="input-group-addon">
                <i class="fa fa-plus text-blue"></i>
              </div>
            </div>

            <div class="mt-10">
              <input type="text" class="form-control" placeholder="Search product by name or code">
            </div>

          </div>
          <div class="box-body table-responsive">
            <div class="" style="height: 400px;">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Unit</th>
                    <th>Qty</th>
                    <th>Subtotal</th>
                    <th>
                      <i class="fa fa-trash"></i>
                    </th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Paku</td>
                    <td>15.000</td>
                    <td>kg</td>
                    <td>5</td>
                    <td>75.000</td>
                    <td>
                      <i class="fa fa-trash text-red"></i>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="">
              <table class="table table-striped">
                <tr>
                  <td>Sub Total</td>
                  <td class="text-right">0</td>
                </tr>
                <tr>
                  <td>Discount</td>
                  <td class="text-right">0</td>
                </tr>
                <tr>
                  <td>Tax</td>
                  <td class="text-right">0</td>
                </tr>
                <tr>
                  <td>Total</td>
                  <td class="text-right">0</td>
                </tr>
              </table>
            </div>

          </div>
          <div class="box-footer">
            <div class="row">
              <div class="col-md-8"></div>
              <div class="col-md-4">
                <button class="btn btn-primary btn-block">PAY</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-8 fill">
        <div class="col-md-12 text-right">
          <div class="col-md-6 pull-right">
            <div class="info-box">
              <span class="info-box-icon">
                Rp.
              </span>
              <div class="info-box-content">
                <h1>150.000,-</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12"></div>
      </div>
    </div>

  </section>

@endsection