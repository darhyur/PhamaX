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
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('backEnd.admin.unit.store') }}">


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
                                {{Form::label('unit_code','Drug Code')}}
                                {{Form::text('unit_code', null, array('class'=>'form-control'))}}
                            </div>

                            <div group ="form-group">
                                {{Form::label('product_id','Product Id')}}
                                {{Form::text('product_id', null, array('class'=>'form-control'))}}
                            </div><br>


                            <div group ="form-group">
                                {{Form::label('brand_id','Brand Id')}}
                                {{Form::text('brand_id', null, array('class'=>'form-control'))}}
                            </div><br>

                            <div group ="form-group">
                                {{Form::label('expiration_date','Expiring Date')}}
                                {{ Form::date('expiration_date', '',['id' => 'expiration_date','class'=>'form-control'])}}


                            </div><br>
                            <div group ="form-group">
                                {{Form::label('created_at','production Date')}}
                                {{Form::date('created_at', '', ['class'=>'form-control','id' => 'date'])}}
                            </div><br>



                            <br>



                            {{Form::submit('Create',array('class'=>'btn btn-primary'))}}
                            {!! Form::close()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @endsection
