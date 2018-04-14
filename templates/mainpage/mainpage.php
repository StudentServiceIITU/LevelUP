<html>
<title>Main</title>
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

<body class="w3-light-grey w3-content" style="max-width:1600px">

<?php
	include_once "../parts/navigation.php";
?>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<div class="w3-main" style="margin-left:300px">
<header id="portfolio">
	<a href="#"><img src="avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
	<span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span><br><br>

	<div id='search-box'>
		<form action='/search' id='search-form' method='get' target='_top'>
			<input id='search-text' name='q' placeholder='Search Box' type='text'/>
			<button id='search-button' type='submit'><span>Search</span></button>
		</form>
	</div><br>

	<?php 
	include_once "../parts/sorting.php";
	?>
</header>
		<div class="w3-row-padding"></br>
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
		</div>';
		}
	}
?>
		</div>
	</div>
</body>
</html>

<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>