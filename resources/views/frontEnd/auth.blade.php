@extends('layouts.pages')

@section('title')

    PHAMAX


@endsection


@section('content')



    <div class="container">
        <br>



        {{--<div class="container">--}}
        <div class="row">
            <div class="col-md-12">

                <div class="media">
                    <div class="col-md-10">
                              <div class="media-body">



                            {{--@if (isset($units))--}}
                            @foreach($units as $unit)

                                <p> Detailed information about the drug with unique code <b>{{$data}}</b></p>

                                <dl>
                                    <dt>product name:</dt>
                                    <dd>{{$unit->product->name }}</dd>



                                    <dd><img src="{{ asset('images/'.$unit->product->image)}}"></dd>
                                    <dt>product name</dt>


                                    <dt>Produced by:</dt>
                                    <dd>{{$unit->brand->brand_name}} </dd>

                                    <dt>Drug Descriptions</dt>
                                    <dd>{{ $unit->product->product_desription }} </dd>

                                    <dt>Produced on:</dt>
                                    <dd> {{ $unit->created_at }}</dd>


                                    <dt>Produced on:</dt>
                                    <dd> {{ $unit->expiration_date }}</dd>
                                </dl>
    @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection