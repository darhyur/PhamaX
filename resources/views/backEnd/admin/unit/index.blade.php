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


                <div class="col-md-4">
                    <a href="{{route('backEnd.admin.unit.create')}}">
                        <div class="card">
                            <div class="card-header card-chart" data-background-color="green">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">content_copy</i> <h4 class="title">New Drug Unit</h4>
                                </div>

                            </div>
                            <div class="card-content">
                                <h4 class="title">
                                    <p class="title">
                                        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span>...Add unit to every product </p></h4>

                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">access_time</i> updated 4 minutes ago
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ route('backEnd.admin.unit.list') }}">
                        <div class="card">
                            <div class="card-header card-chart" data-background-color="green">
                                <div class="card-header" data-background-color="orange">
                                        <i class="material-icons">content_copy</i> <h4 class="title">Units </h4>
                                    </div>

                            </div>
                            <div class="card-content">
                                <h4 class="title">
                                    <p class="title">
                                        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span>...check unit for update </p></h4>

                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">access_time</i> updated 4 minutes ago
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>



                    <div class="col-md-4">
                        {{--<a href="{{ route('backEnd.admin.brand.edit') }}">--}}
                        <div class="card">
                            <div class="card-header card-chart" data-background-color="green">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">content_copy</i> <h4 class="title">Feedback</h4>
                                </div>

                            </div>
                            <div class="card-content">
                                <h4 class="title">
                                    <p class="title">
                                        <span class="text-success"><i class="fa fa-long-arrow-up"></i></span>...customers experience </p></h4>

                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">access_time</i> updated 4 minutes ago
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
{{--brand list--}}
                <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Product unit </h4>
                                    <p class="category">Recently Added unit of drug</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                        <th>ID</th>
                                        <th>Brand</th>
                                        <th>Name</th>
                                        <th>Unit Code</th>
                                        <th>Expiration Date </th>
                                        <th>Action </th>
                                        </thead>

                                        <tbody>
                                        @foreach($units as $unit)
                                        <tr>
                                            <td>{{$unit->id}}</td>
                                            <td>{{$unit->brand->brand_name}}</td>
                                            <td>{{$unit->product->name}}</td>
                                            <td>{{$unit->unit_code}}</td>
                                            <td>{{$unit->expiration_date}}</td>
                                            <td class="td-actions text-right">
                                                {{--<ul class="dropdown-menu">--}}

                                                    {{--<li><a href="{{ route('backEnd.admin.brand.store', [ 'brand' => $brand->id]) }}" class="btn btn-primary btn-xs">View</a></li>--}}
                                                    {{--<li><a href="{{ route('backEnd.admin.brand.edit', ['brand' => $brand->id]) }}" class="btn btn-info btn-xs">Edit</a></li>--}}
                                                    {{--<li><form action="{{route('backEnd.admin.brand.destroy', ['brand' => $brand->id] )}}"--}}
                                                              {{--onsubmit="return confirm('Are you sure?')"--}}
                                                              {{--method="post" style="display: inline-block">--}}
                                                            {{--{{ csrf_field() }}--}}
                                                            {{--{{ method_field('delete') }}--}}
                                                            {{--<button type="submit" class="btn btn-danger">Delete</button>--}}
                                                        {{--</form></li>--}}

                                                {{--</ul>--}}
                                                <button type="button" rel="tooltip" title="Edit Task" href="{{ route('backEnd.admin.unit.show', [ '$drug' => $unit->id]) }}" class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" href="{{ route('backEnd.admin.unit.edit', ['drug' => $unit->id]) }}" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                                {{--<form action="{{route('backEnd.admin.product.destroy', ['product' => $product->id] )}}"--}}
                                                      {{--onsubmit="return confirm('Are you sure?')"--}}
                                                      {{--method="post" style="display:inline">--}}
                                                    {{--{{ csrf_field() }}--}}
                                                    {{--{{ method_field('delete') }}--}}

                                                    {{--<div type="submit" class="btn" data-toggle="tooltip" title="Delete!"> <i class="fa fa-window-close-o" aria-hidden="true" ></i></div>--}}

                                                {{--</form>--}}
                                                <form action="{{route('backEnd.admin.unit.destroy', ['unit' => $unit->id] )}}"
                                                      onsubmit="return confirm('Are you sure?')"
                                                      method="post" style="display: inline-block">
                                                    {{ csrf_field() }}
                                                    {{ method_field('delete') }}
                                                    <button type="submit" rel="tooltip" title="Remove!" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </form>

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
