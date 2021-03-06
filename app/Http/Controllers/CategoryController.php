<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(['id','title','desc']);
        return response()->json($categories);
    }


    public function store(Request $request)
    {
        $category = Category::create($request->post());
        return response()->json([
            'message'=>'Категория успешно создана!!',
            'category'=>$category
        ]);
    }

    public function show(Category $category)
    {
        return response()->json($category);
    }
    public function update(Request $request, Category $category)
    {
        $category->fill($request->post())->save();
        return response()->json([
            'message'=>'Категория успешно обновлена!!',
            'category'=>$category
        ]);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json([
            'message'=>'Категория удалена успешно!!'
        ]);
    }
}
