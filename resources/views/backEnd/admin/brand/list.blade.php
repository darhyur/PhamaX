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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h4 class="title">Brands list </h4>
                            <p class="category">New employees on 15th September, 2016</p>
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
                                <th>Action</th>


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
                                        <td>



                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="material-icons">report</i>
                                                    <span class="notification"></span>
                                                    <p class="hidden-lg hidden-md">Modify</p>
                                                </a>
                                                <ul class="dropdown-menu">

                                                    <a href="{{ route('backEnd.admin.brand.show', [ 'brand' => $brand->id]) }}" class="btn btn-primary btn-xs"> <i class="material-icons">slideshow</i></a>
                                                    <a href="{{ route('backEnd.admin.brand.edit', ['brand' => $brand->id]) }}" class="btn btn-info btn-xs"> <i class="material-icons">mode_edit</i></a>
                                                    <form action="{{route('backEnd.admin.brand.destroy', ['brand' => $brand->id] )}}"
                                                              onsubmit="return confirm('Are you sure?')"
                                                              method="post" style="display:inline">
                                                            {{ csrf_field() }}
                                                            {{ method_field('delete') }}

                                                        <button type="submit" rel="tooltip" title="Remove!" class="btn btn-danger btn-simple btn-xs">
                                                            <i class="material-icons">close</i>
                                                        </button>

                                                           {{--<div type="submit" class="btn" data-toggle="tooltip" title="Delete!"> <i class="fa fa-window-close-o" aria-hidden="true" ></i></div>--}}

                                                        </form>

                                                </ul>
                                            </div>
                                        </td>
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
