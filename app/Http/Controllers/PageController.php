<?php

namespace App\Http\Controllers;

use App\Product;
use App\Unit;
use Illuminate\Http\Request;
use App\Brand;
use Illuminate\Support\Facades\Input;

class PageController extends Controller
{
    public function index(){


        return view('frontEnd.index');



    }
    public function brands()
    {

        $brands = Brand::all();


        return view('frontEnd.brands', ['brands'=>$brands]);
    }

    public function authenticate()
    {

        return view('frontEnd.authenticate');
    }

    public function getBrand($slug)
    {

        $brand = Brand::where('slug','=', $slug)->first();


        return view('frontEnd.brand', ['brand'=>$brand]);
    }


    public function products()
    {


//        $brand = Brand::get()->brand_name
//                    ->where('brand_id');





        $products = Product::all();




        return view('frontEnd.products', ['products'=>$products ]);

    }

    public function search(Request $request)
    {
         $drug = $request->unit;


        $data = trim($drug);

        if( $data != "" ){

            $units = Unit::where( 'unit_code', $data)->get();
//            dd($units);



//            $units = Unit::where( 'unit_code', 'like', '%' . $data . '%')->get();


//            if (count($unit) > 0 ){

//                dd($unit);
//

                return view( 'frontEnd.auth', ['units'=>$units, 'data'=> $data]);

            }
            return redirect('frontEnd.unit')->with('status', 'Product with the unique code you supply is fake. ');

//        } return redirect('frontEnd.unit')->with('status', 'Input the unique code at the back of the product to AUTHENTICATE ');



    }
     public function unit(){

        $units = Unit::all();


        return view('frontEnd.unit',['units'=> $units]);


     }




}
