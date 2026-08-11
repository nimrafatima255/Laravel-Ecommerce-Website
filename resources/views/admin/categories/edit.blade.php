@extends('layouts.app')


@section('content')


<h2 class="fw-bold mb-4">

Edit Category

</h2>




<div class="card shadow border-0">


<div class="card-body">



<form method="POST"
action="{{route('admin.categories.update',$category)}}">


@csrf

@method('PUT')




<div class="mb-3">


<label>
Category Name
</label>


<input type="text"
name="name"
class="form-control"
value="{{$category->name}}">


</div>




<div class="mb-3">


<label>
Description
</label>


<textarea name="description"
class="form-control"
rows="4">

{{$category->description}}

</textarea>


</div>




<div class="mb-3">


<label>Status</label>


<select name="status"
class="form-control">


<option value="1"
@if($category->status)
selected
@endif>

Active

</option>


<option value="0"
@if(!$category->status)
selected
@endif>

Inactive

</option>


</select>


</div>





<button class="btn btn-primary">

Update Category

</button>



<a href="{{route('admin.categories.index')}}"
class="btn btn-secondary">

Cancel

</a>



</form>


</div>


</div>



@endsection