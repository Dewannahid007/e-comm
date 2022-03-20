@extends('master')
@section('content')
<div class="container">
        <div class="style">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>

         <div class="style">
            <a href="/">Go Back</a>
            <h4>Company: {{$product['company_name']}} </h4>
            <h4>Model: {{$product['product_model']}}</h4>
            <h4>Price: {{$product['price']}} </h4>
            <p>{{$product['description']}}</p>
            <h6>Category:{{$product['category']}}</h6>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-primary">Add to Cart</button>

            </form>
            <br> <br>
            <button class="btn btn-success"> Buy Now</button>
            </div>

</div>

@stop