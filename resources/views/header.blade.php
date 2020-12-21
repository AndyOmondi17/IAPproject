<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total = ProductController::cartItem();
}

?>

<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">BOOK STORE</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Home</a></li>
    </ul>

   
    <ul class="nav navbar-nav">
      <li class="active"><a href="/login">Login</a></li>
      
      <li class="active"><a href="/logout">Logout</a></li>
      
    </ul>
    

    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Cart({{$total}})</a></li>
      <li><a href="/register">Register</li>
    </ul>
  </div>
</nav>

