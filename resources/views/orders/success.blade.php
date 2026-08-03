@extends('layouts.app')


@section('content')


<div class="container py-5">


<div class="row justify-content-center">


<div class="col-md-7">



<div class="card shadow border-0 text-center">


<div class="card-body p-5">



<div class="mb-4">

<i class="bi bi-check-circle-fill text-success"
style="font-size:80px;">
</i>

</div>




<h1 class="text-success fw-bold">

Order Placed Successfully!

</h1>



<p class="lead">

Thank you for shopping with us.

</p>



<hr>



<h5>

Order Details

</h5>



<p>

Order ID:

<strong>
#{{$order->id}}
</strong>

</p>




<p>

Total Amount:

<strong class="text-success">

${{$order->total}}

</strong>

</p>




<p>

Status:

<span class="badge bg-warning">

{{$order->status}}

</span>

</p>





<div class="mt-4">


<a href="{{route('products.index')}}"
class="btn btn-dark btn-lg">


Continue Shopping


</a>



<a href="/"
class="btn btn-outline-secondary btn-lg">


Home


</a>



</div>



</div>


</div>



</div>


</div>


</div>


@endsection