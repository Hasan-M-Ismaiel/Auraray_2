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

    public function showmassage_oil(Product $Product)
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

    public function showbaby_bath(Product $Product)
    {
        $products = Product::where('type', 'Baby bath')->get();
        return view('products.baby_bath', compact('products'));
    }

    public function showbaby_cologne(Product $Product)
    {
        $products = Product::where('type', 'Baby cologne')->get();
        return view('products.baby_cologne', compact('products'));
    }

    public function showbaby_lotion(Product $Product)
    {
        $products = Product::where('type', 'Baby lotion')->get();
        return view('products.baby_lotion', compact('products'));
    }

    public function showbaby_oil(Product $Product)
    {
        $products = Product::where('type', 'Baby oil')->get();
        return view('products.baby_oil', compact('products'));
    }

    public function showbaby_shampoo(Product $Product)
    {
        $products = Product::where('type', 'Baby shampoo')->get();
        return view('products.baby_shampoo', compact('products'));
    }

    public function showhair_treatment(Product $Product)
    {
        $products = Product::where('type', 'Hair treatment')->get();
        return view('products.hair_treatment', compact('products'));
    }

    public function showwhitening_body_lotion(Product $Product)
    {
        $products = Product::where('type', 'Whitening body lotion')->get();
        return view('products.whitening_body_lotion', compact('products'));
    }

    public function showalcohol(Product $Product)
    {
        $products = Product::where('type', 'Alcohol')->get();
        return view('products.alcohol', compact('products'));
    }

    public function showface_body_cream(Product $Product)
    {
        $products = Product::where('type', 'Face and body cream')->get();
        return view('products.face_body_cream', compact('products'));
    }

    public function showface_body_mud_mask(Product $Product)
    {
        $products = Product::where('type', 'Face and body mud mask')->get();
        return view('products.face_body_mud_mask', compact('products'));
    }

    public function showface_body_scrub(Product $Product)
    {
        $products = Product::where('type', 'Face and body scrub')->get();
        return view('products.face_body_scrub', compact('products'));
    }


    // new API call
    public function getByType(Request $request)
    {
        $type = $request->query('type');
        $brand = $request->query('brand');

        $products = \App\Models\Product::where('type', $type)
            ->when($brand, fn($q) => $q->where('brand', $brand))
            ->get();

        return response()->json($products);
    }
}
