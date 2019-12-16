@extends('layouts.master')


@section('content')

<header>
    <div class="container-fluid headerSection">
            <div id="myCaption">
                <h1>Uvjerite se u naš kvalitet!</h1>
                <p>i dugogodišnje iskustvo</p>
            </div>   
            <p class="since">U pogonu od 1998. - Golbi Print</p>
    </div>
</header>

<div class="container-fluid aboutSection">
       <div class="content">
            <h1>O nama</h1>
            <p>Štamparija Golbi Print se bavi kvalitetnom izradom štampanih materijala. Zahvaljujući profesionalnom timu ljudi, visokoj tehničkoj opremljenosti, godinama iskustva i odličnoj saradnji sa podizvođačima, u mogućnosti smo da od dobijenog elektronskog zapisa finaliziramo sve vrste papirne galanterije. Na našem sajtu se možete informisati o uslugama koje Vam pružamo.</p>
            <div class="readMore">
                <a href="/o-nama"> <img src="/images/Procitaj vise.svg" alt="">
                 Pročitaj još
                </a>
            </div>
       </div>
</div>

<div class="container-fluid serviceSection">
        <div class="serviceContent">
            <h1>Naše usluge</h1>

            <div class="serviceBoxes">
                <a href="/usluge#design">
                    <div class="singleBox">
                        <img src="/images/Usluge 1 - Dizajn.jpg" alt="">
                        <p>Dizajn i priprema za štampu</p>
                    </div>
                </a>
                <a href="/usluge#digital">
                    <div class="singleBox">
                        <img src="/images/digitalnastampa.png" alt="">
                        <p>Digitalna štampa</p>
                    </div>
                </a>
                <a href="/usluge#offset">
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
                <p>Razglednice</p>
             </div>
             <div data-toggle="modal" data-target="#myModal" data-whatever="Pozivnice">
                <img src="/images/Ikonice Pozivnice.svg" alt=""> 
                <p>Pozivnice</p>
             </div>
             <div data-toggle="modal" data-target="#myModal" data-whatever="Katalozi">
                <img src="/images/Ikonice Katalozi.svg" alt=""> 
                <p>Katalozi</p>
             </div>
         </div>
         <div class="icons hiddenContent collapse">
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
                <div class=" collapse" >
                   <img src="/images/vizitkartica.svg" alt=""> 
                   <p>Razgledince</p>
               </div>
               <div class=" collapse">
                   <img src="/images/vizitkartica.svg" alt=""> 
                   <p>Pozivnice</p>
                </div>
            </div>
         <div id="seeMore" class="seeMore" data-toggle="collapse" data-target=".hiddenContent" >
             <p id="text">Pogledaj još</p>
             <img id="toggleImage" src="/images/dolje.svg" alt="" width="70px"; height="70px;">
         </div>
     </div>
 </div>
 <div class="container-fluid contactSection" id="contact">
    <div class="contactContent">
        <h1>Kontakt e-mail</h1>

        <div class="container" >
               @if(count($errors) > 0)
                   <div class="alert alert-danger">
                       <button type="button" class="close" data-dismiss='alert'>x</button>
                       <ul>
                           @foreach ($errors->all() as $error)
                               <li>{{ $error }}</li>
                           @endforeach
                       </ul>
                   </div>
               @endif
       
        
               @if(session('succes_message')))
               <div class="alert alert-success alert-block">
                   {{ session('succes_message') }}
               </div> 
               @endif 
           </div>

        <form method="post" action="/send-email#contact" class="myForm" enctype="multipart/form-data">
            @csrf
            <div class="personalInfo">
               <input type="text" placeholder="Vaše ime" name="name" required>
               <input type="text" placeholder="Vaš e-mail" name="email" required>
            </div>
            <input class="input" type="text" placeholder="Naslov" name="title" required>
            <textarea placeholder="Vaša poruka" name="message" required></textarea>
            <button type="submit" id="btn">Pošaljite e-mail</button>
        </form>
    </div>
</div>
 
@endsection