@extends('master')
@section('content')
<div class="product-page" style="height: 800px">
      <div class="col-sm-10">
        <div class="trending-wrapper">
            <h1 style="text-align: center">Items</h1>
            <div class="btnwrapper" style="padding-bottom: 40px; padding-top: 20px; border-bottom: 1px solid #ccc; margin-bottom: 20px">
              <a class="btn btn-success" href="checkout">Check Out</a>
            </div>
            @foreach ($products as $item)
                <div class="row searched-items" style="border-bottom: 1px solid #ccc; margin-bottom: 20px; padding-bottom: 20px; ">
                  <div class="col-sm-4">
                    <a href="detail/{{$item->id}}">
                        <img class="" src="{{$item->gallery}}" style="height: 100px !important;">
                        <div class="">
                            <h3 style="color: black;">{{$item->name}}</h3>
                            <h5 style="color: black;">{{$item->description}}</h5>
                        </div>
                      </a>
                  </div>
                    <div class="col-sm-4">
                      <a href="/removeitem/{{$item->cart_id}}" class="btn btn-danger">Remove</a>
                    </div>
                </div>
            @endforeach
          </div>
      </div>
</div>
@endsection