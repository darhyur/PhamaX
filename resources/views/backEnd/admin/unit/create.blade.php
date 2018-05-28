@extends('layouts.Adminnn')
@section('back_end_unit')
    class="active"
@endsection

@section('title')

    Brand Management

@endsection

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class = "col-md-8 col-md-8-offset-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add unit of Product</h4>
                        </div>
                        <br>


                        <div class = "card-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('backEnd.admin.unit.store') }}" enctype="multipart/form-data">
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
                                    <div class="form-group {{ $errors->has('brand_id') ? ' has-error' : '' }}">
                                        <label class="col-md-3 control-label">Brand Name</label>
                                        <div class="col-md-8">



                                            <select name="brand_id" id="brand_id" class="form-control brand"  required>
                                                <option value="0" disabled="true" selected="true">--Select--</option>
                                                @foreach($brandLists as $brand)
                                                    <option value="{{ $brand->id }}"> {{ $brand->id }}:{{ $brand->brand_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group {{ $errors->has('product_id') ? ' has-error' : '' }}">
                                        <label class="col-md-3 control-label">Product Name</label>
                                        <div class="col-md-8">


                                            <select name="product_id" id="product_id" class="form-control product" required>
                                                <option value="0" disabled="true" selected="true">--Select product--</option>
                                                @if (isset($brandProducts))
                                                @foreach($brandProducts  as $brandProduct)
                                                    <option value="{{ $brandProduct->id }}"> {{ $brandProduct->name }}</option>
                                                @endforeach
                                                    @endif
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('unit_code') ? ' has-error' : '' }}">
                                        <label class="col-md-3 control-label">Drug code</label>

                                        <div class="col-md-8">
                                            <input id="unit_code" type="text" class="form-control" name="unit_code" required value="{{ old('name') }}">
                                            @if($errors->has('unit_code'))
                                                <span style="color:red">{{ $errors->first('unit_code') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('created_at') ? ' has-error' : '' }}">
                                        <label class="col-md-3 control-label">Production Date </label>

                                        <div class="col-md-8">
                                            <input id="created_at" type="text" class="form-control" name="created_at" required value="{{ old('name') }}">
                                            @if($errors->has('created_at'))
                                                <span style="color:red">{{ $errors->first('created_at') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('unit_code') ? ' has-error' : '' }}">
                                        <label class="col-md-3 control-label">Drug code</label>

                                        <div class="col-md-8">
                                            <input id="unit_code" type="text" class="form-control" name="unit_code" required value="{{ old('unit_code') }}">
                                            @if($errors->has('unit_code'))
                                                <span style="color:red">{{ $errors->first('unit_code') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="container">
                                        <button type="submit" class="btn btn-success">Add unit </button>


                                    </div>
                                </div>
                                <br>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        var getBrandUrl=  "{{ route('unit.getBrand', 1)}}";
    </script>



        @endsection
