<!DOCTYPE html>
<html>
<title>Main</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="raleway.css">
<link rel="stylesheet" href="searchBoxStyle.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
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
    <img src="avatar_g2.jpg" style="width:45%;" class="w3-round"><br><br>
    <h4><b>Profile</b></h4>
    <p class="w3-text-grey">Hello Guest</p>
  </div>
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>LOGIN</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>REGISTER</a>
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
  <div class="w3-row-padding">
  <?php
    include_once '../dbfunction/functioni.php';
    $query = "select * from offers";
    $getinformation = executeSome($query);
    if($getinformation){
      while($r = mysqli_fetch_array($getinformation)){
        echo'
    <div class="w3-third w3-container w3-margin-bottom w3-hover-opacity" style= " height:450px;">
    <form method = "post" action = "../podrobnee/podrobnee.php">
    <button name = "more" style= "border:none; background:white;">
      <img src="mountains.jpg" alt="Norway" style="width:100%;">
      <div class="w3-container w3-white" style = "text-align:left;">
        <p><b>'.$r["offer_title"].'</b></p>
        <p>'.$r["offer_description"].'</p>
        <p>Price: '.$r["offer_price"].'</p>
        <p>Reward: '.$r["offer_reward"].'</p>
        <p>Status: '.$r["offer_status"].'</p>
        <input type = "hidden" value = "'.$r["offer_id"].'" name = "offer_id">
      </div>
    </button>
    </form>
    </div>
  ';

}
}
  closeConnection();
  ?>
 

  </div>
 
  
 

<!-- End page content -->
</div>
</body>
</html>
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
