<?php
namespace App\Http\Controllers;

use App\Product;
use App\Brand;
use App\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function index(){


        $user = auth()->guard('admin')->user();
        ($user);

        return view('backEnd.index');
    }

    public function dashboard(){


        $brands=Brand::all();
        $brandNo=Brand::count();

        $product=Product::all();
        $productNo=Product::count();
        $units=Unit::all();
        $unitNo=Unit::count();


        return view('backEnd.admin.dashboard',[
            'brands'=> $brands ,'products'=>$product, 'brandNo'=>$brandNo,
            'productNo'=>$productNo,  'unitNo'=>$unitNo, 'units'=>$units
        ]);
    }
}