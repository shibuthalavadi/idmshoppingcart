@extends('master')
@section('content')
<div class="custom-product">

<div class="col-sm-10">
<table class="table table-striped" border=1>
    
    <tbody>
      <tr>
        <td>Amount</td>
        <td>$ {{$total}}</td>
       
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
       
      </tr>
      <tr>
        <td>Delivery Charge</td>
        <td>$ 10</td>
        
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>$ {{$total + 10}}</td>
       
      </tr>
    </tbody>
  </table>
<div>
<form action="orderplace" method="POST">
    @csrf
  <div class="form-group">
    
    <textarea placeholder="Enter Delivery Address Here" class="form-control" name="address"></textarea>
  </div>
  <div class="form-group">
    <label for="paymentmethod">Payement Method</label><br/><br/>
    <input type="radio" class="form-control" name="payment" value="cash"><span>Online Banking</span><br/><br/>
    <input type="radio" class="form-control" name="payment" value="cash"><span>EMI payment</span><br/><br/>
    <input type="radio" class="form-control" name="payment" value="cash"><span>Cash On Delivery</span><br/><br/>

  </div>
  
  <button type="submit" class="btn btn-default">ORDER</button>
</form>
</div>
</div>

</div>


@endsection

