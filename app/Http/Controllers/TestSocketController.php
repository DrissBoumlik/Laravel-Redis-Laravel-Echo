<?php

namespace App\Http\Controllers;

use App\Events\OrderCreatedEvent;
use App\Models\Order;
use Illuminate\Http\Request;

class TestSocketController extends Controller
{
    public function index()
    {
        $order = Order::create([
            'user_id' => auth()->user()->id,
            'date' => now()
        ]);
        $event = new OrderCreatedEvent($order);
        broadcast($event);
        dd();
    }
    
    public function authUser()
    {
        return [
            'user' => auth()->user()
        ];
    }

    public function home()
    {
        return view('welcome');
    }
}
