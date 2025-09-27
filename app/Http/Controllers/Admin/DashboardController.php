<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index(): View
    {
        // Get statistics
        $stats = [
            'total_products' => Product::count(),
            'total_categories' => Category::count(),
            'total_orders' => Order::count(),
            'total_messages' => Message::count(),
            'total_users' => User::count(),
            'pending_orders' => Order::where('status', 'pending')->count(),
            'unread_messages' => Message::where('status', 'unread')->count(),
            'active_products' => Product::where('status', 'active')->count(),
        ];

        // Recent orders
        $recentOrders = Order::with(['user'])
            ->latest()
            ->take(5)
            ->get();

        // Recent messages
        $recentMessages = Message::with(['user'])
            ->latest()
            ->take(5)
            ->get();

        // Monthly sales data for chart
        $monthlySales = Order::selectRaw('MONTH(created_at) as month, COUNT(*) as count, SUM(total_amount) as total')
            ->whereYear('created_at', Carbon::now()->year)
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        // Top selling products
        $topProducts = Product::withCount(['orders'])
            ->orderBy('orders_count', 'desc')
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'stats',
            'recentOrders',
            'recentMessages',
            'monthlySales',
            'topProducts'
        ));
    }
}