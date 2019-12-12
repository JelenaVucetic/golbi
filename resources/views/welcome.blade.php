@extends('layouts.master')


@section('content')

<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 mySlider">
                <div id="my-slider" class="carousel slide" data-ride="carousel" >
                    {{-- wrapper for sliders --}}
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="/images/Golbi-print-slider.jpg" alt="golbi.jpg" id="headerImg" >
                            <div class="carousel-caption">
                                <h1>Uvjerite se u naš kvalitet!</h1>
                                <p>i dugogodišnje iskustvo</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/images/Golbi-print-slider.jpg" alt="golbi.jpg" id="headerImg">
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
                                    <img src="/images/Ikonica - strelica lijevo.svg" alt="">
                                </a>
                            </div>
                            <div class="box">
                                <a href="#my-slider" class="right carousel-control" role='button' data-slide="next">
                                    <img src="/images/Ikonica - strelica desno.svg" alt="">
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
                <a href="/o-nama"> <img src="/images/Procitaj vise.svg" alt=""> </a>
                 <p>Pročitaj još</p>
            </div>
       </div>
</div>

<div class="container-fluid serviceSection">
        <div class="serviceContent">
            <h1>Naše usluge</h1>

            <div class="serviceBoxes">
                <a href="/usluge">
                    <div class="singleBox">
                        <img src="/images/Usluge 1 - Dizajn.jpg" alt="">
                        <p>Dizajn i priprema za štampu</p>
                    </div>
                </a>
                <a href="/usluge">
                    <div class="singleBox">
                        <img src="/images/digitalnastampa.png" alt="">
                        <p>Digitalna štampa</p>
                    </div>
                </a>
                <a href="/usluge">
                    <div class="singleBox">
                        <img src="/images/offsetstampa.png" alt="">
                        <p>Offset štampa</p>
                    </div>
                </a>
            </div>
        </div>
 </div>

 <div class="contaner-fluid sendingSection" id="order">
     <div class="sendingContent">
         <h1>Pošalji upit za štampu</h1>

         <div class="icons">
             <div  data-toggle="modal" data-target="#myModal" data-whatever="Vizit kartice"> 
                 <img src="/images/vizitkartica.svg" alt=""> 
                 <p>Vizit kartice</p>
            </div>
             <div data-toggle="modal" data-target="#myModal" data-whatever="Flajeri">
                <img src="/images/Ikonice Flajer.svg" alt=""> 
                <p>Flajeri</p>
             </div>
             <div data-toggle="modal" data-target="#myModal" data-whatever="Posteri">
                <img src="/images/Ikonice Poster.svg" alt=""> 
                <p>Posteri</p>
             </div>
             <div data-toggle="modal" data-target="#myModal" data-whatever="Wobleri">
                <img src="/images/Ikonice Wobleri.svg" alt=""> 
                <p>Wobleri</p>
             </div>
             <div data-toggle="modal" data-target="#myModal" data-whatever="Stikeri">
                <img src="/images/Ikonice Stikeri.svg" alt=""> 
                <p>Stikeri</p>
             </div>
             <div data-toggle="modal" data-target="#myModal" data-whatever="Razgledince">
                <img src="/images/vizitkartica.svg" alt=""> 
                <p>Razgledince</p>
             </div>
             <div data-toggle="modal" data-target="#myModal" data-whatever="Pozivnice">
                <img src="/images/Ikonice Pozivnice.svg" alt=""> 
                <p>Pozivnice</p>
             </div>
             <div data-toggle="modal" data-target="#myModal" data-whatever="Katalozi">
                <img src="/images/Ikonice Katalozi.svg" alt=""> 
                <p>Katalozi</p>
             </div>
             <div class="hiddenContent collapse" >
                <img src="/images/vizitkartica.svg" alt=""> 
                <p>Razgledince</p>
            </div>
            <div class="hiddenContent collapse">
                <img src="/images/vizitkartica.svg" alt=""> 
                <p>Pozivnice</p>
             </div>
            <div class="hiddenContent collapse">
                <img src="/images/vizitkartica.svg" alt=""> 
                <p>Katalozi</p>
            </div>
            <div class="hiddenContent collapse">
                    <img src="/images/vizitkartica.svg" alt=""> 
                    <p>Pozivnice</p>
                 </div>
            <div class="hiddenContent collapse">
                <img src="/images/vizitkartica.svg" alt=""> 
                <p>Katalozi</p>
            </div>
            <div class="hiddenContent collapse">
                <img src="/images/vizitkartica.svg" alt=""> 
                <p>Pozivnice</p>
                </div>
            <div class="hiddenContent collapse">
                <img src="/images/vizitkartica.svg" alt=""> 
                <p>Katalozi</p>
            </div>
            <div class="hiddenContent collapse">
                <img src="/images/vizitkartica.svg" alt=""> 
                <p>Pozivnice</p>
            </div>
         </div>
         <div id="seeMore" class="seeMore" data-toggle="collapse" data-target=".hiddenContent">
             <p id="text">Pogledaj još</p>
             <img src="/images/Mask Group 10.svg" alt="">
         </div>
     </div>
 </div>

 
@endsection