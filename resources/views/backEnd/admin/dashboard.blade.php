@extends('layouts.Adminnn')


@section('title')

    Admin

@endsection

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-3">
                    <a href="{{ route('backEnd.admin.brand.index') }}">

                    <div class="card card-stats">
                        <div class="card-header" data-background-color="green">
                            <i class="material-icons">store</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Brands Management</p>
                            <h3 class="title">{{$brandNo}}
                                <h3>Brands</h3>
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-danger">remove_red_eye</i>...Keep Watch on the brand
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3">
                    <a href="{{ route('backEnd.admin.product.index') }}">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="yellow">
                            <i class="material-icons">class</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Products</p>
                            <h3 class="title">{{$productNo}}</h3>
                            <br>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">grain</i> Store product under the right brand
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <a href="{{ route('backEnd.admin.unit.index') }}">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="red">
                            <i class="material-icons">picture_in_picture</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Units</p>
                            <h3 class="title">{{ $unitNo }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">local_offer</i> Tracked from Github
                            </div>
                        </div>
                    </div>
                </div>
                </a>
                <a href="{{ route('backEnd.admin.unit.index') }}">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="blue">
                            <i class="material-icons">feedback</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Feedback</p>
                            <h3 class="title">+245</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">message</i> Respond to comment
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>


            {{--comments on product --}}
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="card card-nav-tabs">
                        <div class="card-header" data-background-color="purple">
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                  <div class="comments">Feedback according to brands</div>
                                    <span class="nav-tabs-title">Comments:</span>
                                    <ul class="nav nav-tabs" data-tabs="tabs">
                                        <li class="active">
                                            <a href="#comment1" data-toggle="tab">
                                                <i class="material-icons">bug_report</i> Bugs
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#comment2" data-toggle="tab">
                                                <i class="material-icons">code</i> Website
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#comment3" data-toggle="tab">
                                                <i class="material-icons">cloud</i> Server
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="#comment4" data-toggle="tab">
                                                <i class="material-icons">bug_report</i> Bugs
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#comment5" data-toggle="tab">
                                                <i class="material-icons">code</i> Website
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#comment6" data-toggle="tab">
                                                <i class="material-icons">cloud</i> Server
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="tab-content">
                                <div class="tab-pane active" id="comment1">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                            </td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="comment2">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                            </td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane active" id="profile">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                            </td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="messages">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                            </td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="settings">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                            </td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h4 class="title">BRANDS </h4>
                            {{--<p class="category">New employees on 15th September, 2016</p>--}}
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                <tr> <th>ID</th>
                                    <th>Brand</th>
                                    <th>Head Office</th>
                                </tr>


                                </thead>
                                <tbody>
                                @foreach($brands as $brand)
                                <tr>
                                    <td>{{$brand->id}}</td>
                                    <td>{{$brand->brand_name}}</td>
                                    <td>{{$brand->brand_location}}</td>
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