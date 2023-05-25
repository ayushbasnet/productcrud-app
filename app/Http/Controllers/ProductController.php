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
        $product = Product::all();

        return view ('index')->with('product', $product);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => 'required',
            'company' => 'required',
            'price' => 'required',
        ]);
        Product::create($incomingFields);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $product = Product::find($id);
        return view('show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product):View
    {
        // $product = Product::find($id);
        return view('edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy() 
    {
        
    }
}
