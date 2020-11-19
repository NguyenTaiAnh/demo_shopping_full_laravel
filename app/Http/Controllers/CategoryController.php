<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use function Sodium\compare;
use File;

class CategoryController extends Controller
{
    public function getlist()
    {
        $categories = Category::latest()->paginate(5);
        $category = null;
        return view('admin.category', compact('categories', 'category'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }


    public function getedit($id, Request $request)
    {
        $categories = Category::latest()->paginate(5);
        $id = $request->id;
        $category = Category::find($id);
        return view('admin.category', compact('categories', 'category'))->with('i', (request()->input('page', 1) - 1) * 5)->render();
    }

    public function postedit(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $id = $request->id;
        $category = Category::find($id);
        if ($request->file('image')) {
            File::delete('images/category/' . $category['image']);
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/category'), $imageName);
            $category->update([
                'name' => $request['name'],
                'image' => $imageName,
            ]);
        } else {
            $category->update([
                'name' => $request['name'],
            ]);
        }


        return redirect()->route('list')
            ->with('success', 'Category updated successfully');

    }


    public function postupdate(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time() . '.' . request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images/category'), $imageName);

        Category::create([
            'name' => $request['name'],
            'image' => $imageName,
        ]);
        return redirect()->route('list')
            ->with('success', 'Category created successfully.');
    }


    public function getdelete($id)
    {
        $cate = Category::find($id);
        $cate->delete();
        return redirect()->route('list');
    }
}
