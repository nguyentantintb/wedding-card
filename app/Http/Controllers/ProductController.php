<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Photo;
use App\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\File;
use Validator;

// use Illuminate\Support\Facades\File;               //Tried both this with Request
// use File;                                                              //This with File

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product.list', compact('products'));
    }
    //Lay thong tin tu table Categories
    public function loadTable()
    {
        $products             = Product::orderBy('name', 'asc')->with('category')->get();
        $products->updated_at = '100';
        $products_f           = ['data' => $products];
        echo json_encode($products_f);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = Category::all();
        return view('admin.product.add', compact('cate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        // if ($request->name !== null && $request->price !== null) {
        $product              = new Product();
        $product->category_id = $request->category_id;
        $product->name        = $request->name;
        $product->price       = $request->price;
        $product->description = $request->description;
        $product->save();
        $product_id = $product->id;
        // };
        if ($request->hasFile('file')) {
            $files = $request->file('file');
            foreach ($files as $file) {
                $rules     = array('file' => 'mimes:png,jpeg,jpg'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
                $validator = Validator::make(array('file' => $file), $rules);
                if ($validator->passes()) {
                    $destinationPath = 'uploads';
                    $filename        = time() . '-' . $file->getClientOriginalName();
                    $path            = $destinationPath . '/' . $filename;
                    $success         = $file->move($destinationPath, $filename);
                    if ($success) {
                        $thumbPath = 'uploads/thumbs/';
                        $thumb1    = Image::make($path)->resize(270, 180)->save($thumbPath . $filename);
                    };
                    $photo             = new Photo();
                    $photo->title      = $filename;
                    $photo->product_id = $product_id;
                    $photo->save();
                };
            };
            return redirect()->back();
        };
     return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product    = Product::findBySlug($id);
        $product_id = $product->id;
        $categories = Category::all();
        $photos     = Photo::where('product_id', '=', $product_id)->get();
        return view('admin.product.edit', compact('product', 'categories', 'photos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $product              = Product::find($id);
        $product->name        = $request->name;
        $product->price       = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->resluggify();
        $product->save();

        //Upload file
        if ($request->hasFile('file')) {
            $files = $request->file('file');
            foreach ($files as $file) {
                $rules     = array('file' => 'mimes:png,jpeg,jpg'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
                $validator = Validator::make(array('file' => $file), $rules);
                if ($validator->passes()) {
                    $destinationPath = 'uploads';
                    $filename        = time() . '-' . $file->getClientOriginalName();
                    $path            = $destinationPath . '/' . $filename;
                    $success         = $file->move($destinationPath, $filename);
                    if ($success) {
                        $thumbPath         = 'uploads/thumbs/';
                        $thumb1            = Image::make($path)->resize(270, 180)->save($thumbPath . $filename);
                        $photo             = new Photo();
                        $photo->title      = $filename;
                        $photo->product_id = $id;
                        $photo->save();
                    };
                };
            };
        };
        return redirect()->route('admin.product.edit', $product->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findBySlug($id);
        $product->delete();
        return redirect()->back();
    }
}
