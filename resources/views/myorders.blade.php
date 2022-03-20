@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending_wrapper"> 
            <h4>my Orders</h4>
            <br><br>
        @foreach($myorder as $item)
        <div class=" row search_item cart-list-divider"> 
            <div class="col-sm-3">
            <a href="detail/{{$item->id}}">
            <img class="trending-image" src="{{$item->gallery}}" >
            </a>
            
        </div>
        <div class="col-sm-4">
            <div class=" ">
                <h2> Name: {{$item->company_name}} </h2>
                <h5> Delivery Status: {{$item->status}} </h5>
                <h5> Address: {{$item->address}} </h5>
                <h5> Payment Status: {{$item->payment_status}} </h5>
                <h5>Payment Method: {{$item->payment_method}} </h5>
                <a href="/">Go Back To Main Page</a>

            </div>
        </div>
       
        </div>
        @endforeach
        </div>
        <br> <br>

    </div>
</div>
@stop