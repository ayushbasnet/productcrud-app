<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::Paginate(15);

        return view ('product.index', ['product' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $incomingFields = $request->validate([
            'product_name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'description'=> 'bail|required|max:30',
            'created_at' => 'required',
            'updated_at' => 'required',
        ]);
        Product::create($incomingFields);

        return redirect('product');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $product = Product::find($id);
        return view('product.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $product = Product::find($id);
        return view('product.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Product $product, Request $request)
    {
        $incomingFields = $request->validate([
            'product_name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'description'=> 'bail|required|max:30',
            'created_at' => 'required',
            'updated_at' => 'required',
        ]);
        
        $product->update($incomingFields);

        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete(); 
        return redirect('product');
    }
}
