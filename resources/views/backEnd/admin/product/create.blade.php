@extends('layouts.Adminnn')
@section('back_end_product')
    class="active"
@endsection

@section('title')

    Brand Management

@endsection

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class = "col-md-8 col-md-8-offset-2">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Product</h4>
                        </div>


                        <div class = "card-body">

                            {{--<div class="panel-body">--}}
                                <form class="form-horizontal" role="form" method="POST" action="{{ route('backEnd.admin.product.store') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}


                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{{$error}}</li>
                                                @endforeach
                                            </ul>

                                        </div>

                                    @endif

                                    <div class="row">



                                            <div class="form-group{{ $errors->has('product_image') ? ' has-error' : '' }}">
                                                <label class="col-md-3 control-label">Product Image</label>

                                                <div class="col-md-8">

                                                    <input id="product_image"  class="form-control"type="file"  value="Select Product Image" name="'product_image'" required >
                                                    @if($errors->has('product_image'))
                                                        <span style="color:red">{{ $errors->first('product_image') }}</span>
                                                    @endif
                                                </div>

                                            </div>

                                            <!-- <div class=form-group>
                                              <input id="pro_img" type="file" >
                                             </div>
 -->



                                        <div class="form-group {{ $errors->has('brand_id') ? ' has-error' : '' }}">
                                                <label class="col-md-3 control-label">Brand Name</label>
                                                <div class="col-md-8">



                                                    <select name="brand_id" id="brand_id" class="form-control" required>
                                                        @foreach($brands as $brand)
                                                        <option value="{{ $brand->id }}"> {{ $brand->brand_name }}</option>
                                                       @endforeach
                                                    </select>


                                                    @if($errors->has('brand_id'))
                                                        <span style="color:red">{{ $errors->first('brand_id') }}</span>
                                                    @endif
                                                </div>
                                            </div>




                                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                <label class="col-md-3 control-label">Product Name</label>

                                                <div class="col-md-8">
                                                    <input id="name" type="text" class="form-control" name="name" required value="{{ old('name') }}">
                                                    @if($errors->has('name'))
                                                        <span style="color:red">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>
                                            </div>


                                            <div class="form-group {{ $errors->has('product_code') ? ' has-error' : '' }}">
                                                <label class="col-md-3 control-label">Product Code</label>

                                                <div class="col-md-8">
                                                    <input id="product_code" type="text" class="form-control" name="product_code"  required value="{{ old('product_code') }}">
                                                    @if($errors->has('product_code'))
                                                        <span style="color:red">{{ $errors->first('product_code') }}</span>
                                                    @endif
                                                </div>
                                            </div>



                                            <div class="form-group {{ $errors->has('product_description') ? ' has-error' : '' }}">
                                                <label class="col-md-3 control-label">Product Description</label>

                                                <div class="col-md-8">
                                                    <input id="product_description" type="text" class="form-control" name="product_description"  required value="{{ old('product_description') }}">
                                                    @if($errors->has('product_description'))
                                                        <span style="color:red">{{ $errors->first('product_description') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        <button type="submit" class="btn btn-success">Add Product </button>
                                    </div>


                                </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @endsection
