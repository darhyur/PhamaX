@extends('layouts.pages')
@section('front_end_index')
    class="active"
@endsection
@section('title')

    PHAMAX


    @endsection

@section('contentSide')

    <div class="container">
        <br>
        <div class="gallery">

            <img src="{{ asset('vendor/images/md.png')}}" alt="Phamax MD" style="width:100%;height:200px">

            <div class="desc">
                <h6>OBAMA CARE</h6>
                <h5>MD PHAMAX</h5>
            </div>
        </div>
        <div>

            <p class="md-message">Counterfeit drugs pose a public health hazard, waste consumer income,
                and reduce the incentive to engage in research and development and innovation.
                Stronger state license supervision of drug suppliers would be helpful. Technological approaches,
                such as the Radio Frequency Identification devices, should also be considered. Finally,
                counterfeit drugs may raise concerns among consumers about safety and reduce patient medication adherence.</p>

        </div>
    </div>






    @endsection

@section('content')



    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <div class="welcome">

    <p> PHAMAX</p>

        </div>
        <div class="welcome-sub">
            <p>HOME OF QUALITY AND AFFORDABLE DRUGS</p>


        </div>
        <div class="row">
            <div class="col-md-5 col-md-offset-4">
                <div class="bottom-message">

                    <p>Tha adverse effect of fake and expired drugs can't be quantify
                        kindly confirm the authenticity of our products on our
                        <a href="{{route('frontEnd.unit')}}"><span style="font-weight:bold">Drug Authentication System</span></a>.before usage </p>
                </div>
            </div>
        </div>

    </div>



    @endsection
