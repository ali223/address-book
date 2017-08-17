<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Address Book</title>

    <!-- Bootstrap -->
    <link href="/css/app.css" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid">
      <h1 class="text-center">Address Book</h1>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-8">
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
                  <th colspan="2">Actions</th>
                </tr>

                @foreach($contacts as $contact)
                  <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>
                      <a href="#">Edit</a> 
                    </td>
                    <td>
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

              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
                </div>
              @endif

              @if (session('message'))
                <div class="alert alert-success">
                  {{ session('message') }}
                </div>
              @endif

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


    <script src="/js/app.js"></script>
  </body>
</html>