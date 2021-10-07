<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Carbon;

class IndexController extends Controller
{
    public function index()
    {
        $orders=Order::count();
        $todayOrder=Order::whereDate('created_at', Carbon::today())->count();
        $monthOrder=Order::whereMonth('created_at', Carbon::now()->month)->count();
        $accepted=Order::where('status', '1')->count();
        $waiting=Order::where('status', '0')->count();
        return view('dashboard.admin.index',compact('orders','todayOrder','monthOrder','accepted','waiting'));
    }

}
