@extends('master')
@section("content")

    <div class="container">
        <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div> 
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h5>Name:{{$product['name']}}</h5>
            <h5>Price:{{$product['price']}}</h5>
            <h5>Category:{{$product['category']}}</h5>
            <h5>Description:{{$product['description']}}</h5>
       <button class="btn btn-primary">Add to Cart</button>
       <br><br>
       <button class="btn btn-primary">Buy Now</button>
        <br><br>
        </div> 
        </div>    
    </div>
@endsection