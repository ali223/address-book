@extends('layouts.master')

@section('title', 'Address Book | Edit Contact')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">  
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h4>Edit Contact</h4>
          </div>

          <div class="panel-body">
            <p>* Required Fields</p>

            @include('layouts.errormessages')           

            <form method="POST" action="{{ route('contacts.update', $contact) }}">
              {{ method_field('PATCH') }}
              {{ csrf_field() }}
              <div class="form-group">
                <label for="name">Name *: </label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $contact->name) }}">
              </div>
              <div class="form-group">
                <label for="phone">Phone *: </label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone', $contact->phone) }}">
              </div>
              <div class="form-group">
                <label for="email">Email *: </label>
                <input type="text" id="email" name="email"class="form-control" value="{{ old('email', $contact->email) }}">
              </div>

              <button class="btn btn-primary btn-block">Save Contact</button>

            </form>

          </div>
        </div>

      </div>
    </div>
  </div>
@endsection

