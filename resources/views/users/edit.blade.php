@extends('layouts.master')

@section('content')

    <section class="content-header">
        <h1>
            User
            <small>Edit</small>
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
            <li class="active">Edit</li>
        </ol>
    </section>

  <section class="content">

    <div class="row">
      <div class="col-md-12">
        <div class="box box-warning">
            {!! Form::model($user, ['route' => ['user.update', $user]]) !!}
                <div class="box-header with-border">
                  Edit User
                </div>

                <div class="box-body">
                    <div class="form-group {{ $errors->has('name') ? 'has-error': '' }}">
                        {!! Form::label('name') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                        @if($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('username') ? 'has-error': '' }}">
                        {!! Form::label('username') !!}
                        {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username']) !!}
                        @if($errors->has('username'))
                        <span class="help-block">{{ $errors->first('username') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('email') ? 'has-error': '' }}">
                        {!! Form::label('email') !!}
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email Address']) !!}
                        @if($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('password') ? 'has-error': '' }}">
                        {!! Form::label('password', 'Password (optional)') !!}
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                        @if($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('roles') ? 'has-error': '' }}">
                        {!! Form::label('roles') !!}
                        {!! Form::select('roles[]', \App\Role::options(), $user->getRoleNames(), ['class' => 'form-control select2', 'multiple' => true]) !!}
                        @if($errors->has('roles'))
                        <span class="help-block">{{ $errors->first('roles') }}</span>
                        @endif
                    </div>
                </div>

                <div class="box-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('user.index') }}" class="btn btn-default pull-right">Cancel</a>
                </div>
            {!! Form::close() !!}
        </div>
      </div>
    </div>

  </section>

@endsection
