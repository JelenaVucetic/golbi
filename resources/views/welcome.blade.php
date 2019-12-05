@extends('layouts.master')

@section('content')

<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 mySlider">
                <div id="my-slider" class="carousel slide" data-ride="carousel" >
                    {{-- wrapper for sliders --}}
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="/images/Golbi-print-slider.jpg" alt="golbi.jpg">
                            <div class="carousel-caption">
                                <h1>Uvjerite se u naš kvalitet!</h1>
                                <p>i dugogodišnje iskustvo</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="/images/Golbi-print-slider.jpg" alt="golbi.jpg">
                            <div class="carousel-caption">
                                <h1>this is caption 2</h1>
                            </div>
                        </div>
                    </div>
                    <div class="headerBottom">
                        <div class="golbiPrint">
                            <p>U pogonu od 1993.-Golbi Print</p>
                        </div>
                    {{-- next and prev buttons --}}
                    <div class="arrows">
                            <div class="box">
                                <a href="#my-slider" class="left carousel-control" role='button' data-slide="prev">
                                    <img src="/images/Ikonica - strelica lijevo g.svg" alt="">
                                </a>
                            </div>
                            <div class="box">
                                <a href="#my-slider" class="right carousel-control" role='button' data-slide="next">
                                    <img src="/images/Ikonica - strelica.svg" alt="">
                                </a>
                            </div>
                        </div>  
                    </div>                
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container-fluid aboutSection">
       <div class="content">
            <h1>O nama</h1>
            <p>Štamparija Golbi Print se bavi kvalitetnom izradom štampanih materijala. Zahvaljujući profesionalnom timu ljudi, visokoj tehničkoj opremljenosti, godinama iskustva i odličnoj saradnji sa podizvođačima, u mogućnosti smo da od dobijenog elektronskog zapisa finaliziramo sve vrste papirne galanterije. Na našem sajtu se možete informisati o uslugama koje Vam pružamo.</p>
            <div class="readMore">
                <img src="/images/Procitaj vise.svg" alt="">
                <p>Pročitaj još</p>
            </div>
       </div>
</div>

<div class="container-fluid serviceSection">
        <div class="content">
            fsafa
        </div>
 </div>
@endsection