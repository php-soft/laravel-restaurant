@extends ('layouts.master')

@section('header')
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Hue Xua Restaurant</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">All Categories <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Bun</a></li>
          <li><a href="#">My Quang</a></li>
          <li><a href="#">Chao</a></li>
          <li><a href="#">Banh My</a></li>
        </ul>
      </li>
      <li><a href="#">Reservation</a></li>
      <li><a href="#">Reviews</a></li>
      <li>
        <form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search dishes"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
      </li>
      <li><a href="#">My Cart</a></li>
    </ul>
  </div>
</nav>
@stop
@section('content')

@stop

@section('footer')
<footer>

</footer>

@stop