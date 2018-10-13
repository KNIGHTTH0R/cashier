@extends('layouts.master')

@section('content')

  <section class="content-header">
    <h1>
        User
        <small>Index</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <i class="fa fa-dashboard"></i>
            <a href="{{ route('home') }}">Home</a>
        </li>
        <li>
            <i class="fa fa-users"></i>
            <a href="{{ route('user.index') }}">User</a>
        </li>
        <li class="active">Index</li>
    </ol>
  </section>

  <section class="content">

    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            User List
            <a href="{{ route('user.create') }}" class="btn btn-primary pull-right">New</a>
          </div>
          <div class="box-body">
            <table class="table table-bordered">
              <tbody>
                <tr>
                    <th style="width: 10px;">No</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Created At</th>
                    <th style="width: 85px;">Action</th>
                </tr>
                @forelse($users as $index => $user)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->getRoleNames() }}</td>
                        <td>{{ $user->created_at->diffForHumans() }}</td>
                        <td style="display: inline-flex; width: 100%;">
                            <a href="{{ route('user.edit', $user) }}" class="text-yellow mr-10" data-toggle="tooltip" title="show"><i class="fa fa-pencil"></i></a>
                            <delete-model url="{{ route('user.destroy', $user) }}"></delete-model>
                        </td>
                    </tr>
                @empty
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
