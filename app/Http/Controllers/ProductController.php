<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    private $products =[
        1 => ['name' => 'kaos laravel', 'price' => 150000],
        2 => ['name' => 'stiker coding', 'price' => 25000],
        3 => ['name' => 'notebook dev', 'price' => 50000],
    ];


    //menampilkan daftar produk
    public function index()
    {
        $products = $this->products;
        return view('products.index', compact('products'));
    }
}