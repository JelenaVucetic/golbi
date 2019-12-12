@extends('layouts.master')

@section('content')
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