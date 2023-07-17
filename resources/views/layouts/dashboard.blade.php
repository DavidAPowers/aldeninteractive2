<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hypersonata: Web Design &amp; Digital Marketing</title>

@include('partials.global-head')

  </head>
  <body>


@include('partials.topnav')

<div class="main-content-container">
	<div class="w3-content w3-padding-large">
@yield('content')
	</div>

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
