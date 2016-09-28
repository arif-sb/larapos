<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Product;

class SaleController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'products' => Product::all()
        ];

        return view('sales.create', $data);
    }
}
