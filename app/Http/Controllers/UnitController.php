<?php

namespace App\Http\Controllers;

use App\Unit;
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
     */
    public function create()
    {
        return view('backEnd.admin.unit.create');
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
