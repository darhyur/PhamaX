@extends('layouts.pages')
@section('front_end_brands')
    class="active"
@endsection

@section('title')

    PHAMAX


@endsection


@section('content')



    <div class="container">
        <br>
        <br>
        <br>
        <br>
                    <div class="container">
                        <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-10">

                                        @foreach($brands as $brand)
                                            <div class="card card-plain">
                                                <div class="card-header" data-background-color="purple">
                                                    <h4 class="title">{{ $brand->brand_name }}</h4>

                                                </div>
                                                <div class="card-content">


                                                        <dl>
                                                            <dt>Brand Name</dt>
                                                            <dd>  {{ $brand->brand_name }} </dd>
                                                        </dl>

                                                        <dl>
                                                            <dt>Head Office</dt>
                                                            <dd>  {{ $brand->brand_location }} </dd>
                                                        </dl>

                                                        <dl>
                                                            <dt>Brand </dt>
                                                            <dd>  {{ substr($brand->brand_description,0,25) }}{{strlen($brand->brand_description) >25 ? '...' : ''}} </dd>
                                                        </dl>

                                                    </div>
                                                </div>

                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




@endsection
