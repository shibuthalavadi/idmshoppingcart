@extends('master')
@section('content')
<div class="custom-product">

<div class="col-sm-10">
<h5>My Order</h5>

@foreach($orders as $item)
   <div class="row searched-item cart-list-divider">
   <div class="col-sm-3">
   <a href="detail/{{$item->id}}">
      <img class="trending-img" src="{{ $item->gallery }}">
      
    </a>
    </div>

    <div class="col-sm-4">
  
      <div class="">
        <h2>Product Name: {{ $item->name }}</h2>
        <h5>Descrption: {{ $item->description }}</h5>
        <h5>Delivery Status: {{$item->status }}</h5>
        <h5>Delivery Address: {{$item->address }}</h5>
        <h5>Payment Method: {{$item->payment_method }}</h5>
        <h5>Payment Status: {{$item->payment_status }}</h5>
        
        
      </div>
   
    </div>

    <div class="col-sm-3">
  
    </div>
    


    </div>

   @endforeach
  
</div>

</div>

</div>


@endsection

