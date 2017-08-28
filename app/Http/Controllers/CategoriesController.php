<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    //
    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return back()->with('message','Категория добавлена');
    }

    public function destroy($id)
    {
        $category=Category::find($id);
        $category->delete();
        return $category->title; // метод возвратит название удаленной категории, которую мы отобразим в окне alert
    }

    public function edit($id)
    {
        $category=Category::find($id);
        return view('admin.categories.edit',['category'=>$category]);
    }

    public function index(){
        $categories = Category::all();
        return view('admin.categories.categories', ['categories'=>$categories]);
    }




}
