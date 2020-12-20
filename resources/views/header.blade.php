<?php
use App\Http\Controllers\ProductController;
$total=ProductController::cartItem();
?>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">E-commerce</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Orders</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Cart({{$total}})</a></li>
    </ul>
  </div>
</nav>

