@extends('admin.layouts.layout')

@section('title', 'Order Details')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Order #{{ $order->order_number }}</h1>
        <div>
            <a href="{{ route('admin.orders.edit', $order) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> Edit Order
            </a>
            <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Orders
            </a>
        </div>
    </div>

    <div class="row">
        <!-- Order Information -->
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Order Information</h6>
                    <span class="badge badge-{{ $order->status === 'completed' ? 'success' : ($order->status === 'cancelled' ? 'danger' : 'warning') }} badge-lg">
                        {{ ucfirst($order->status) }}
                    </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Order Number:</label>
                                <p class="form-control-plaintext">#{{ $order->order_number }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Status:</label>
                                <p class="form-control-plaintext">
                                    <span class="badge badge-{{ $order->status === 'completed' ? 'success' : ($order->status === 'cancelled' ? 'danger' : 'warning') }} badge-lg">
                                        {{ ucfirst($order->status) }}
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Payment Status:</label>
                                <p class="form-control-plaintext">
                                    <span class="badge badge-{{ $order->payment_status === 'paid' ? 'success' : ($order->payment_status === 'failed' ? 'danger' : 'warning') }}">
                                        {{ ucfirst($order->payment_status) }}
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Payment Method:</label>
                                <p class="form-control-plaintext">{{ ucfirst($order->payment_method ?? 'Not specified') }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Total Amount:</label>
                                <p class="form-control-plaintext">
                                    <span class="h5 text-success">${{ number_format($order->total_amount, 2) }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Order Date:</label>
                                <p class="form-control-plaintext">{{ $order->created_at->format('M d, Y H:i') }}</p>
                            </div>
                        </div>
                    </div>

                    @if($order->notes)
                    <div class="form-group">
                        <label class="font-weight-bold">Order Notes:</label>
                        <p class="form-control-plaintext">{{ $order->notes }}</p>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Customer Information -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Customer Information</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Customer Name:</label>
                                <p class="form-control-plaintext">{{ $order->customer_name }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Email:</label>
                                <p class="form-control-plaintext">{{ $order->customer_email }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Phone:</label>
                                <p class="form-control-plaintext">{{ $order->customer_phone }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Address:</label>
                                <p class="form-control-plaintext">{{ $order->customer_address }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Items -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Order Items</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $items = json_decode($order->items, true) ?? [];
                                @endphp
                                @forelse($items as $item)
                                <tr>
                                    <td>{{ $item['name'] ?? 'Unknown Product' }}</td>
                                    <td>${{ number_format($item['price'] ?? 0, 2) }}</td>
                                    <td>{{ $item['quantity'] ?? 1 }}</td>
                                    <td>${{ number_format(($item['price'] ?? 0) * ($item['quantity'] ?? 1), 2) }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted">No items found</td>
                                </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr class="font-weight-bold">
                                    <td colspan="3" class="text-right">Total:</td>
                                    <td>${{ number_format($order->total_amount, 2) }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Order Actions & Timeline -->
        <div class="col-lg-4">
            <!-- Quick Actions -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Quick Actions</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.orders.update-status', $order) }}" method="POST" class="mb-3">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="status">Update Status:</label>
                            <select name="status" id="status" class="form-control">
                                <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="processing" {{ $order->status === 'processing' ? 'selected' : '' }}>Processing</option>
                                <option value="shipped" {{ $order->status === 'shipped' ? 'selected' : '' }}>Shipped</option>
                                <option value="delivered" {{ $order->status === 'delivered' ? 'selected' : '' }}>Delivered</option>
                                <option value="completed" {{ $order->status === 'completed' ? 'selected' : '' }}>Completed</option>
                                <option value="cancelled" {{ $order->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Update Status</button>
                    </form>

                    <a href="mailto:{{ $order->customer_email }}" class="btn btn-outline-primary btn-block mb-2">
                        <i class="fas fa-envelope"></i> Email Customer
                    </a>
                    
                    <a href="tel:{{ $order->customer_phone }}" class="btn btn-outline-success btn-block mb-2">
                        <i class="fas fa-phone"></i> Call Customer
                    </a>

                    <form action="{{ route('admin.orders.destroy', $order) }}" method="POST" 
                          onsubmit="return confirm('Are you sure you want to delete this order?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-block">
                            <i class="fas fa-trash"></i> Delete Order
                        </button>
                    </form>
                </div>
            </div>

            <!-- Order Timeline -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Order Timeline</h6>
                </div>
                <div class="card-body">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-marker bg-primary"></div>
                            <div class="timeline-content">
                                <h6 class="timeline-title">Order Created</h6>
                                <p class="timeline-text">{{ $order->created_at->format('M d, Y H:i') }}</p>
                            </div>
                        </div>

                        @if($order->confirmed_at)
                        <div class="timeline-item">
                            <div class="timeline-marker bg-info"></div>
                            <div class="timeline-content">
                                <h6 class="timeline-title">Order Confirmed</h6>
                                <p class="timeline-text">{{ $order->confirmed_at->format('M d, Y H:i') }}</p>
                            </div>
                        </div>
                        @endif

                        @if($order->shipped_at)
                        <div class="timeline-item">
                            <div class="timeline-marker bg-warning"></div>
                            <div class="timeline-content">
                                <h6 class="timeline-title">Order Shipped</h6>
                                <p class="timeline-text">{{ $order->shipped_at->format('M d, Y H:i') }}</p>
                            </div>
                        </div>
                        @endif

                        @if($order->delivered_at)
                        <div class="timeline-item">
                            <div class="timeline-marker bg-success"></div>
                            <div class="timeline-content">
                                <h6 class="timeline-title">Order Delivered</h6>
                                <p class="timeline-text">{{ $order->delivered_at->format('M d, Y H:i') }}</p>
                            </div>
                        </div>
                        @endif

                        @if($order->status === 'cancelled')
                        <div class="timeline-item">
                            <div class="timeline-marker bg-danger"></div>
                            <div class="timeline-content">
                                <h6 class="timeline-title">Order Cancelled</h6>
                                <p class="timeline-text">{{ $order->updated_at->format('M d, Y H:i') }}</p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- User Information -->
            @if($order->user)
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">User Account</h6>
                </div>
                <div class="card-body">
                    <div class="text-center mb-3">
                        <h6>{{ $order->user->name }}</h6>
                        <p class="text-muted small">{{ $order->user->email }}</p>
                        <span class="badge badge-{{ $order->user->role === 'admin' ? 'danger' : 'primary' }}">
                            {{ ucfirst($order->user->role) }}
                        </span>
                    </div>

                    <div class="row text-center small">
                        <div class="col-6">
                            <strong class="text-primary">{{ $order->user->orders->count() }}</strong>
                            <div class="text-muted">Total Orders</div>
                        </div>
                        <div class="col-6">
                            <strong class="text-success">${{ number_format($order->user->orders->sum('total_amount'), 2) }}</strong>
                            <div class="text-muted">Total Spent</div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <a href="{{ route('admin.users.show', $order->user) }}" class="btn btn-primary btn-sm btn-block">
                            <i class="fas fa-user"></i> View Profile
                        </a>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<style>
.badge-lg {
    font-size: 0.9em;
    padding: 0.5em 0.75em;
}

.timeline {
    position: relative;
    padding-left: 30px;
}

.timeline-item {
    position: relative;
    margin-bottom: 20px;
}

.timeline-marker {
    position: absolute;
    left: -35px;
    top: 5px;
    width: 12px;
    height: 12px;
    border-radius: 50%;
}

.timeline-item:not(:last-child)::before {
    content: '';
    position: absolute;
    left: -30px;
    top: 17px;
    width: 2px;
    height: calc(100% + 8px);
    background-color: #e3e6f0;
}

.timeline-title {
    font-size: 0.9rem;
    margin-bottom: 5px;
    font-weight: 600;
}

.timeline-text {
    font-size: 0.8rem;
    color: #6c757d;
    margin-bottom: 0;
}
</style>
@endsection