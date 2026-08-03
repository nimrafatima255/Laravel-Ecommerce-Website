@extends('layouts.app')


@section('content')


<div class="container py-5">


<div class="row align-items-center">


<div class="col-md-6">


<img src="{{asset('uploads/products/'.$product->image)}}"
class="img-fluid rounded shadow">


</div>



<div class="col-md-6">


<h1 class="fw-bold">

{{$product->name}}

</h1>



<p class="text-muted">

{{$product->description}}

</p>



<h2 class="text-success">

${{$product->price}}

</h2>



<p>

Available:
{{$product->quantity}}

</p>




<form method="POST"
action="{{route('cart.add',$product)}}">

@csrf


<button class="btn btn-dark btn-lg">

<i class="bi bi-cart"></i>

Add To Cart

</button>


</form>



</div>


</div>


</div>


@endsection