@extends('layouts.master')

@section('title', 'Address Book | Login')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">

      @include('layouts.mainmessage')

      @include('layouts.errormessages')

      <div class="panel panel-primary">
        <div class="panel-heading">
          <h4>Login</h4>
        </div>
        <div class="panel-body">
          <form method="POST" action="{{ route('sessions.store') }}">
            {{ csrf_field() }}

            <div class="form-group">
              <label for="email">Admin Email</label>
              <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
            </div>

            <div class="form-group">
              <label for="password">Admin Password</label>
              <input type="password" id="password" name="password" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection