<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hypersonata: Web Design &amp; Digital Marketing</title>

    @include('partials.global-head')


    </head>
    <body>


@include('partials.topnav')
    

<div class="main-content-container">
        
@yield('article')

@include('partials.footer') 
</div>




<script>
/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
function toggleSmallNav() {
  var x = document.getElementById("smallLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
    </body>
</html>
