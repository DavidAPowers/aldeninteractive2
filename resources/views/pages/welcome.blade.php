@extends('layouts.default')

@section('article')  
<!-- Hero -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="/img/piano-strings.jpg" alt="Design & Digital Marketing" width="1500" height="800">
  <div class="w3-display-topmiddle w3-margin-top w3-center">
    <h1 class="herotag w3-text-white w3-hide-small w3-padding w3-black w3-opacity-min">
  Partners in the pursuit of perfection
    </h1>
  </div>
</header>
<br>
<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">
  
  <div class="w3-row-padding">
    <section class="w3-col l3 m6 w3-margin-bottom home-services">
    <h2>Design</h2>
      <ul class="w3-margin-left w3-margin-right w3-padding-16">
        <li>Custom websites</li>
        <li>WordPress themes</li>
        <li>Video &amp; photography</li>
        <li>Logos</li>
      </ul> 

    </section>
    <section class="w3-col l3 m6 w3-margin-bottom home-services">
      <h2>ECommerce</h2>
      <ul class="w3-margin-left w3-margin-right w3-padding-16">
        <li>Shopify &amp; WooCommerce themes</li>
        <li>Conversion optimization</li>
        <li>Data driven marketing strategies</li>
        <li>ECommerce website design</li>
      </ul>
    </section>
    <section class="w3-col l3 m6 w3-margin-bottom home-services">
      <h2>Marketing</h2>
      <ul class="w3-margin-left w3-margin-right w3-padding-16">
        <li>Content strategy</li>
        <li>SEO &amp; PPC</li>
        <li>Social Media</li>
        <li>Email Campaigns</li>
      </ul>

    </section>
    <section class="w3-col l3 m6 w3-margin-bottom home-services">
      <h2>Web Development</h2>
      <ul class="w3-margin-left w3-margin-right w3-padding-16">
        <li>Custom CMS solutions</li>
        <li>API integrations</li>
        <li>Web apps</li>
        <li>WordPress sites and plugins</li>
      </ul>

    </section>
  </div>
  <br>
  <br>
  <div class="w3-row-padding">
    <div class="w3-col m6 l6">
      <div class="w3-card-4 home-contact-info">

  <header class="w3-container w3-black">
    <h3>CONTACT</h3>
  </header>

  <div class="w3-container w3-padding-large">
    <p>
      Disappointed with the perfomance of your website? Looking to 
      increase online traffic and sales? <strong>WE CAN HELP!</strong>
    </p>
    <p>
      Connect with us today to schedule a free website
      review and in-depth digital strategy consultation.
    </p>
    <p>
      P: <b>773.641.1561</b><br>
      E: <b>cyborgk [at] gmail.com</b>
    </p>
        </div>
      </div>
    <br>
    <br>
    </div>

    <div class="w3-col m6 l6">
      @include('forms.contact')

    </div>
  </div>
</div>
@endsection

