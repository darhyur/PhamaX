<!Doctype>
<html lang="en">
<head>
    @include('layouts.newhead')
</head>
{{--<body class="bgded overlay" style="background-color:blueviolet;height:120px;">--}}
<body>
<div class="container">
    <header>

        @include('layouts.nav')
    </header>

    <div class="container">
        <div class="row" style="background-color:white;">
            <div class="col-md-3 side_bar" style="color:black;">
                <br>
                <div class="side-content">
                    <div class="gallery">

                        <img src="{{ asset('vendor/images/edu1.png')}}" alt="Phamax MD" style="width:100%;height:200px">

                        <div class="desc">
                            <h6>OBAMA CARE</h6>
                            <h5>MD PHAMAX</h5>
                        </div>
                    </div>
                    <div class="intro">

                        <p>Counterfeit drugs pose a public health hazard, waste consumer income,
                            and reduce the incentive to engage in research and development and innovation.
                            Stronger state licensure supervision of drug suppliers would be helpful. Technological approaches,
                            such as the Radio Frequency Identification devices, should also be considered. Finally,
                            counterfeit drugs may raise concerns among consumers about safety and reduce patient medication adherence.</p>
                        <br>

                        <hr>

                        <h3> NAFDAC's Message Against FAKE DRUG  </h3>


                        <p>The problems of fake drug proliferation in Nigeria have affected the credibility of the Healthcare system and can
                            exert very harmful effects on the consumer resulting to illness; disability and even death and anyone can be a victim.
                            Some of the incidences have resulted in death even among children because most times the consumers do not know the quality of what they
                            are buying or taking. This makes it imperative that there is need to intensify effort in fake drug eradication.
                            National Agency for Food and Drug Administration and Control (NAFDAC) is the government agency in Nigeria that is fully empowered
                            to regulate and control the importation, exportation, manufacture, advertisement, distribution, sale and use of drugs in order
                            to ensure that safe and quality drugs are available to the public. As NAFDAC tasks herself dutifully in fighting fake drugs,
                            more challenges comes up from unscrupulous drug dealer who sometimes have the backings of lawmakers and politicians making
                            the stipulated drug laws and standard unattainable.
                        </p>

                    </div>
                </div>

            </div>

            <div class="col-md-9 main-message" style="background-color:white">
                @yield('content')

            </div>
        </div>




        <footer>
            @include('layouts.footer')
        </footer>

        @include('layouts.bottom')
    </div>
</div>


</body>

</html>
