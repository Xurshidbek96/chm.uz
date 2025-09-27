@extends('admin.layouts.layout')

@section('title', 'Edit Order')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Order #{{ $order->order_number }}</h1>
        <div>
            <a href="{{ route('admin.orders.show', $order) }}" class="btn btn-info">
                <i class="fas fa-eye"></i> View Order
            </a>
            <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Orders
            </a>
        </div>
    </div>

    <!-- Edit Order Form -->
    <form action="{{ route('admin.orders.update', $order) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row">
            <!-- Order Information -->
            <div class="col-lg-8">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Order Information</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="order_number">Order Number</label>
                                    <input type="text" 
                                           class="form-control @error('order_number') is-invalid @enderror" 
                                           id="order_number" 
                                           name="order_number" 
                                           value="{{ old('order_number', $order->order_number) }}" 
                                           readonly>
                                    @error('order_number')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">Status <span class="text-danger">*</span></label>
                                    <select class="form-control @error('status') is-invalid @enderror" 
                                            id="status" 
                                            name="status" 
                                            required>
                                        <option value="pending" {{ old('status', $order->status) === 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="processing" {{ old('status', $order->status) === 'processing' ? 'selected' : '' }}>Processing</option>
                                        <option value="shipped" {{ old('status', $order->status) === 'shipped' ? 'selected' : '' }}>Shipped</option>
                                        <option value="delivered" {{ old('status', $order->status) === 'delivered' ? 'selected' : '' }}>Delivered</option>
                                        <option value="completed" {{ old('status', $order->status) === 'completed' ? 'selected' : '' }}>Completed</option>
                                        <option value="cancelled" {{ old('status', $order->status) === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="payment_status">Payment Status <span class="text-danger">*</span></label>
                                    <select class="form-control @error('payment_status') is-invalid @enderror" 
                                            id="payment_status" 
                                            name="payment_status" 
                                            required>
                                        <option value="pending" {{ old('payment_status', $order->payment_status) === 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="paid" {{ old('payment_status', $order->payment_status) === 'paid' ? 'selected' : '' }}>Paid</option>
                                        <option value="failed" {{ old('payment_status', $order->payment_status) === 'failed' ? 'selected' : '' }}>Failed</option>
                                        <option value="refunded" {{ old('payment_status', $order->payment_status) === 'refunded' ? 'selected' : '' }}>Refunded</option>
                                    </select>
                                    @error('payment_status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="payment_method">Payment Method</label>
                                    <select class="form-control @error('payment_method') is-invalid @enderror" 
                                            id="payment_method" 
                                            name="payment_method">
                                        <option value="">Select Payment Method</option>
                                        <option value="cash" {{ old('payment_method', $order->payment_method) === 'cash' ? 'selected' : '' }}>Cash</option>
                                        <option value="card" {{ old('payment_method', $order->payment_method) === 'card' ? 'selected' : '' }}>Card</option>
                                        <option value="bank_transfer" {{ old('payment_method', $order->payment_method) === 'bank_transfer' ? 'selected' : '' }}>Bank Transfer</option>
                                        <option value="online" {{ old('payment_method', $order->payment_method) === 'online' ? 'selected' : '' }}>Online Payment</option>
                                    </select>
                                    @error('payment_method')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="total_amount">Total Amount <span class="text-danger">*</span></label>
                                    <input type="number" 
                                           class="form-control @error('total_amount') is-invalid @enderror" 
                                           id="total_amount" 
                                           name="total_amount" 
                                           value="{{ old('total_amount', $order->total_amount) }}" 
                                           step="0.01" 
                                           min="0" 
                                           required>
                                    @error('total_amount')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="notes">Order Notes</label>
                            <textarea class="form-control @error('notes') is-invalid @enderror" 
                                      id="notes" 
                                      name="notes" 
                                      rows="4" 
                                      placeholder="Add any notes about this order...">{{ old('notes', $order->notes) }}</textarea>
                            @error('notes')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
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
                                    <label for="customer_name">Customer Name <span class="text-danger">*</span></label>
                                    <input type="text" 
                                           class="form-control @error('customer_name') is-invalid @enderror" 
                                           id="customer_name" 
                                           name="customer_name" 
                                           value="{{ old('customer_name', $order->customer_name) }}" 
                                           required>
                                    @error('customer_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="customer_email">Customer Email <span class="text-danger">*</span></label>
                                    <input type="email" 
                                           class="form-control @error('customer_email') is-invalid @enderror" 
                                           id="customer_email" 
                                           name="customer_email" 
                                           value="{{ old('customer_email', $order->customer_email) }}" 
                                           required>
                                    @error('customer_email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="customer_phone">Customer Phone <span class="text-danger">*</span></label>
                                    <input type="text" 
                                           class="form-control @error('customer_phone') is-invalid @enderror" 
                                           id="customer_phone" 
                                           name="customer_phone" 
                                           value="{{ old('customer_phone', $order->customer_phone) }}" 
                                           required>
                                    @error('customer_phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="customer_address">Customer Address</label>
                                    <input type="text" 
                                           class="form-control @error('customer_address') is-invalid @enderror" 
                                           id="customer_address" 
                                           name="customer_address" 
                                           value="{{ old('customer_address', $order->customer_address) }}">
                                    @error('customer_address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Update Order
                        </button>
                        <a href="{{ route('admin.orders.show', $order) }}" class="btn btn-secondary">
                            <i class="fas fa-times"></i> Cancel
                        </a>
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="col-lg-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Order Summary</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="font-weight-bold">Order Number:</label>
                            <p class="mb-0">#{{ $order->order_number }}</p>
                        </div>

                        <div class="mb-3">
                            <label class="font-weight-bold">Current Status:</label>
                            <p class="mb-0">
                                <span class="badge badge-{{ $order->status === 'completed' ? 'success' : ($order->status === 'cancelled' ? 'danger' : 'warning') }}">
                                    {{ ucfirst($order->status) }}
                                </span>
                            </p>
                        </div>

                        <div class="mb-3">
                            <label class="font-weight-bold">Payment Status:</label>
                            <p class="mb-0">
                                <span class="badge badge-{{ $order->payment_status === 'paid' ? 'success' : ($order->payment_status === 'failed' ? 'danger' : 'warning') }}">
                                    {{ ucfirst($order->payment_status) }}
                                </span>
                            </p>
                        </div>

                        <div class="mb-3">
                            <label class="font-weight-bold">Total Amount:</label>
                            <p class="mb-0">
                                <span class="h5 text-success">${{ number_format($order->total_amount, 2) }}</span>
                            </p>
                        </div>

                        <div class="mb-3">
                            <label class="font-weight-bold">Order Date:</label>
                            <p class="mb-0">{{ $order->created_at->format('M d, Y H:i') }}</p>
                        </div>

                        <div class="mb-3">
                            <label class="font-weight-bold">Last Updated:</label>
                            <p class="mb-0">{{ $order->updated_at->format('M d, Y H:i') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Order Items -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Order Items</h6>
                    </div>
                    <div class="card-body">
                        @php
                            $items = json_decode($order->items, true) ?? [];
                        @endphp
                        @forelse($items as $item)
                        <div class="mb-2 pb-2 border-bottom">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <strong>{{ $item['name'] ?? 'Unknown Product' }}</strong>
                                    <br>
                                    <small class="text-muted">Qty: {{ $item['quantity'] ?? 1 }}</small>
                                </div>
                                <div class="text-right">
                                    <div>${{ number_format(($item['price'] ?? 0) * ($item['quantity'] ?? 1), 2) }}</div>
                                    <small class="text-muted">${{ number_format($item['price'] ?? 0, 2) }} each</small>
                                </div>
                            </div>
                        </div>
                        @empty
                        <p class="text-muted text-center">No items found</p>
                        @endforelse
                        
                        @if(count($items) > 0)
                        <div class="mt-3 pt-2 border-top">
                            <div class="d-flex justify-content-between font-weight-bold">
                                <span>Total:</span>
                                <span>${{ number_format($order->total_amount, 2) }}</span>
                            </div>
                        </div>
                        @endif
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
                                <div class="text-muted">Orders</div>
                            </div>
                            <div class="col-6">
                                <strong class="text-success">${{ number_format($order->user->orders->sum('total_amount'), 2) }}</strong>
                                <div class="text-muted">Total</div>
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
    </form>
</div>
@endsection