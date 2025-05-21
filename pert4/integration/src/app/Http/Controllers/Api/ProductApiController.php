<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductApiController extends Controller
{
    //
    public function index(){
        $product = Product::get();
        return response()->json($product);
    }
}
