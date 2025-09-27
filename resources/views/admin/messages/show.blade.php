@extends('admin.layouts.layout')

@section('title', 'Message Details')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Message Details</h1>
        <div>
            <a href="{{ route('admin.messages.edit', $message) }}" class="btn btn-warning">
                <i class="fas fa-reply"></i> Reply
            </a>
            <a href="{{ route('admin.messages.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Messages
            </a>
        </div>
    </div>

    <div class="row">
        <!-- Message Content -->
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">{{ $message->subject }}</h6>
                    <span class="badge badge-{{ $message->status === 'replied' ? 'success' : ($message->status === 'read' ? 'info' : 'warning') }} badge-lg">
                        {{ ucfirst($message->status) }}
                    </span>
                </div>
                <div class="card-body">
                    <div class="message-content">
                        <div class="mb-4 p-3 bg-light rounded">
                            <h6 class="font-weight-bold mb-2">Original Message:</h6>
                            <p class="mb-0">{{ $message->message }}</p>
                        </div>

                        @if($message->reply_message)
                        <div class="mb-4 p-3 bg-primary text-white rounded">
                            <h6 class="font-weight-bold mb-2">Admin Reply:</h6>
                            <p class="mb-0">{{ $message->reply_message }}</p>
                            <small class="d-block mt-2 opacity-75">
                                Replied on: {{ $message->replied_at->format('M d, Y H:i') }}
                            </small>
                        </div>
                        @endif
                    </div>

                    <!-- Quick Actions -->
                    <div class="mt-4">
                        @if($message->status === 'unread')
                        <form action="{{ route('admin.messages.mark-read', $message) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-info">
                                <i class="fas fa-eye"></i> Mark as Read
                            </button>
                        </form>
                        @endif

                        @if($message->status !== 'replied')
                        <a href="{{ route('admin.messages.edit', $message) }}" class="btn btn-success">
                            <i class="fas fa-reply"></i> Reply to Message
                        </a>
                        @endif

                        <form action="{{ route('admin.messages.destroy', $message) }}" method="POST" class="d-inline" 
                              onsubmit="return confirm('Are you sure you want to delete this message?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Message Information -->
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Message Information</h6>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="font-weight-bold">From:</label>
                        <p class="mb-1">{{ $message->name }}</p>
                        <small class="text-muted">{{ $message->email }}</small>
                    </div>

                    <div class="mb-3">
                        <label class="font-weight-bold">Phone:</label>
                        <p class="mb-0">{{ $message->phone ?? 'Not provided' }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="font-weight-bold">Subject:</label>
                        <p class="mb-0">{{ $message->subject }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="font-weight-bold">Status:</label>
                        <p class="mb-0">
                            <span class="badge badge-{{ $message->status === 'replied' ? 'success' : ($message->status === 'read' ? 'info' : 'warning') }}">
                                {{ ucfirst($message->status) }}
                            </span>
                        </p>
                    </div>

                    <div class="mb-3">
                        <label class="font-weight-bold">Received:</label>
                        <p class="mb-0">{{ $message->created_at->format('M d, Y H:i') }}</p>
                        <small class="text-muted">{{ $message->created_at->diffForHumans() }}</small>
                    </div>

                    @if($message->replied_at)
                    <div class="mb-3">
                        <label class="font-weight-bold">Replied:</label>
                        <p class="mb-0">{{ $message->replied_at->format('M d, Y H:i') }}</p>
                        <small class="text-muted">{{ $message->replied_at->diffForHumans() }}</small>
                    </div>
                    @endif
                </div>
            </div>

            <!-- User Information -->
            @if($message->user)
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">User Information</h6>
                </div>
                <div class="card-body">
                    <div class="text-center mb-3">
                        <h5>{{ $message->user->name }}</h5>
                        <p class="text-muted">{{ $message->user->email }}</p>
                        <span class="badge badge-{{ $message->user->role === 'admin' ? 'danger' : 'primary' }}">
                            {{ ucfirst($message->user->role) }}
                        </span>
                    </div>

                    <div class="row text-center">
                        <div class="col-4">
                            <h6 class="text-primary">{{ $message->user->orders->count() }}</h6>
                            <small class="text-muted">Orders</small>
                        </div>
                        <div class="col-4">
                            <h6 class="text-success">${{ number_format($message->user->orders->sum('total_amount'), 2) }}</h6>
                            <small class="text-muted">Spent</small>
                        </div>
                        <div class="col-4">
                            <h6 class="text-info">{{ $message->user->messages->count() }}</h6>
                            <small class="text-muted">Messages</small>
                        </div>
                    </div>

                    <div class="mt-3">
                        <a href="{{ route('admin.users.show', $message->user) }}" class="btn btn-primary btn-sm btn-block">
                            <i class="fas fa-user"></i> View User Profile
                        </a>
                    </div>
                </div>
            </div>
            @endif

            <!-- Contact Actions -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Contact Actions</h6>
                </div>
                <div class="card-body">
                    <a href="mailto:{{ $message->email }}" class="btn btn-outline-primary btn-block mb-2">
                        <i class="fas fa-envelope"></i> Send Email
                    </a>
                    
                    @if($message->phone)
                    <a href="tel:{{ $message->phone }}" class="btn btn-outline-success btn-block mb-2">
                        <i class="fas fa-phone"></i> Call Phone
                    </a>
                    @endif

                    <a href="sms:{{ $message->phone }}" class="btn btn-outline-info btn-block">
                        <i class="fas fa-sms"></i> Send SMS
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.badge-lg {
    font-size: 0.9em;
    padding: 0.5em 0.75em;
}

.message-content {
    line-height: 1.6;
}

.opacity-75 {
    opacity: 0.75;
}
</style>
@endsection