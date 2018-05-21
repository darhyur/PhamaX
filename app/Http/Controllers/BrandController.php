<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use Collective\Html\HtmlFacade;


class BrandController extends Controller
{


    public function __construct()
    {
        $this->middleware('admin', ['except' => ['logout']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $brands=brand::all();
        return view('backEnd.admin.brand.index' ,['brands'=> $brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $brand_name=brand::all();


//        $brand_name=brand::all($brand_name);

        return view('backEnd.admin.brand.create');

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
            'brand_name' => 'required',
            'brand_code' => 'required',
            'brand_description' => 'required',
            'brand_location' => 'required',



        ]);

        brand::create($request->all());

        return redirect()->route('backEnd.admin.brand.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


//    public function show($slug)
//    {
//        $news = News::where('slug', $slug)->first();
//        return view('news.show', array('news' => $news));
//    }

    public function show($id)


    {
        $brand =Brand::findOrFail($id);


     return view('backEnd.admin.brand.show', ['brand' => $brand]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


//    public function edit($id)
//    {
//        $news = News::findOrFail($id);
// 
//        return view('news.edit', array('news' => $news, 'title' => 'Edit News'));
//    }



    public function edit($id)
    {

        $brand =Brand::findOrFail($id);



        return view('backEnd.admin.brand.edit', ['brand'=> $brand]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $this->validate( $request, [
            'brand_name' => 'required',
            'brand_code' => 'required',
            'brand_description' => 'required',
            'brand_location' => 'required',



        ]);

        $brand->update($request->all());


        return redirect('back');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {




        $brand->delete();
        return redirect()->route('backEnd.admin.brand.index');
    }

    public function lists()
    {

        $brands=brand::all();
        return view('backEnd.admin.brand.list', ['brands'=> $brands]);
    }

}
