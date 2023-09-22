<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create(){
        return view('products.create');
    }

    public function upload(Request $request){
        /*
        dd($request); // access the whole request
        dd($request->variant); // access a specific data
        */

        $data = $request->validate([
            'name' => 'required',
            'variant' => 'required|numeric',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'required'
        ]);

        $newProduct = Product::create($data);

        return redirect(route('product.index'))->with('success', 'Product Created Successfully!');
    }

    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);
    }

    public function detail(Product $product){
        return view('products.detail', ['product' => $product]);
    }

    public function update(Product $product, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'variant' => 'required|numeric',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'required'
        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('success', 'Product Updated Successfully!');
    }

    public function remove(Product $product){
        $product->delete();

        return redirect(route('product.index'))->with('success', 'Product Deleted Successfully!');
    }
    
    public function search(Request $request){
        $searchTerm = $request->input('search');
        
        // Perform a database query to search for products with the given name
        $products = Product::where('name', 'like', '%' . $searchTerm . '%')->get();

        return redirect(route('product.index'))->with('success', 'Search was successful!');
    }
}
