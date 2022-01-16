@extends('master')
@section('content')
<div class="product-page" style="height: 800px">
      <div class="col-sm-10">
        <table class="table">
            <tbody>
              <tr>
                <td>Price</td>
                <td>${{$total}}</td>
              </tr>
              <tr>
                <td>Delivery</td>
                <td>$5</td>
              </tr>
              <tr>
                <td>Subtotal</td>
                <td>${{$total+10}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/order" method="POST">
                @csrf
                <div class="form-group">
                  <textarea name="address" class="form-control" placeholder="Enter your info"></textarea>
                <div class="form-group">
                    <br>
                  <label for="exampleInputPassword1">Payment Method</label> <br>
                  <input type="radio" value="cash" name="payment"><span>Debit</span> <br>
                  <input type="radio" value="cash" name="payment"><span>Cash On Delivery</span> <br>
                </div>
                <button type="submit" class="btn btn-success">Process Order</button>
              </form>
          </div>
      </div>
</div>
@endsection