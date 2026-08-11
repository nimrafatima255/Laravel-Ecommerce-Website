@extends('layouts.app')

@section('content')

<div class="container py-4">

    {{-- Page Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="mb-1">Orders</h2>
            <p class="text-muted mb-0">
                Manage customer orders
            </p>
        </div>

        <div>
            <span class="badge bg-primary fs-6">
                Total Orders: {{ $orders->count() }}
            </span>
        </div>

    </div>


    {{-- Success Message --}}
    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif


    {{-- Orders Table --}}
    @if($orders->count() > 0)

        <div class="card shadow-sm">

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered table-hover align-middle">

                        <thead class="table-dark">

                            <tr>

                                <th>Order ID</th>

                                <th>Customer</th>

                                <th>Email</th>

                                <th>Phone</th>

                                <th>Address</th>

                                <th>Total</th>

                                <th>Status</th>

                                <th>Date</th>

                                <th>Update Status</th>

                            </tr>

                        </thead>


                        <tbody>

                            @foreach($orders as $order)

                                <tr>

                                    {{-- Order ID --}}
                                    <td>
                                        <strong>
                                            #{{ $order->id }}
                                        </strong>
                                    </td>


                                    {{-- Customer --}}
                                    <td>
                                        {{ $order->name }}
                                    </td>


                                    {{-- Email --}}
                                    <td>
                                        {{ $order->email }}
                                    </td>


                                    {{-- Phone --}}
                                    <td>
                                        {{ $order->phone }}
                                    </td>


                                    {{-- Address --}}
                                    <td>
                                        {{ $order->address }}
                                    </td>


                                    {{-- Total --}}
                                    <td>
                                        <strong>
                                            Rs. {{ number_format($order->total, 2) }}
                                        </strong>
                                    </td>


                                    {{-- Current Status --}}
                                    <td>

                                        @if($order->status == 'pending')

                                            <span class="badge bg-warning text-dark">
                                                Pending
                                            </span>

                                        @elseif($order->status == 'processing')

                                            <span class="badge bg-info">
                                                Processing
                                            </span>

                                        @elseif($order->status == 'shipped')

                                            <span class="badge bg-primary">
                                                Shipped
                                            </span>

                                        @elseif($order->status == 'delivered')

                                            <span class="badge bg-success">
                                                Delivered
                                            </span>

                                        @elseif($order->status == 'cancelled')

                                            <span class="badge bg-danger">
                                                Cancelled
                                            </span>

                                        @else

                                            <span class="badge bg-secondary">
                                                {{ ucfirst($order->status) }}
                                            </span>

                                        @endif

                                    </td>


                                    {{-- Date --}}
                                    <td>
                                        {{ $order->created_at->format('d M Y') }}
                                    </td>


                                    {{-- Update Status --}}
                                    <td>

                                        <form
                                            action="{{ route('admin.orders.update', $order->id) }}"
                                            method="POST"
                                        >

                                            @csrf

                                            @method('PATCH')

                                            <select
                                                name="status"
                                                class="form-select form-select-sm"
                                                onchange="this.form.submit()"
                                            >

                                                <option value="pending"
                                                    {{ $order->status == 'pending' ? 'selected' : '' }}>
                                                    Pending
                                                </option>

                                                <option value="processing"
                                                    {{ $order->status == 'processing' ? 'selected' : '' }}>
                                                    Processing
                                                </option>

                                                <option value="shipped"
                                                    {{ $order->status == 'shipped' ? 'selected' : '' }}>
                                                    Shipped
                                                </option>

                                                <option value="delivered"
                                                    {{ $order->status == 'delivered' ? 'selected' : '' }}>
                                                    Delivered
                                                </option>

                                                <option value="cancelled"
                                                    {{ $order->status == 'cancelled' ? 'selected' : '' }}>
                                                    Cancelled
                                                </option>

                                            </select>

                                        </form>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    @else

        {{-- No Orders --}}
        <div class="alert alert-info text-center">

            <h5>No Orders Yet</h5>

            <p class="mb-0">
                No customer has placed an order yet.
            </p>

        </div>

    @endif

</div>

@endsection