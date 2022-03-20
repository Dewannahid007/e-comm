@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending_wrapper"> 
            <h4>Result For products</h4>
            <a href="/ordernow" class="btn btn-success">Order Now</a>
            <br><br>
        @foreach($products as $item)
        <div class=" row search_item cart-list-divider"> 
            <div class="col-sm-3">
            <a href="detail/{{$item->id}}">
            <img class="trending-image" src="{{$item->gallery}}" >
            </a>
            
        </div>
        <div class="col-sm-4">
            <div class=" ">
                <h2> {{$item->company_name}} </h2>
                <h5> {{$item->description}} </h5>
            </div>
        </div>
        <div class="col-sm-3">
            <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning"> Remove Form cart</a>
        </div>
        </div>
        @endforeach
        </div>
        <a href="/ordernow" class="btn btn-success">Order Now</a>
        <br> <br>

    </div>
</div>
@stop