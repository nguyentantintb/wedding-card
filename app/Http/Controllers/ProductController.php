<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Photo;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$products = Product::orderBy('name', 'asc')->get();
		return view('admin.product.list', compact('products'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$cate = Category::all();
		return view('admin.product.add', compact('cate'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$product = new Product();
		$image = new Photo();
		$product->category_id = $request->category;
		$product->name = $request->name;
		$product->price = $request->price;
		$product->description = $request->description;
		$product->save();

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$product = Product::findBySlug($id);
		$categories = Category::all();
		return view('admin.product.edit', compact('product', 'categories'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(ProductRequest $request, $id) {
		$product = Product::find($id);
		$product->name = $request->name;
		$product->price = $request->price;
		$product->description = $request->description;
		$product->category_id = $request->category_id;
		$product->resluggify();
		$product->save();
		return redirect('admin/product');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$product = Product::findOrFail($id);
		$product->delete();
		return redirect()->back();
	}
}
