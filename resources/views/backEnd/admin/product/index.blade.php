@extends('layouts.Adminnn')
@section('back_end_product')
    class="active"
@endsection

@section('title')

  Product Management

@endsection

@section('content')



    <div class="content">
        <div class="container-fluid" >
            <div class="row">

     <div class="content">
        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-4">
                    <a href="{{route('backEnd.admin.product.create')}}">
                        <div class="card">
                            <div class="card-header card-chart" data-background-color="blue">
                                <div class="card-header" data-background-color="lemon">
                                    <i class="fa fa-plus"></i><h4 class="title">New Product</h4>
                                </div>

                            </div>
                            <div class="card-content">
                                <h4 class="title">
                                    <p class="title">
                                        <span class="text-success"> <i class="fa fa-sitemap"></i></span>...Add new product to the approrate brand</p></h4>

                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">access_time</i> last updated
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ route('backEnd.admin.product.list') }}">
                        <div class="card">
                            <div class="card-header card-chart" data-background-color="cyan">
                                <div class="card-header" data-background-color="orange">
                                    <i class="fa fa-th-list"></i> <h4 class="title">Existing Product</h4>
                                    </div>

                            </div>
                            <div class="card-content">
                                <h4 class="title">
                                    <p class="title">
                                        <span class="text-success"><i class="fa fa-th-list"></i> </span>...Take necessary action against all brand</p></h4>

                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="fa fa-th-list"></i> Product and associated brands
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>

                <div class="col-md-4">
                    <a href="{{ route('backEnd.admin.product.list') }}">
                        <div class="card">
                            <div class="card-header card-chart" data-background-color="cyan">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">feedback</i> <h4 class="title">Customers Feedback </h4>
                                </div>

                            </div>
                            <div class="card-content">
                                <h4 class="title">
                                    <p class="title">
                                        <span class="text-success"><i class="fa fa-th-list"></i> </span>...see feedback from our patronizer </p></h4>

                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">access_time</i> updated 4 minutes ago
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>


                comments on product

         <div class="content">
             <div class="container-fluid" >
                 <div class="row">
                     <div class="card" style="height:500px;">
                         <div class="card-header" data-background-color="green">
                             <h4 class="title">Brand's Products</h4>
                             <p class="category">Product on our platform </p>
                         </div>
                         <div class="card-content table-responsive">
                             <div class="col-lg-12 col-md-12">
                                 @foreach($brands as $brand)
                                 <div class="side-tab" style="background-color:whitesmoke;height:300px;" >

                                     <div class="col-md-4 tab-responsive " style="background-color:greenyellow;height:300px;">


                                         <ul class="nav">
                                             {{--<ul class="navbar navbar-default tab-responsive" data-tabs="tabs">--}}
                                             <li class="active">
                                             <a href="'#comment1" data-toggle="tab">Bugs
                                             </a>
                                             </li>
                                             <li class="">
                                             <a href="'#'.{{($brand->id) }}" data-toggle="tab">{{($brand->name)}}
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
                                     <div class="col-md-8  table-responsive " style="height: 300px;">

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
                                                 <div class="tab-pane" id="{{($brand->id )}}">

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
                                     @endforeach
                             </div>
                         </div>

                     </div>


                     </div>
                     </div>
                 </div>
             </div>
         </div>
       </div>
    </div>
            <br>
            <br>


    <div class="content">
        <div class="container-fluid" >
            <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header" data-background-color="orange">
                                <h4 class="title">Employees Stats</h4>
                                <p class="category">New employees on 15th September, 2016</p>
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
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{$product->id}}</td>
                                            {{--<td>{{$product->brand->brand_name}}</td>--}}
                                            {{--<td>{{$product->brand->brand_location}}</td>--}}
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>




                comments on product
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        @foreach($brands as $brand)

                        <div class="card card-nav-tabs">
                            <div class="card-header" data-background-color="purple">
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <div class="comments">Product according to brand</div>
                                        <span class="nav-tabs-title">Comments:</span>
                                        <ul class="nav nav-tabs" data-tabs="tabs">
                                            @foreach($brands as $brand)
                                            <li>
                                                <a href="#{{ $brand->name }}" data-toggle="tab">
                                                    <i class="material-icons">bug_report</i>
                                                    {{$brand->name}}
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="#{{ $brand->name }}">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>descriptions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="optionsCheckboxes" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>{{$brand->product_name }}</td>
                                                <td>{{$brand->product_description }}</td>
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
                        @endforeach
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>





    <script>
        $('.fixes a').click(function( evt) {
            console.log('evt=', evt);
        })
    </script>


@endsection
