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
                <div class = "col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Product</h4>
                        </div>


                        <div class = "card-body">
                            {!! Form::model( $brand, ['route'=>['backEnd.admin.unit.update',$brand->id], 'method'=>'POST', 'files'=> true ])!!}
                            {!! csrf_token() !!}
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
                                {{Form::label('brand_location','Brand Office')}}
                                {{Form::text('brand_location', null, array('class'=>'form-control'))}}
                            </div><br>

                            <div group ="form-group">
                                {{Form::label('description','Description')}}
                                {{Form::longtext('description', null, array('class'=>'form-control'))}}
                            </div><br>


                            <br>

                            <div group ="form-group">
                                {{Form::label('brand_image','Brand Image')}}
                                {{Form::file('brand_image', null, array('class'=>'form-control'))}}
                            </div>

                            {{Form::submit('Create',array('class'=>'btn btn-primary'))}}
                            {!! Form::close()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
