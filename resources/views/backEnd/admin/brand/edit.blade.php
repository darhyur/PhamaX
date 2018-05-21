@extends('layouts.Adminnn')
@section('back_end_brand')
    class="active"
@endsection

@section('title')

    Brand Management

@endsection

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class = "col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="title">Edit Brands Details </h4>
                        </div>


                        <div class = "card-body">


                            <form action="{{ route('backEnd.admin.brand.update' ,['brand'=>$brand->id]) }}" method="post" novalidate>

                                {{ csrf_field() }}
                                {{ method_field('PUT') }}

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>

                                    </div>

                                @endif


                                <fieldset>
                                    <legend>Brands Profile</legend>




                                    <div class="form-group{{ $errors->has('brand_name') ? ' has-error' : '' }}">
                                            <label for="brand_name" class="col-md-4 control-label">Brand</label>

                                            <div class="col-md-6">
                                                <input id="brand_name" type="text" class="form-control" name="brand_name" value="{{ $brand->brand_name }}" required autofocus>

                                                @if ($errors->has('brand_name'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('brand_name') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('brand_code') ? ' has-error' : '' }}">
                                        <label for="brand_code" class="col-md-4 control-label">Brand Code</label>

                                        <div class="col-md-6">
                                            <input id="brand_code" type="text" class="form-control" name="brand_code" value="{{ $brand->brand_code }}" required autofocus>

                                            @if ($errors->has('brand_code'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('brand_code') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('brand_description') ? ' has-error' : '' }}">
                                        <label for="brand_description" class="col-md-4 control-label">Brand Description</label>

                                        <div class="col-md-6">
                                            <input id="brand_description" type="text" class="form-control" name="brand_description" value="{{ $brand->brand_description}}" required autofocus>

                                            @if ($errors->has('brand_description'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('brand_description') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('brand_location') ? ' has-error' : '' }}">
                                        <label for="brand_location" class="col-md-4 control-label">Head Office</label>

                                        <div class="col-md-6">
                                            <input id="brand_location" type="text" class="form-control" name="brand_location" value="{{$brand->brand_location }}" required>

                                            @if ($errors->has('brand_location'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('brand_location') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>


                                </fieldset>
                                <div class="row"> <div class="form-group">
                                        <button type="submit" class="btn btn-success">Update</button>
                                    </div></div>




                            </form>







                            {{--{!! Form::model( $brand, ['route'=>['backEnd.admin.brand.update',$brand->id], 'method'=>'POST', 'files'=> true ])!!}--}}
                            {{--{!! csrf_token() !!}--}}
                            {{--@if($errors->any())--}}
                                {{--<div class = "alert alert-danger">--}}
                                    {{--<ul>--}}
                                        {{--@foreach($errors->all() as $error)--}}
                                            {{--<li>{{$error}}</li>--}}
                                        {{--@endforeach--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--@endif--}}

                            {{--<div group ="form-group">--}}
                                {{--{{Form::label('brand_name','Brand Name')}}--}}
                                {{--{{Form::text('brand_name', null, array('class'=>'form-control'))}}--}}
                            {{--</div><br>--}}


                            {{--<div group ="form-group">--}}
                                {{--{{Form::label('brand_location','Brand Office')}}--}}
                                {{--{{Form::text('brand_location', null, array('class'=>'form-control'))}}--}}
                            {{--</div><br>--}}

                            {{--<div group ="form-group">--}}
                                {{--{{Form::label('description','Description')}}--}}
                                {{--{{Form::longtext('description', null, array('class'=>'form-control'))}}--}}
                            {{--</div><br>--}}


                            {{--<br>--}}

                            {{--<div group ="form-group">--}}
                                {{--{{Form::label('brand_image','Brand Image')}}--}}
                                {{--{{Form::file('brand_image', null, array('class'=>'form-control'))}}--}}
                            {{--</div>--}}

                            {{--{{Form::submit('Create',array('class'=>'btn btn-primary'))}}--}}
                            {{--{!! Form::close()!!}--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
