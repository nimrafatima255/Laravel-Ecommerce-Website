@extends('layouts.app')


@section('content')


<!-- Hero Section -->

<section class="bg-dark text-white py-5">

<div class="container">


<div class="row align-items-center">


<div class="col-md-6">


<h1 class="display-4 fw-bold">

Premium Products
Delivered To Your Door

</h1>


<p class="lead">

Shop the latest products with quality and confidence.

</p>


<a href="/products"
class="btn btn-warning btn-lg">

Shop Now

</a>


</div>



<div class="col-md-6 text-center">

<img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d"
class="img-fluid rounded shadow"
style="height:350px;width:100%;object-fit:cover;">

</div>



</div>

</div>

</section>




<!-- Categories -->


<div class="container py-5">


<h2 class="text-center fw-bold mb-4">

Shop By Category

</h2>



<div class="row">


@foreach($categories as $category)


<div class="col-md-4 mb-4">


<a href="{{route('category.show',$category)}}"
class="text-decoration-none">


<div class="card shadow h-100 border-0">


<div class="card-body text-center">


<h4>

{{$category->name}}

</h4>


<p class="text-muted">

{{$category->description}}

</p>


</div>


</div>


</a>


</div>


@endforeach


</div>


</div>






<!-- Products -->


<div class="container pb-5">


<h2 class="text-center fw-bold mb-4">

Latest Products

</h2>



<div class="row">


@foreach($products as $product)



<div class="col-lg-3 col-md-6 mb-4">


<div class="card shadow border-0 h-100">


<img 
src="{{asset('uploads/products/'.$product->image)}}"
class="card-img-top"
height="220"
style="object-fit:cover;">



<div class="card-body">


<h5 class="fw-bold">

{{$product->name}}

</h5>



<p class="text-success fw-bold">

${{$product->price}}

</p>



<a href="{{route('products.show',$product)}}"
class="btn btn-dark w-100">

View Product

</a>


</div>


</div>


</div>


@endforeach


</div>


</div>


@endsection