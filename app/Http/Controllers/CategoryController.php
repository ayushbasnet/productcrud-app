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

        return view ('category.index',compact('category'));
    }

    public function create():View
    {   
        
        return view('category.create');
    }

    public function store(Request $request):RedirectResponse
    {
        $incomingFields = $request->validate([
            'description'=> 'bail|required|max:30',
            'category_name' => 'required',
        ]);

        category::create($incomingFields);

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
        
        $incomingFields = $request->validate([
            'description'=> 'bail|required|max:30',
            'category_name' => 'required',
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
