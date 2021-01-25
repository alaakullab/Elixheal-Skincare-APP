<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home() {
//        $comment = \App\Comment::count();
//        $user = \App\User::count();
//        $ordersum = \App\Order::sum('total');
//        $order = \App\Order::count();
//        $product = \App\Product::count();
//        $Visitor = \App\Visitor::paginate(10);
        return view('admin.dashboard',
            ['title' => 'admin.dashboard']);
    }
}
