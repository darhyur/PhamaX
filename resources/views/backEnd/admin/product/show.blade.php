@extends('layouts.Adminnn')
@section('back_end_product')
    class="active"
@endsection

@section('title')

Product Management
@endsection

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class = "col-md-8 col-md-offset-2">
                    <p class="detailed-info"> Product Details</p>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="title">{{$product->name}}</h4>
                        </div>


                        <div class = "card-body">
                            <div class="container-fluid">
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <dl>

                                            <dd><img src="{{ asset('images/'.$product->image)}}"></dd>
                                            <dt>Product Image</dt>
                                        </dl>
                                    </div>
                                    <div class="col-md-8">
                                        <dl>
                                            <dt>Product Name</dt>
                                            <dd>{{$product->name}}</dd>
                                        </dl>
                                        <dl>
                                            <dt>Produced By:</dt>
                                            <dd>{{$product->brand->brand_name}}</dd>
                                        </dl>
                                        <dl>
                                            <dt>Product Description</dt>
                                            <dd>{{$product->product_description}}</dd>
                                        </dl>
                                    </div>

                                </div>
                                <br>

                            </div>







                           {{--{!! html::linkroute('backEnd.admin.brand.edit', 'Edit', array($brand->id), array('class'=>'btn btn-default')) !!}--}}

                            {{--<br>--}}



                            {{--{!! Form::open(['route'=> ['backEnd.admin.brand.edit',$brand->id], 'method'=>'DELETE'])!!}--}}
                            {{--{!! Form::submit('delete',['class'=>'btn btn-danger btn'])!!}--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @endsection
