<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Stock;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
 public function __construct()
    {
        $this->middleware('auth:users');
    }

    public function index() {
         $products = Product::availableItems()->get();
        
        return view('user.index',compact('products'));
    }

    public function show($id) {
        $product = Product::findOrFail($id);
        $quantity = Stock::where('product_id', $product->id)
        ->sum('quantity');

        // いたずら防止で10より大きい場合は10で固定とする
        if($quantity > 10) {
            $quantity = 10;
        }

        return view('user.show',compact('product','quantity'));

    }
}
