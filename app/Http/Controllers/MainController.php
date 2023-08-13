<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index(): View
    {
        $products = Product::where('is_active', 1)
            ->paginate(6);

        return view('main', compact('products'));
    }

    public function show($id)
    {
        $product = Product::where('id', $id)
            ->where('is_active', true)
            ->first();

        if (!$product || !$product->is_active) {
            return abort(404, 'Unfortunately, the product does not exist');
        }

        return view('show', ['product' => $product]);
    }

    public function showOrder($id)
    {
        $product = Product::where('id', $id)
            ->where('is_active', true)
            ->first();

        if (!$product || !$product->is_active) {
            return abort(404, 'Unfortunately, it is not possible to make order for a non-existent product');
        }

        return view('order', ['product' => $product]);
    }

    public function handleOrder(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'comment' => 'required|min:10',
        ]);

        $order = Order::create([
            'product_id' => $request->input('product_id'),
            'user_id' => auth()->user()->id,
            'status_id' => Status::where('name', 'new')->first()->id,
            'comment' => $request->input('comment'),
        ]);

        return view('thanks', ['orderId' => $order->id]);
    }
}
