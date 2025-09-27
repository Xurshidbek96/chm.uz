@extends('admin.layouts.layout')

@section('title', 'Reply to Message')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Reply to Message</h1>
        <div>
            <a href="{{ route('admin.messages.show', $message) }}" class="btn btn-info">
                <i class="fas fa-eye"></i> View Message
            </a>
            <a href="{{ route('admin.messages.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Messages
            </a>
        </div>
    </div>

    <div class="row">
        <!-- Reply Form -->
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Reply to: {{ $message->subject }}</h6>
                </div>
                <div class="card-body">
                    <!-- Original Message -->
                    <div class="mb-4 p-3 bg-light rounded">
                        <h6 class="font-weight-bold mb-2">Original Message:</h6>
                        <p class="mb-2"><strong>From:</strong> {{ $message->name }} ({{ $message->email }})</p>
                        <p class="mb-2"><strong>Date:</strong> {{ $message->created_at->format('M d, Y H:i') }}</p>
                        <p class="mb-0">{{ $message->message }}</p>
                    </div>

                    @if($message->reply_message)
                    <div class="mb-4 p-3 bg-primary text-white rounded">
                        <h6 class="font-weight-bold mb-2">Previous Reply:</h6>
                        <p class="mb-0">{{ $message->reply_message }}</p>
                        <small class="d-block mt-2 opacity-75">
                            Replied on: {{ $message->replied_at->format('M d, Y H:i') }}
                        </small>
                    </div>
                    @endif

                    <!-- Reply Form -->
                    <form action="{{ route('admin.messages.reply', $message) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        
                        <div class="form-group">
                            <label for="reply_message">Your Reply <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('reply_message') is-invalid @enderror" 
                                      id="reply_message" 
                                      name="reply_message" 
                                      rows="8" 
                                      placeholder="Type your reply here..."
                                      required>{{ old('reply_message', $message->reply_message) }}</textarea>
                            @error('reply_message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">
                                This reply will be sent to {{ $message->email }}
                            </small>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" 
                                       class="form-check-input" 
                                       id="send_email" 
                                       name="send_email" 
                                       value="1" 
                                       {{ old('send_email', '1') === '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="send_email">
                                    Send email notification to customer
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-paper-plane"></i> Send Reply
                            </button>
                            <a href="{{ route('admin.messages.show', $message) }}" class="btn btn-secondary">
                                <i class="fas fa-times"></i> Cancel
                            </a>
                        </div>
                    </form>
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
                        <label class="font-weight-bold">Last Reply:</label>
                        <p class="mb-0">{{ $message->replied_at->format('M d, Y H:i') }}</p>
                        <small class="text-muted">{{ $message->replied_at->diffForHumans() }}</small>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Quick Actions</h6>
                </div>
                <div class="card-body">
                    @if($message->status === 'unread')
                    <form action="{{ route('admin.messages.mark-read', $message) }}" method="POST" class="mb-2">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-info btn-block">
                            <i class="fas fa-eye"></i> Mark as Read
                        </button>
                    </form>
                    @endif

                    <a href="mailto:{{ $message->email }}" class="btn btn-outline-primary btn-block mb-2">
                        <i class="fas fa-envelope"></i> Send Direct Email
                    </a>
                    
                    @if($message->phone)
                    <a href="tel:{{ $message->phone }}" class="btn btn-outline-success btn-block mb-2">
                        <i class="fas fa-phone"></i> Call Phone
                    </a>
                    @endif

                    <form action="{{ route('admin.messages.destroy', $message) }}" method="POST" 
                          onsubmit="return confirm('Are you sure you want to delete this message?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-block">
                            <i class="fas fa-trash"></i> Delete Message
                        </button>
                    </form>
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
                        <h6>{{ $message->user->name }}</h6>
                        <p class="text-muted small">{{ $message->user->email }}</p>
                        <span class="badge badge-{{ $message->user->role === 'admin' ? 'danger' : 'primary' }}">
                            {{ ucfirst($message->user->role) }}
                        </span>
                    </div>

                    <div class="row text-center small">
                        <div class="col-4">
                            <strong class="text-primary">{{ $message->user->orders->count() }}</strong>
                            <div class="text-muted">Orders</div>
                        </div>
                        <div class="col-4">
                            <strong class="text-success">${{ number_format($message->user->orders->sum('total_amount'), 2) }}</strong>
                            <div class="text-muted">Spent</div>
                        </div>
                        <div class="col-4">
                            <strong class="text-info">{{ $message->user->messages->count() }}</strong>
                            <div class="text-muted">Messages</div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <a href="{{ route('admin.users.show', $message->user) }}" class="btn btn-primary btn-sm btn-block">
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
.opacity-75 {
    opacity: 0.75;
}
</style>
@endsection