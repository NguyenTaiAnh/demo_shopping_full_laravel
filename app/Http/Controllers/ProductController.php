<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Attribute;
use App\Image;
use Validator;
use File;
use App\User;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $products = Product::latest()->paginate(5);

        return view('Product.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::select('id','name','image')->get()->toArray();
        return view('Product.create', compact('category'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'cates' => 'required',
            'name' => 'required',
            'description' => 'required',

        ]);
        $user = \auth()->user();
        $product = new Product;
        $product->name = $request['name'];
        $product->description = $request['description'];
        $product->category_id = $request['cates'];
        $product->user_id = $user->id;
        $product->save();

        $product_id = $product->id;
//       Attribute
        $size = (array)$request->size;
        $color = (array)$request->color;
        $price = (array)$request->price;
        $amount = (array)$request->amount;
        $price_sale = (array)$request->price_sale;

        for ($i=0; $i < count($size); $i++) {
            $attribute = new Attribute();
            $attribute ->size = $size[$i];
            $attribute ->color = $color[$i];
            $attribute ->price = $price[$i];
            $attribute ->amount = $amount[$i];
            $attribute ->price_sale = $price_sale[$i];
            $attribute ->product_id = $product_id;
            $attribute ->save();
        }
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            $count = 0;
            foreach($files as $file){

                $product_image = new Image();
                $extension = $file->getClientOriginalExtension();
                $filename = time()."-".date('his')."-".$count.".".$extension;
                $file->move('images/product/' , $filename);
                $product_image->path = $filename;
                $product_image->product_id = $product_id;
                $product_image->save();
                $count++;
            }
        }
        //Save

        return redirect()->route('products.index')
            ->with('success','Product created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function edit(Product $product)
    {
        //
        $category = Category::select('id','name','image')->get()->toArray();
        return view('Product.edit',compact('product','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        $request->validate([
            'cates' => 'required',
            'name' => 'required',
            'description' => 'required',
        ]);
        $product->update([
            'name' => $request['name'],
            'description' => $request['description'],
            'category_id' => $request['cates']
        ]);

//       Attribute

        $size = (array)$request->size;
        $color = (array)$request->color;
        $price = (array)$request->price;
        $amount = (array)$request->amount;
        $price_sale = (array)$request->price_sale;
        if (count($size) > 0)
        {
            $product->attribute()->delete();
        }
        for ($i=0; $i < count($size); $i++) {
            $attribute = new Attribute();
            $attribute ->size = $size[$i];
            $attribute ->color = $color[$i];
            $attribute ->price = $price[$i];
            $attribute ->amount = $amount[$i];
            $attribute ->price_sale = $price_sale[$i];
            $attribute ->product_id = $product->id;
            $attribute ->save();
        }
        if ($request->hasFile('image')) {
            $product->image()->delete();
            $files = $request->file('image');
            $count = 0;
            foreach($files as $file){

                $product_image = new Image();
                $extension = $file->getClientOriginalExtension();
                $filename = time()."-".date('his')."-".$count.".".$extension;
                $file->move('images/product/' , $filename);
                $product_image->path = $filename;
                $product_image->product_id = $product->id;
                $product_image->save();
                $count++;
            }
        }

        return redirect()->route('products.index')
            ->with('success','Product updated successfully');

    }
    public function show(Product $product)
    {
        return view('Product.show',compact('product'));
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $product = Product::find($id);
        $product->delete();

        //

        return redirect()->route('products.index')
            ->with('success','Product deleted successfully');
    }
}
