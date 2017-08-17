<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 101 Template</title>

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
                  <th>Actions</th>
                </tr>

                @foreach($contacts as $contact)
                  <tr>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->phone}}</td>
                    <td>{{$contact->email}}</td>
                    <td>
                      <a href="#">Edit</a> | 
                      <a href="#">Delete</a>
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
              <form>
                <div class="form-group">
                  <label for="name">Name: </label>
                  <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="phone">Phone: </label>
                  <input type="text" id="phone" name="phone" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email: </label>
                  <input type="email" id="email" name="email"class="form-control">
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