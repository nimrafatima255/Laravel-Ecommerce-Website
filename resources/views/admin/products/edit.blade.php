@extends('layouts.app')

@section('content')

<div class="container">

<h2>Edit Product</h2>


<form action="{{ route('admin.products.update',$product) }}"
method="POST">

@csrf
@method('PUT')


<div class="mb-3">

<label>Name</label>

<input type="text"
name="name"
value="{{ $product->name }}"
class="form-control">

</div>


<div class="mb-3">

<label>Description</label>

<textarea name="description"
class="form-control">{{ $product->description }}</textarea>

</div>



<div class="mb-3">

<label>Price</label>

<input type="number"
name="price"
value="{{ $product->price }}"
class="form-control">

</div>



<div class="mb-3">

<label>Category</label>

<select name="category_id"
class="form-control">


@foreach($categories as $category)

<option value="{{ $category->id }}"
@if($product->category_id == $category->id)
selected
@endif>

{{ $category->name }}

</option>

@endforeach


</select>

</div>


<button class="btn btn-primary">
Update
</button>


</form>


</div>

@endsection