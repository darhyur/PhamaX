@extends('layouts.pages')

@section('title')

    PHAMAX


@endsection


@section('content')



    <div class="container">
                <br>



        {{--<div class="container">--}}
            <div class="row">
                <div class="col-md-12">
                    @if (session('status'))
                        <div class="alert alert-danger">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="media">
                        <div class="col-md-10">
                              <div class="media-body">
                                <h4 class="media-heading"> why care if the drug is counterfeit or otherwise</h4>
                              
                                <p> Counterfeit medication is a problem face worldwide. Counterfeit medications are a waste of income of patients,
                                and they often endanger the public's health and safety.
                                One case that illustrates this problem is that of a patient who was treated with injections for anemia, after a liver transplant. After 8 weeks of injections, the patient was still not responding to treatment. The treating physicians discovered that the medicine the patient used was counterfeit.
                                In such cases, the consequences of counterfeits can be very serious. </p>
                              </div>
                            </div>
                        </div>
                        </div>
                    </div>

        <div class="container align-content-center">
            <div class="row">
                <div class="col-md-10">
                    <div class="unit-auth">
                        <div class="row">
                            <div class="col-lg-5 col-lg-offset-4">
                        <h3 style="align-content:center"> kindly AUTHENTICATE here </h3>
                            </div>
                        </div>
                        <br>

                        {{--<div class="container">--}}
                            {{--<div class="row">--}}
                                {{--<h2>Slider Search box</h2>--}}
                                {{--<div class="search">--}}
                                    {{--<input type="text" class="form-control input-sm" maxlength="64" placeholder="Search" />--}}
                                    {{--<button type="submit" class="btn btn-primary btn-sm">Search</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="col-lg-6 col-lg-offset-3" style="align-content:center">

                            <form action="{{ route('frontEnd.search') }}" method="post" role="search">

                                {{ csrf_field() }}

                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Authenticate before usage please" name="unit">
                                <span class="input-group-btn">
                                  <button class="btn btn-default" style="color:#ffffff;background-color:cornflowerblue" type="submit">Authenticate</button>
                            </span>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>



@endsection
