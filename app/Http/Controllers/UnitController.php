<?php

namespace App\Http\Controllers;

use App\Unit;
use App\Brand;
use App\Product;

use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units=Unit::all();
//        $drugs=Unit::all();

        return view('backEnd.admin.unit.index' ,['units'=> $units]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     *
     *
     *
     */


    public function getBrand($id)
    {
        $dynamicBrand = Brand::where('id', '=', $id)->get();
        $options = array();

        $brandProducts = Product::where('brand_id', '=', $id)->get();
//        foreach ($dynamicBrand as $dBrand) {
//            $options += array($dBrand->brand_id => $dBrand->name);
//        }

        return $brandProducts;
//        return Response::json($options);
    }



    public function create()
    {




        $brandLists =Brand::all();


        return view('backEnd.admin.unit.create',['brandLists'=> $brandLists]);

           }

           public  function fetch(Request $request){

        $data = Product::select('name','id')->where('brand_id',$request->brand_id)
        ->get();


        return response()->json($data);
//        $value = $request->get('value');
//        $dependent = $request->get('dependent');
//        $data = DB::table('product')
//            ->where($select, $value)
//            ->groupBy($dependent)
//            -> get();
//        $output = '<option value="$data">select '.ucfirst($dependent).'</option>';
//        foreach ($data as $row)
//        {
//             $output .= '<option value="data" ' .$row->$dependent.'">
//             '.$row->$dependent. '</option>';
//
//        }
//
//
//        echo $output;


           }



    public function product(){

        $brandLists =Brand::all();


//        $productLists = Product::all();
        return view('backEnd.admin.unit.create',['brandLists'=> $brandLists, 'brands'=>$brands]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $this->validate( $request, [


            'product_id'  => 'required',
            'brand_id'=> 'required',
            'unit_code' => 'required',
            'expiration_date' => 'required|date',
            'created_at' => 'required|date',


        ]);

        unit::create($request->all());

        return redirect('backEnd.admin.unit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unit=Unit::find($id);
        return view('backEnd.admin.unit.show', ['unit'=> $unit]);
    }

    public function productName(Request $request){

        $data = Product::select('name', 'id')->where ('brand_id', $request)
        ->get();

        return response()->json($data);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unit=Unit::find($id);
        return view('backEnd.admin.unit.edit', ['unit'=> $unit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Unit $unit)
    {

        $this->validate( $request, [

            'product_id'  =>'required',
            'brand_id'=> 'required',
            'unit_code' => 'required|max:13',
            'expiration_date' => 'required|date',
            'created_at' => 'required|date',


        ]);

        $unit->update($request->all());

        return redirect('backEnd.admin.unit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
        $unit->delete();
        dd('empty');
        return redirect()->route('backEnd.admin.unit.index');
    }


    public function lists()
    {

        $units=Unit::all();
        return view('backEnd.admin.unit.list', ['units'=> $units]);
    }

}
