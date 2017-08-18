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
        <div class="col-md-8 col-md-offset-2">  
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h4>Edit Contact</h4>
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


    <script src="/js/app.js"></script>
  </body>
</html>