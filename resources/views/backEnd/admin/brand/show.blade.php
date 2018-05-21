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
                <div class = "col-md-10 col-md-offset-1">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="title">
                                {{ $brand->brand_name }}
                            </h4>
                        </div>




                        <div class = "card-body">
                            <div class="container-fluid">
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <dl>

                                            <dd><img src="{{ asset('images/'.$brand->image)}}"></dd>
                                            <dt>Company's Image</dt>
                                        </dl>
                                    </div>
                                    <div class="col-md-8">


                                        <dl>
                                            <dt>Brand Name</dt>
                                            <dd>{{$brand->brand_name}}</dd>
                                        </dl>
                                        <dl>
                                            <dt>Head Office</dt>
                                            <dd>{{ $brand->brand_location }}</dd>
                                        </dl>
                                        <dl>
                                            <dt>Brand Description</dt>
                                            <dd>{{ $brand->brand_description }}</dd>
                                        </dl>

                                    </div>

                                </div>
                                <br>

                            </div>










                    </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
        @endsection
