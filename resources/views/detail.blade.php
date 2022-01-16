@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$products['gallery']}}" style="height: 400px;">
        </div>
        <div class="col-sm-6">
            <a href="/">Previous Page</a>
        <h2>{{$products['name']}}</h2>  
        <h3>{{$products['category']}}</h3>
        <h3>Price: ${{$products['price']}}</h3> 
        <h4>{{$products['description']}}</h4>
        <br>
        <br>
        <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value={{$products['id']}}>
            <button class="btn btn-primary">Add to Cart</button>
        </form>
        <br>
        <br>
        </div>
    </div>
</div>
@endsection