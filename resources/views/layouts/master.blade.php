<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Golbi</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Merriweather" />

        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/welcome.css">
        <link rel="stylesheet" href="/css/about.css">
        <link rel="stylesheet" href="/css/nav.css">
        <link rel="stylesheet" href="/css/footer.css">

        <link rel="stylesheet" href="/css/modal1.css">
        {{-- jquery --}}
        <script src="/js/jQuery.js"></script>

        {{-- boostrap --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    </head>
    <body>
          
        @include('layouts.modals.modal1')
        <div class="supreme-container">
        @include('layouts.nav') 
       
                @yield('content')
                
        
        @include('layouts.footer')
        @include('sweetalert::alert')
    </div>
    </body>

    <script>
  $('.carousel').carousel({
    interval: false
}); 
    </script>

    <script>  
    document.getElementById("seeMore").addEventListener("click", function(){
        var x = document.getElementById("text");
            if (x.innerHTML === "Pogledaj još") {
                x.innerHTML = "Vidi manje";
            } else {
                x.innerHTML = "Pogledaj još";
            }
        });
    </script>

<script>
        $('#myModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.title input').val(recipient)
        })
            </script>
</html>
