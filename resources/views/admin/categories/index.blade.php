@extends('admin.layouts.app')


@section('content')


<div class="d-flex justify-content-between align-items-center mb-4">

<h2 class="fw-bold">
Categories
</h2>


<a href="{{route('admin.categories.create')}}"
class="btn btn-primary">

<i class="bi bi-plus-circle"></i>
Add Category

</a>

</div>




@if(session('success'))

<div class="alert alert-success">

{{session('success')}}

</div>

@endif




<div class="card shadow border-0">


<div class="card-body">


<table class="table table-hover">


<thead class="table-dark">

<tr>

<th>
#
</th>

<th>
Name
</th>

<th>
Description
</th>

<th>
Status
</th>

<th>
Actions
</th>

</tr>

</thead>



<tbody>


@foreach($categories as $category)


<tr>


<td>
{{$loop->iteration}}
</td>


<td class="fw-bold">

{{$category->name}}

</td>



<td>

{{$category->description}}

</td>



<td>

@if($category->status)

<span class="badge bg-success">
Active
</span>

@else

<span class="badge bg-danger">
Inactive
</span>

@endif

</td>




<td>


<a href="{{route('admin.categories.edit',$category)}}"
class="btn btn-warning btn-sm">

<i class="bi bi-pencil"></i>

</a>





<form action="{{route('admin.categories.destroy',$category)}}"
method="POST"
class="d-inline">


@csrf

@method('DELETE')


<button onclick="return confirm('Delete category?')"
class="btn btn-danger btn-sm">


<i class="bi bi-trash"></i>


</button>


</form>


</td>



</tr>


@endforeach


</tbody>


</table>


</div>


</div>



@endsection