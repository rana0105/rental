<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    
    public function index()
    {
        $cats = Category::all();

        return view('backend.category.index')->withCats($cats);
    }

    
    public function create()
    {
        return view('backend.category.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'cat_name' => 'required',
            'cat_des' => '',
            ]);

        $cate = new Category;

        $cate->cat_name = $request->cat_name;
        $cate->cat_des = $request->cat_des;

        $cate->save();

        return redirect()->route('categories.index')->with('success', 'Data have been save !');
    }

    
    public function show($id)
    {
        //
    }

     public function edit($id)
     {
           
     }

    public function category_edit($id)
    {
        $category = Category::find($id);

        return view('backend.category.edit-modal')->withCategory($category);
    }

    
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'cat_name' => '',
            'cat_des' => '',
            ]);

        $cate = Category::find($id);

        $cate->cat_name = $request->cat_name;
        $cate->cat_des = $request->cat_des;

        $cate->save();

        return redirect()->route('categories.index')->with('success', 'Data have been Updated !');
    }

    
    public function destroy($id)
    {
        $cate = Category::find($id);

        $cate->delete();

        return redirect()->route('categories.index')->with('success' , 'Data have been successfully deleted');
    }
}
 