<?php
use App\Http\Controllers\ProductController;
$total=0;
if(session()->has('user')){
$total=ProductController::cartItem();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-shop</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">E-Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/myorders">Orders</a>
        </li>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      </ul>
      <span class="nav-item">
      <a class="nav-link" href="registration">Registration</a>
      </span>
      <span class="nav-item">
      <a class="nav-link" href="cartlist">Cart({{$total}})</a>
</span>
<ul class="nav navbar-nav">
@if(session()->has('user'))
<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{session()->get('user') ['name']}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
          </ul>
          @else
      
          <li><a class="dropdown-item" href="/login">Login</a></li>
          @endif
    </ul>
    </div>
  </div>
</nav> 

<div class="container"> 
    @yield('content')
</div>
</body>
</html>
<style>
    .custom-login{
        height:600px ;
        padding-top: 100px;
    }
    .slider-img{
      height: 400px !important ;
    }
    .slider-text{
      background-color:darkgrey;
    color:darkcyan;
    }
    .trending-img{
      height: 100px;
      
    }
    .trending-item{
      float: left;
      width: 25%;

    }
    .trending-warp{
      padding-top: 30px;
    }
    .detail-img{
      height: 200px;
    }
    .container{
      padding: 20px;
    }
    .style{
      width: 50%;
      padding: 20px;
      float: left;
    }
    .custom-product{
      height: 100px;
      padding: 50px;
    }
    .trending-image{
      height: 200px;

    }
    .cart-list-divider{
      border-bottom: 1px solid gray ;
      margin-bottom: 20px;
      padding-bottom: 20px;

    }
  
</style>