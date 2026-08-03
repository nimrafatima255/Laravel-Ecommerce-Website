@extends('layouts.app')


@section('content')


<div class="container py-5">


<h1 class="fw-bold mb-4">

{{$category->name}}

</h1>



<div class="row">


@foreach($products as $product)


<div class="col-md-4 mb-4">


<div class="card shadow">


<img src="{{asset('uploads/products/'.$product->image)}}"
height="220"
class="card-img-top">



<div class="card-body">


<h4>

{{$product->name}}

</h4>


<h5 class="text-success">

${{$product->price}}

</h5>


<a href="{{route('products.show',$product)}}"
class="btn btn-primary">

View

</a>


</div>


</div>


</div>


@endforeach


</div>


</div>


@endsection