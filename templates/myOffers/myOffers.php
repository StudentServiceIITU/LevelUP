<!DOCTYPE html>
<html>
<title>My Offers</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/raleway.css">
<link rel="stylesheet" href="css/searchBoxStyle.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
<script src="searchJS.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<?php
	include_once "../parts/navigation.php";
?>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <br><br>
    
      
    <br>
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="mountains.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <div contenteditable='true'><p><b>Need help c++</b></p></div>
        <div contenteditable='true'><p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p></div>
        <div contenteditable='true'><p>Price: 1000tg</p></div>
        <div contenteditable='true'><p>Reward: Linkin park's METEORA album</p></div>
        <div contenteditable='true'><p>Author: Captain America and Iron man</p></div>
        <table>
        <tr>
        <td>
        <form>
        <input type='submit' class='btn btn-success' value='Save changes'>
        </form>
        </td>
        <td>
        <form>
        <input type='submit' class='btn btn-danger' value='Delete this offer'>
        </form>
        </td>
        </tr>
        </table>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="mountains.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <div contenteditable='true'><p><b>Who knows how to solve 5th zadacha 4th chapter 129 page(Math)</b></p></div>
        <div contenteditable='true'><p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p></div>
        <div contenteditable='true'><p>Price: 1000tg</p></div>
        <div contenteditable='true'><p>Reward:: Nothing</p></div>
        <div contenteditable='true'><p>Author: Mr. Fantastic</p></div>
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
