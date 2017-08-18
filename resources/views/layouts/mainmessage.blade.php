@if (session('mainMessage'))
  <div class="alert alert-success">
    {{ session('mainMessage') }}
  </div>
@endif
