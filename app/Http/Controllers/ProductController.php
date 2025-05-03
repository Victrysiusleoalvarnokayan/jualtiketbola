<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = [
            ['id' => 1, 'produk' => 'Laptop ASUS'],
            ['id' => 2, 'produk' => 'Smartphone Samsung'],
            ['id' => 3, 'produk' => 'Headphone Sony'],
        ];

        return view('list_product', compact('data'));
    }
}
