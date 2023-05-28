<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::Paginate(15);

        return view ('category.index', compact('category'));
    }

    public function create():View
    {   
        $products = Product::pluck('product_name', 'id');
        return view('category.create',compact('products'));
    }

    public function store(Request $request):RedirectResponse
    {
        $request->except(['updated_at', 'created_at',]);
        // $incomingFields = $request;
        $incomingFields = $request->validate([
            'description'=> 'bail|required|max:30',
            'category_name' => 'required',
            'product_id' => 'required',
        ]);

        $category = new category;

        // Set the values from the request data
        $category->category_name = $request->input('category_name');
        $category->description = $request->input('description');
        $category->product_id = $request->input('product_id');
        // Set more fields as needed

        // Save the category
        $category->save();

        //category::create($incomingFields);

        return redirect('category');
    }

    public function show(string $id):View
    {
        $category = category::find($id);
        return view('category.show',compact('category'));
    }

    public function edit(string $id):View
    {
        $category = category::find($id);

        return view('category.edit',compact('category'));
    }

    public function update( category $category, Request $request)
    {
        $request->except([ 'updated_at', 'created_at',]);
        $incomingFields = $request->validate([
            'description'=> 'bail|required|max:30',
            'category_name' => 'required',
            'product_id' => 'required',
        ]);
        
        $category->update($incomingFields);

        return redirect('category');
    }

    public function destroy(category $category)
    {
        $category->delete(); 
        return redirect('category');
    }

}
