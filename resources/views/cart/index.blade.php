@extends('layouts.app')


@section('content')


<div class="container py-5">


<h1 class="fw-bold mb-4">

Shopping Cart

</h1>



<table class="table table-bordered shadow">


<tr>

<th>Product</th>

<th>Price</th>

<th>Quantity</th>

<th>Action</th>

</tr>



@foreach($cartItems as $item)


<tr>


<td>

{{$item->product->name}}

</td>


<td>

${{$item->product->price}}

</td>



<td>

{{$item->quantity}}

</td>



<td>


<form method="POST"
action="{{route('cart.remove',$item)}}">


@csrf

@method('DELETE')


<button class="btn btn-danger">

Remove

</button>


</form>


</td>



</tr>


@endforeach


</table>



<a href="{{route('checkout')}}"
class="btn btn-success btn-lg">

Proceed Checkout

</a>


</div>


@endsection