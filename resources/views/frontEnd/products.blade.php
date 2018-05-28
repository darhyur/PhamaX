@extends('layouts.pages')
@section('front_end_products')
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
            <div class="row">
                <div class="col-md-10">
                    @foreach($products as $product)

                        <div class="card card-plain">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">{{ $product->name }}</h4>

                            </div>
                            <div class="card-content">
                                <div class="row">
                                        <div class="col-md-4 gallery">
                                            <img src="{{ $product->product_image')}}" alt="Phamax MD" style="width:100%;height:200px">
                                           
                                            <div class="desc">
                                                <h4 class="title">{{ $product->name }}</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-4 product_description">
                                            <br>
                                            <br>
                                            <dl>
                                            <dt>Name</dt>
                                            <dd>  {{ $product->name }} </dd>
                                            </dl>
                                            <dl>
                                                <dt>Product Description</dt>
                                                <dd>  {{ $product->product_description }} </dd>
                                            </dl>


                                                <dl>
                                                <dt>Brand </dt>
                                                <dd> 
                                                    {{ $product->brand->brand_name}}
                                                </dd>
                                            </dl>

                                        </div>

                                </div>

                         </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>




@endsection
