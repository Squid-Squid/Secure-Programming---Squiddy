@extends('master')
@section('content')
<div class="product-page" style="height: 800px">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
        @foreach ($products as $item)
        <div class="item {{$item['id']==1?'active':''}}">
            <a href="detail/{{$item['id']}}">
              <img class="slider-img" src="{{$item['gallery']}}" style="height: 400px !important;">
              <div class="carousel-caption" style="background-color: #fcf8e3a3;">
                  <h3 style="color: black">{{$item['name']}}</h3>
                  <p style="color: black">{{$item['description']}}</p>
              </div>
            </a>
        </div>
        @endforeach
        </div>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="trending-wrapper" style="margin-top:50px; margin-bottom: 20px; margin-left: 20px; margin-right:20px;">
        <h3 style="padding-bottom: 20px">Items</h3>
        @foreach ($products as $item)
            <div class="" style="float: left; width:20%; border-left: 1px solid #cccc; margin-left: 20px; padding-left: 20px;">
              <a href="detail/{{$item['id']}}">
                <img class="" src="{{$item['gallery']}}" style="height: 100px !important;">
                <div class="">
                    <h3 style="color: black; font-size:20px">{{$item['name']}}</h3>
                </div>
              </a>
            </div>
        @endforeach
      </div>
</div>
@endsection