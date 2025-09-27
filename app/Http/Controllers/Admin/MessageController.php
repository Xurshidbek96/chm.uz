<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MessageController extends Controller
{
    /**
     * Display a listing of messages.
     */
    public function index(Request $request): View
    {
        $query = Message::with('user')->latest();

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('subject', 'like', "%{$search}%")
                  ->orWhere('message', 'like', "%{$search}%");
            });
        }

        $messages = $query->paginate(15);

        return view('admin.messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new message.
     */
    public function create(): View
    {
        $users = \App\Models\User::orderBy('name')->get();
        $recentMessages = Message::with('user')->latest()->take(5)->get();
        
        return view('admin.messages.create', compact('users', 'recentMessages'));
    }

    /**
     * Store a newly created message in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'user_id' => 'nullable|exists:users,id',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
            'status' => 'required|in:unread,read,replied',
            'send_email' => 'boolean',
        ]);

        $messageData = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'user_id' => $request->user_id,
            'subject' => $request->subject,
            'message' => $request->message,
            'status' => $request->status,
        ];

        $message = Message::create($messageData);

        // Here you could send email notification if requested
        // if ($request->send_email) {
        //     Mail::to($message->email)->send(new MessageNotificationMail($message));
        // }

        return redirect()->route('admin.messages.index')
            ->with('success', 'Message created successfully.');
    }

    /**
     * Display the specified message.
     */
    public function show(Message $message): View
    {
        // Mark as read when viewing
        if ($message->isUnread()) {
            $message->markAsRead();
        }

        return view('admin.messages.show', compact('message'));
    }

    /**
     * Show the form for editing the specified message.
     */
    public function edit(Message $message): View
    {
        return view('admin.messages.edit', compact('message'));
    }

    /**
     * Update the specified message in storage.
     */
    public function update(Request $request, Message $message): RedirectResponse
    {
        $request->validate([
            'status' => 'required|in:unread,read,replied',
            'reply_message' => 'nullable|string|max:1000',
        ]);

        $message->update([
            'status' => $request->status,
            'reply_message' => $request->reply_message,
            'replied_at' => $request->status === 'replied' ? now() : null,
        ]);

        return redirect()->route('admin.messages.index')
            ->with('success', 'Message updated successfully.');
    }

    /**
     * Remove the specified message from storage.
     */
    public function destroy(Message $message): RedirectResponse
    {
        $message->delete();

        return redirect()->route('admin.messages.index')
            ->with('success', 'Message deleted successfully.');
    }

    /**
     * Mark message as read.
     */
    public function markAsRead(Message $message): RedirectResponse
    {
        $message->markAsRead();

        return redirect()->back()
            ->with('success', 'Message marked as read.');
    }

    /**
     * Reply to a message.
     */
    public function reply(Request $request, Message $message): RedirectResponse
    {
        $request->validate([
            'reply_message' => 'required|string|max:1000',
        ]);

        $message->markAsReplied($request->reply_message);

        // Here you could also send an email notification to the user
        // Mail::to($message->email)->send(new MessageReplyMail($message));

        return redirect()->route('admin.messages.show', $message)
            ->with('success', 'Reply sent successfully.');
    }
}