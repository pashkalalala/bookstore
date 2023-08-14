<?php

namespace App\Http\Controllers;

use App\Actions\CreateOrderAction;
use App\Http\Requests\CreateOrderRequest;
use App\Models\Product;
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

        $this->checkProductAvailability($product, 'Unfortunately, the product does not exist');

        return view('show', ['product' => $product]);
    }

    public function showOrder($id)
    {
        $product = Product::where('id', $id)
            ->where('is_active', true)
            ->first();

        $this->checkProductAvailability($product, 'Unfortunately, it is not possible to make order for a non-existent product');

        return view('order', ['product' => $product]);
    }

    public function storeOrder(CreateOrderRequest $request, CreateOrderAction $createOrderAction)
    {
        $order = $createOrderAction($request);

        return view('thanks', ['orderId' => $order->id]);
    }

    public function checkProductAvailability($product, string $message)
    {
        if (!$product || !$product->is_active) {
            abort(404, $message);
        }
    }
}
