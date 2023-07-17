<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hypersonata: Web Design &amp; Digital Marketing</title>

        <!-- Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
body {
    font-family: 'Lato';
}
div.main-content-container {
  position: relative;
  top: 68px;
}
h1.herotag {
  font-weight: 600;
  font-style: italic;
  font-size: 30px;
  letter-spacing: 0.5px;
  margin-top: 24px;
}
a.logo {
	font-weight: 900;
	font-size: 24px;
}
a.hamburger {
	position: relative;
	top: 8px;
}
span.logotag {
	padding-left: 32px;
	font-weight: 400;
	font-size: 16px;
}
h2, form.home-contact legend {
    font-weight: 800;
    letter-spacing: -1.5px;
    font-size: 30px;
    text-align: center;
	
}
h3 {
  padding: 8px;
  letter-spacing: -1px;
  font-weight: 900;
}
#smallLinks {
  display: none;
  position: absolute;
  top: 44px;
  background: #ffffff;
}
#smallLinks a {
  color: #000000;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  display: block;
  text-align: left;
  z-index: 100;
}
section.home-services ul {
  border: 1px dotted #e60114;
  margin-top: 0;
  margin-bottom: 0;
  border-radius: 15px;
  padding: 20px;
  background: #fdfafa;
}
section.home-services ul li {
  list-style-type: none;
  margin-bottom: 12px;
  font-weight: 500;
}
/* #DCBF9B; #F8EBCB */ 


label {
  display: block;
  margin: 13px 0 0 0;
  color: #e60114;
}
input[type=text], textarea {
  border: 1px solid #000;
  display: block;
  width: 80%;
  font-size: 20px;
  line-height: 1.5;
  border: 1px solid #999;
}
textarea {
  height: 200px;
}
@media (max-width: 800px) {
  input[type=text], textarea {
    width: 100%;
  }

}
div.home-contact-info {
    font-size: 20px;
    line-height: 1.6;
}
@media (min-width: 801px) {
  div.home-contact-info {
    /*padding: 20px;*/
    margin: 20px;
  }
  form.home-contact {
    position: relative;
    left: -8px;
    padding: 20px 20px 20px 24px;
    border-left: 2px dashed #e60114;
  }
}
strong {
  color: #666;
  font-weight: 800;
}
        </style>
    </head>
    <body>

<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="logo w3-bar-item w3-button">HYPERSONATA <span class="logotag w3-hide-small">Web Design &amp; Digital Marketing</span></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small w3-hide-medium w3-hide-large">
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
    <div class="w3-right w3-hide-medium w3-hide-large w3-hide-small">
		<a href="javascript:void(0);" class="icon hamburger" onclick="toggleSmallNav()">
			<i class="fa fa-bars"></i>
		</a>
    </div>    
	<div id="smallLinks" class="w3-hide-medium w3-hide-large">
		<a href="#contact" onClick="toggleSmallNav()">Contact</a>
	</div>
  </div>
</div>
<div class="main-content-container">

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
<footer class="w3-margin">
(c) 2020 David A. Powers
</footer>
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
