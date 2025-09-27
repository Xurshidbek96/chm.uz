@extends('admin.layouts.layout')

@section('title', 'Send Message')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Send New Message</h1>
        <a href="{{ route('admin.messages.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to Messages
        </a>
    </div>

    <!-- Create Message Form -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Message Details</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.messages.store') }}" method="POST">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Sender Name <span class="text-danger">*</span></label>
                                    <input type="text" 
                                           class="form-control @error('name') is-invalid @enderror" 
                                           id="name" 
                                           name="name" 
                                           value="{{ old('name') }}" 
                                           required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" 
                                           class="form-control @error('email') is-invalid @enderror" 
                                           id="email" 
                                           name="email" 
                                           value="{{ old('email') }}" 
                                           required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" 
                                           class="form-control @error('phone') is-invalid @enderror" 
                                           id="phone" 
                                           name="phone" 
                                           value="{{ old('phone') }}">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_id">Link to User (Optional)</label>
                                    <select class="form-control @error('user_id') is-invalid @enderror" 
                                            id="user_id" 
                                            name="user_id">
                                        <option value="">Select User (Optional)</option>
                                        @foreach($users ?? [] as $user)
                                            <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                                                {{ $user->name }} ({{ $user->email }})
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject <span class="text-danger">*</span></label>
                            <input type="text" 
                                   class="form-control @error('subject') is-invalid @enderror" 
                                   id="subject" 
                                   name="subject" 
                                   value="{{ old('subject') }}" 
                                   required>
                            @error('subject')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('message') is-invalid @enderror" 
                                      id="message" 
                                      name="message" 
                                      rows="8" 
                                      placeholder="Enter your message here..." 
                                      required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control @error('status') is-invalid @enderror" 
                                            id="status" 
                                            name="status">
                                        <option value="unread" {{ old('status', 'unread') === 'unread' ? 'selected' : '' }}>Unread</option>
                                        <option value="read" {{ old('status') === 'read' ? 'selected' : '' }}>Read</option>
                                        <option value="replied" {{ old('status') === 'replied' ? 'selected' : '' }}>Replied</option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" 
                                       class="custom-control-input" 
                                       id="send_email" 
                                       name="send_email" 
                                       value="1" 
                                       {{ old('send_email') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="send_email">
                                    Send email notification to recipient
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i> Send Message
                            </button>
                            <a href="{{ route('admin.messages.index') }}" class="btn btn-secondary">
                                <i class="fas fa-times"></i> Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <!-- Message Guidelines -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Message Guidelines</h6>
                </div>
                <div class="card-body">
                    <div class="small">
                        <h6 class="font-weight-bold">Tips for effective messaging:</h6>
                        <ul class="mb-3">
                            <li>Use clear and concise subject lines</li>
                            <li>Be professional and courteous</li>
                            <li>Include all necessary information</li>
                            <li>Proofread before sending</li>
                        </ul>
                        
                        <h6 class="font-weight-bold">Message Status:</h6>
                        <ul class="mb-3">
                            <li><strong>Unread:</strong> New message, not yet viewed</li>
                            <li><strong>Read:</strong> Message has been viewed</li>
                            <li><strong>Replied:</strong> Response has been sent</li>
                        </ul>
                        
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle"></i>
                            <strong>Note:</strong> If you link this message to a user account, it will appear in their message history.
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Recent Messages -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Recent Messages</h6>
                </div>
                <div class="card-body">
                    @if(isset($recentMessages) && $recentMessages->count() > 0)
                        @foreach($recentMessages as $recentMessage)
                        <div class="mb-3 pb-2 border-bottom">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h6 class="mb-1">{{ $recentMessage->subject }}</h6>
                                    <p class="mb-1 small text-muted">From: {{ $recentMessage->name }}</p>
                                    <p class="mb-0 small text-muted">{{ $recentMessage->created_at->diffForHumans() }}</p>
                                </div>
                                <span class="badge badge-{{ $recentMessage->status === 'replied' ? 'success' : ($recentMessage->status === 'read' ? 'info' : 'warning') }}">
                                    {{ ucfirst($recentMessage->status) }}
                                </span>
                            </div>
                        </div>
                        @endforeach
                        
                        <div class="text-center">
                            <a href="{{ route('admin.messages.index') }}" class="btn btn-sm btn-outline-primary">
                                View All Messages
                            </a>
                        </div>
                    @else
                        <p class="text-muted text-center">No recent messages</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Auto-fill email and phone when user is selected
    const userSelect = document.getElementById('user_id');
    const emailInput = document.getElementById('email');
    const phoneInput = document.getElementById('phone');
    const nameInput = document.getElementById('name');
    
    if (userSelect) {
        userSelect.addEventListener('change', function() {
            if (this.value) {
                // In a real implementation, you would fetch user data via AJAX
                // For now, we'll just clear the fields to avoid conflicts
                const selectedOption = this.options[this.selectedIndex];
                const userData = selectedOption.text.match(/^(.+) \((.+)\)$/);
                
                if (userData) {
                    nameInput.value = userData[1];
                    emailInput.value = userData[2];
                }
            }
        });
    }
});
</script>
@endsection