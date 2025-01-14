<?php

namespace App\Http\Controllers;

use App\Models\Product; // Import the Product model
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Product::all());
    }

    // Other methods remain unchanged...
}
