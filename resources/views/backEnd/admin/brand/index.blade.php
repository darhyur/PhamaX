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


                <div class="col-md-4">
                    <a href="{{route('backEnd.admin.brand.create')}}">
                        <div class="card">
                            <div class="card-header card-chart" data-background-color="green">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">content_copy</i> <h4 class="title">New Brand</h4>
                                </div>

                            </div>
                            <div class="card-content">
                                <h4 class="title">
                                    <p class="title" style="color:green">
                                        <span class="text-success"> <i class="material-icons">playlist_add</i></span>...Our system can accommodate more brand</p></h4>

                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="fa fa-hospital-o"></i> Pharmaceutical company only
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ route('backEnd.admin.brand.list') }}">
                        <div class="card">
                            <div class="card-header card-chart" data-background-color="green">
                                <div class="card-header" data-background-color="orange">
                                        <i class="material-icons">assignment</i> <h4 class="title">Manage brand list </h4>
                                    </div>

                            </div>
                            <div class="card-content">
                                <h4 class="title">
                                    <p class="title" style="color:green">
                                        <span class="text-success"><i class="fa fa-puzzle-piece" aria-hidden="true"></i></span>...Take necessary action against all brand</p></h4>

                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="fa fa-tint"></i> company on our platform
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>



                    {{--<div class="col-md-4">--}}
                        {{--<a href="{{ route('backEnd.admin.brand.edit') }}">--}}
                        {{--<div class="card">--}}
                            {{--<div class="card-header card-chart" data-background-color="green">--}}
                                {{--<div class="card-header" data-background-color="orange">--}}
                                    {{--<i class="material-icons">content_copy</i> <h4 class="title">Edit Brand</h4>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                            {{--<div class="card-content">--}}
                                {{--<h4 class="title">--}}
                                    {{--<p class="title">--}}
                                        {{--<span class="text-success"><i class="fa fa-long-arrow-up"></i></span>...Edit and update existing Brand</p></h4>--}}

                            {{--</div>--}}
                            {{--<div class="card-footer">--}}
                                {{--<div class="stats">--}}
                                    {{--<i class="material-icons">access_time</i> updated 4 minutes ago--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
{{--brand list--}}
                <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Available brand</h4>
                                    <p class="category">Brands</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                        <th>ID</th>
                                        <th>Brand Name</th>
                                        <th>Brand Address</th>
                                        <th>Brand Description</th>
                                        <th>No of Products</th>
                                        <td>Created At </td>
                                        <td>Updated At </td>
                                        </thead>
                                        <tbody>
                                        @foreach($brands as $brand)
                                            <tr>
                                                <td>{{ $brand->id }}</td>
                                                <td>{{ $brand->brand_name }}</td>
                                                <td>{{ $brand->brand_location }}</td>
                                                <td>{{ $brand->brand_description }}</td>
                                                <td></td>
                                                <td>{{ $brand->created_at }}</td>
                                                <td>{{ $brand->updated_at }}</td>

                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>








                </div>
        </div>
    </div>




@endsection
