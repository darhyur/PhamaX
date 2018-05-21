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
                <div class = "col-md-8 col-md-offset-2">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Product</h4>
                        </div>


                        <div class = "card-body">


                            <dl>
                                <dt>Brand Image</dt>
                                <dd></dd>
                            </dl>
                            <dl>
                                <dt>Brand Name </dt>
                                <dd></dd>
                            </dl>
                               <dl>
                                <dt>Brand Location</dt>
                                <dd></dd>
                            </dl>
                              <dl>
                                <dt>Brand Description</dt>
                                <dd></dd>
                            </dl>


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
