<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        // return view('products.index', [
        //     'products' => Product::latest()->filter(
        //         request(['search'])
        //     )->paginate(6)->withQueryString(),
        // ]);
    }

    public function show(Product $Product)
    {
        // return view('products.show', [
        //     'product' => $Product
        // ]);
    }

    public function showShampoo(Product $Product)
    {
        $products = Product::where('type', 'shampoo')->get();
        return view('products.shampoo', compact('products'));
    }

    public function showlotion(Product $Product)
    {
        $products = Product::where('type', 'Lotion')->get();
        return view('products.lotion', compact('products'));
    }

    public function showmessage_oil(Product $Product)
    {
        $products = Product::where('type', 'Massage oil')->get();
        return view('products.message_oil', compact('products'));
    }

    public function showshower_scrub(Product $Product)
    {
        $products = Product::where('type', 'Shower scrub')->get();
        return view('products.shower_scrub', compact('products'));
    }

    public function showshower_gel(Product $Product)
    {
        $products = Product::where('type', 'Shower gel')->get();
        return view('products.shower_gel', compact('products'));
    }

    public function showmask(Product $Product)
    {
        $products = Product::where('type', 'Mask')->get();
        return view('products.mask', compact('products'));
    }

    public function showmoroccan_soap(Product $Product)
    {
        $products = Product::where('type', 'Moroccan Soap')->get();
        return view('products.moroccan_soap', compact('products'));
    }

    public function showconditioner(Product $Product)
    {
        $products = Product::where('type', 'Conditioner')->get();
        return view('products.conditioner', compact('products'));
    }

    public function showserum(Product $Product)
    {
        $products = Product::where('type', 'Serum')->get();
        return view('products.serum', compact('products'));
    }

}
