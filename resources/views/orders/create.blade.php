@extends('layouts.app')


@section('content')


<div class="container py-5">


<div class="card shadow">


<div class="card-body">


<h2 class="fw-bold mb-4">

Checkout

</h2>



<form method="POST"
action="{{route('order.store')}}">


@csrf



<input class="form-control mb-3"
name="name"
placeholder="Full Name">



<input class="form-control mb-3"
name="email"
placeholder="Email">



<input class="form-control mb-3"
name="phone"
placeholder="Phone">



<textarea class="form-control mb-3"
name="address"
placeholder="Address"></textarea>



<button class="btn btn-dark btn-lg">

Place Order

</button>



</form>


</div>


</div>


</div>


@endsection