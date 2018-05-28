<?php

namespace App\Http\Controllers;


use App\Product;
use App\Unit;
use App\Brand;
use Illuminate\Http\Request;
use Image;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        $brands=Brand::all();

        return view('backEnd.admin.product.index' ,['products'=> $products, 'brands'=> $brands]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands=Brand::all();
        return view('backEnd.admin.product.create', ['brands'=> $brands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate( $request , [

            'name'  => 'required',
            'product_code' => 'required',
            'product_description' => 'required',
            'brand_id' => 'required',
            'image',

        ]);

        $product = new Product;
        $product->name = $request->name;
        $product->product_code = $request->product_code;
        $product->product_description = $request->product_description;
        $product->brand_id = $request->brand_id;



        if ($request->hasFile('product_image')){
            $image = $request->file('product_image');
            $imageName = $request->product_code . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'. $imageName);
            Image::make($image)->save($location);

            $product->Image = $imageName;
        }

        $product->save();

        return redirect('backEnd/product/create');


    }

    public function product(){

        $productList = Product::all();
        return view('backEnd/unit/create',['product'=> $productList]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {

        $product =Product::findOrFail($id);



        return view('backEnd.admin.product.show', ['product' => $product]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        return view('backEnd.admin.product.edit', ['product'=> $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate( $request, [
//            'brand_name' => 'required',
//            'brand_description' => 'required',
//            'brand_location' => 'required',
//            'brand_image' => 'image|mimes:jpg,jpeg,png|max:500',


        ]);

        $product->update($request->all());

        return redirect('backEnd.admin.product.index')->with('success', 'You just added a new Product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('backEnd.admin.product.index');
    }

    public function lists()
    {
        $products=Product::all();
        return view('backEnd.admin.product.list',['products'=>$products]);
    }

}
