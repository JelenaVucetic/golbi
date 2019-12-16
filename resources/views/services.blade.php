@extends('layouts.master')

@section('content')
<div class="container-fluid services">
    <div class="servicesContent">
            <h1>DIZAJN, DIGITALA I OFFSET</h1>
    </div>
    <div>
        <p>U pogonu od 1998.-Golbi Print</p>
    </div>
</div>

<div class="container-fluid diseignSection">
        <div class="designContent" id="design">
               <img src="/images/Usluge 1 - Dizajn.jpg" alt="">
               <div class="designDescription">
                   <h3>Dizajn</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
               </div>
        </div>
    </div>
<div class="container-fluid diseignSection" style="background:white;" id="digital">
    <div class="designContent" id="flexReverse">
            <div class="designDescription">
                <h3>Digitalna štampa</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
         <img src="/images/digitalnastampa.png" alt="">
    </div>
</div>
<div class="container-fluid diseignSection" id="offset">
    <div class="designContent">
            <img src="/images/offsetstampa.png" alt="">
            <div class="designDescription">
                <h3>Offset štampa</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
    </div>
</div>
@endsection