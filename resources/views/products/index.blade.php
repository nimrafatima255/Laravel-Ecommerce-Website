@extends('layouts.app')


@section('content')


<div class="container py-5">


<h1 class="fw-bold mb-4 text-center">

All Products

</h1>



<div class="row">


@foreach($products as $product)



<div class="col-md-4 mb-4">


<div class="card shadow border-0">


<img src="{{asset('uploads/products/'.$product->image)}}"
height="250"
class="card-img-top"
style="object-fit:cover">



<div class="card-body">


<h4>

{{$product->name}}

</h4>


<p class="text-muted">

{{$product->category->name}}

</p>



<h5 class="text-success">

${{$product->price}}

</h5>



<a href="{{route('products.show',$product)}}"
class="btn btn-primary w-100">

Details

</a>



</div>


</div>


</div>


@endforeach


</div>


</div>


@endsection