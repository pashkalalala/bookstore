<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
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
            return abort(404, 'Product not found');
        }

        return view('show', ['product' => $product]);
    }

    public function newOrder($id)
    {
        $product = Product::where('id', $id)
            ->where('is_active', true)
            ->first();

        if (!$product || !$product->is_active) {
            return abort(404, 'Product not found');
        }

        return view('order', ['product' => $product]);
    }
}
