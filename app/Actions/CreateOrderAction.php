<?php

namespace App\Actions;

use App\Models\Order;
use App\Models\Status;

class CreateOrderAction
{
    public function __invoke($request): Order
    {
        return Order::create([
            'product_id' => $request->input('product_id'),
            'user_id' => auth()->user()->id,
            'status_id' => Status::where('name', 'new')->first()->id,
            'comment' => $request->input('comment'),
        ]);
    }
}
