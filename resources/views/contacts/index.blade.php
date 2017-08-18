@extends('layouts.master')
@section('title', 'Address Book')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8">

        @include('layouts.mainmessage')
        
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h4>Contacts List</h4>
          </div>            
          <div class="panel-body">
            <table class="table table-striped table-hover">

              <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Added By</th>
                <th>Actions</th>
              </tr>

              @foreach($contacts as $contact)
              
                <tr>
                  <td>{{ $contact->name }}</td>
                  <td>{{ $contact->phone }}</td>
                  <td>{{ $contact->email }}</td>
                  <td>{{ $contact->user->name }}</td>
                  <td>
                    <a href="{{ route('contacts.edit', $contact) }}">Edit</a>
                    <br>
                    <form method="POST" action="{{ route('contacts.destroy', $contact)}}">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button type="submit" style="padding:0" class="btn btn-link">Delete</button>                        
                    </form>
 
                  </td>
                </tr>
              @endforeach

            </table>
          </div>
        </div>
      </div>
      <div class="col-md-4">  
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h4>Add a new Contact</h4>
          </div>

          <div class="panel-body">
            <p>* Required Fields</p>

            @include('layouts.errormessages')

            @include('layouts.successmessage')
            
            <form method="POST" action="{{ route('contacts.store') }}">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="name">Name *: </label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
              </div>
              <div class="form-group">
                <label for="phone">Phone *: </label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone') }}">
              </div>
              <div class="form-group">
                <label for="email">Email *: </label>
                <input type="text" id="email" name="email"class="form-control" value="{{ old('email') }}">
              </div>

              <button class="btn btn-primary btn-block">Save Contact</button>

            </form>

          </div>
        </div>

      </div>
    </div>
  </div>
@endsection

