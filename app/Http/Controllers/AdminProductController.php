<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }

    // Show edit page
    public function edit()
    {

        return view('admin.product_edit');
    }

    // Receives a request to edit the product PUT
    public function update()
    {
    }

    // Show create page
    public function create()
    {

        return view('admin.product_create');
    }

    // Receives a request to create the product POST
    public function store()
    {
    }
}
