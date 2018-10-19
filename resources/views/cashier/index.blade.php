@extends('layouts.master')

@section('content')

  <section class="content-header">
  </section>

  <section class="content"> <div class="row">
      <div class="col-md-4 fill"> <cashier></cashier>
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
