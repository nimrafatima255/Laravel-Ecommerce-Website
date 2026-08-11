@extends('layouts.app')

@section('content')

<div class="container">

<h2>Add Product</h2>


<form action="{{ route('admin.products.store') }}" method="POST">

@csrf


<div class="mb-3">

<label>Name</label>

<input type="text"
name="name"
class="form-control">

</div>


<div class="mb-3">

<label>Description</label>

<textarea name="description"
class="form-control"></textarea>

</div>



<div class="mb-3">

<label>Price</label>

<input type="number"
name="price"
class="form-control">

</div>



<div class="mb-3">

<label>Category</label>

<select name="category_id"
class="form-control">


@foreach($categories as $category)

<option value="{{ $category->id }}">
{{ $category->name }}
</option>

@endforeach


</select>

</div>



<button class="btn btn-success">
Save Product
</button>


</form>


</div>


@endsection