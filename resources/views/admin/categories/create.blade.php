@extends('layouts.app')


@section('content')


<h2 class="fw-bold mb-4">

Add Category

</h2>




<div class="card shadow border-0">


<div class="card-body">


<form method="POST"
action="{{route('admin.categories.store')}}">


@csrf



<div class="mb-3">

<label class="form-label">
Category Name
</label>


<input type="text"
name="name"
class="form-control"
placeholder="Enter category name">


</div>





<div class="mb-3">

<label class="form-label">
Description
</label>


<textarea name="description"
class="form-control"
rows="4"
placeholder="Category description"></textarea>


</div>





<button class="btn btn-success">

Save Category

</button>



<a href="{{route('admin.categories.index')}}"
class="btn btn-secondary">

Back

</a>


</form>


</div>


</div>


@endsection