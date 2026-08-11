@extends('layouts.app')

@section('content')

<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2>Products</h2>

        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
            Add Product
        </a>

    </div>


    @if(session('success'))

    <div class="alert alert-success">
        {{ session('success') }}
    </div>

    @endif



    <table class="table table-bordered">

        <thead class="table-dark">

            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>

        </thead>


        <tbody>

        @foreach($products as $product)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $product->name }}</td>

                <td>{{ $product->price }}</td>

                <td>
                    {{ $product->category->name ?? 'No Category' }}
                </td>


                <td>

                    <a href="{{ route('admin.products.edit',$product) }}"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>


                    <form action="{{ route('admin.products.destroy',$product) }}"
                          method="POST"
                          style="display:inline">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm">
                            Delete
                        </button>

                    </form>

                </td>

            </tr>

        @endforeach

        </tbody>

    </table>


    {{ $products->links() }}

</div>

@endsection