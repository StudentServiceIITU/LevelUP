<!DOCTYPE html>
<html>
<title>Welcome to the main page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="raleway.css">
<link rel="stylesheet" href="searchBoxStyle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="aldi_avatar.jpg" style="width:45%;" class="w3-round"><br><br>
    <h4><b>Profile</b></h4>
    <p class="w3-text-grey">Aldiyar Mashina</p>
  </div>
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>My Offers</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>Add Offer</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>Logout</a> 
  </div>
  
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <br><br>
    <div id='search-box'>
        <form action='/search' id='search-form' method='get' target='_top'>
        <input id='search-text' name='q' placeholder='Search Box' type='text'/>
        <button id='search-button' type='submit'><span>Search</span></button>
        </form>   
      <!-- safddasdsad-->
        <ul class="nav nav-tabs">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Title<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">a-z</a></li>
            <li><a href="#">z-a</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Price<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">By ascending order</a></li>
            <li><a href="#">By descending order</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Payment<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Only price</a></li>
            <li><a href="#">Only reward</a></li>
            <li><a href="#">Only both</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Category<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Programming languages</a></li>
            <li><a href="#">Humanitarian languages</a></li>
            <li><a href="#">Humanitarian sciences</a></li>
            <li><a href="#">Mathematical sciences</a></li>
            <li><a href="#">WEB</a></li>
            <li><a href="#">Mobile apps</a></li>
            <li><a href="#">Desktop apps</a></li>
            <li><a href="#">Elective subjects</a></li>
          </ul>
        </li>
    </ul>
  <!-- safddasdsad-->
    </div>
      
    <br>
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="mountains.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Need help c++</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        <p>Price: 1000tg</p>
        <p>Reward: Linkin park's METEORA album</p>
        <p>Author: Captain America and Iron man</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="mountains.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Who knows how to solve 5th zadacha 4th chapter 129 page(Math)</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        <p>Price: 1000tg</p>
        <p>Reward:: Nothing</p>
        <p>Author: Mr. Fantastic</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="mountains.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Searching teammates for Java project who wants to join?</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        <p>Price: 1000tg</p>
        <p>Reward:Nothing </p>
        <p>Author: Spider-man</p>
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="mountains.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Information Security Lab6</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        <p>Price: 1000tg</p>
        <p>Reward: Free lesson of fighting from Logan</p>
        <p>Author: The Wolverine</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="mountains.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>CSA Lab6</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        <p>Price: 1000tg</p>
        <p>Reward:Britain chocolate</p>
        <p>Author: Cyclops and Jean Gray</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="mountains.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Mobile project</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        <p>Price: 1000tg</p>
        <p>Reward:Tesseract</p>
        <p>Author: Loki and Nightcrawler</p>
      </div>
    </div>
  </div>


 
  
 

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

<script src="searchJS.js"></script>

</body>
</html>
