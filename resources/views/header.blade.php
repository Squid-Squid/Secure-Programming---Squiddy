<?php
use App\Http\Controllers\productcontroller;
$total=0;
if(Session::has('user')){
  $total = productcontroller::cartitem();
}
?>

<nav class="navbar navbar-default" style="background-color: bisque">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <img alt="Brand" src="https://w7.pngwing.com/pngs/613/651/png-transparent-headphones-computer-icons-symbol-headphone-logo-electronics-text-sound.png" style="width: 80px; height: 50px; background-color: bisque;">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="/">Home Page <span class="sr-only">(current)</span></a></li>
        <li class=""><a href="/">Products <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Brands <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <form action="brandsearch" class="navbar-form navbar-left">
            <li><a href="{{"Elac"}}">Elac</a></li>
            <li><a href="brandsearch/{{"KEF"}}">KEF</a></li>
            <li><a href="brandsearch/{{"Bowers&Wilkins"}}">Bowers&Wilkins</a></li>
            <li><a href="brandsearch/{{"Mcintosh"}}">Mcintosh</a></li>
          </form>
          </ul>
        </li>
      </ul>
      <form action="search" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="query" class="form-control" placeholder="Elac / Kef / Mcintosh" style="width: 500px !important;">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        @if (Session::has('user'))   
        <li><a href="/cartlist">Items in Cart : ({{$total}})</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Session::get('user')['name']}}<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/logout">Logout</a></li>
          </ul>
        </li>      
        @else 
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
          </ul>
        </li>  
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>