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
                <div class = "col-md-8 col-md-8-offset-2">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="title">New Brand </h4>
                        </div>


                        <div class = "card-body">
                            <div class="container-fluid">
                                <br>
                            {!! Form::open(['route'=>'backEnd.admin.brand.store', 'method'=>'POST', 'files'=> true ]) !!}
                            @if($errors->any())
                                <div class = "alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div group ="form-group">
                                {{Form::label('brand_name','Brand Name')}}
                                {{Form::text('brand_name', null, array('class'=>'form-control'))}}
                            </div><br>

                            <div group ="form-group">
                                {{Form::label('brand_code','Brand Code')}}
                                {{Form::text('brand_code', null, array('class'=>'form-control'))}}
                            </div><br>


                            <div group ="form-group">
                                {{Form::label('brand_location','Brand Office')}}
                                {{Form::text('brand_location', null, array('class'=>'form-control'))}}
                            </div><br>



                            <div group ="form-group">
                                {{Form::label('brand_description','Description')}}
                                {{Form::text('brand_description', null, array('class'=>'form-control'))}}
                            </div><br>

                            {{--<div group ="form-group">--}}
                                {{--{{Form::label('brand_slug','Brand Slug')}}--}}
                                {{--{{Form::text('brand_slug', null, array('class'=>'form-control'))}}--}}
                            {{--</div>--}}


                            <br>



                            {{Form::submit('Create',array('class'=>'btn btn-primary form-control'))}}
                            {!! Form::close()!!}
                                <br>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @endsection
