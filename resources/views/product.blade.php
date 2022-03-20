@extends('master')
@section('content')
<h2>This is the Product page</h2>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
  @foreach($products as $item)

    <div class="carousel-item {{$item['id']==8? 'active':''}}">
        <a href="detail/{{$item['id']}}">
      <img class="slider-img" src=" {{$item['gallery']}}">
      <div class="carousel-caption d-none d-md-block slider-text">
        <h5>{{$item['company_name']}} </h5>
        <p> {{$item['description']}} </p>
      </div>
        </a>

    </div>
    @endforeach

    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <div class="trending-warp">
        <h3>Trending Products</h3>
        @foreach($products as $item)
        <div class="trending-item">
            
        <a href="detail/{{$item['id']}}">
      <img class="trending-img" src=" {{$item['gallery']}}">
      <div class="">
        <h5>{{$item['company_name']}} </h5>
      </div>
    </div>
    </div>
    @endforeach
@stop
