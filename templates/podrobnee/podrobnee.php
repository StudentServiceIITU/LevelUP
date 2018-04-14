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

<body class="w3-light-grey w3-content" style="max-width:1600px">

<?php
	include_once "../parts/navigation.php";
?>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
	
	<div class="w3-main" style="margin-left:300px">
		<header id="portfolio">
			<a href="#"><img src="avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
			<span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span><br><br><br>
		</header>
  
		<?php
			include_once "../dbfunction/functioni.php";
			if(isset($_POST["offer_id"])||isset($_SESSION["offer_id"])){
				if(isset($_POST['offer_id'])){
					$_SESSION["offer_id"] = $_POST["offer_id"];
				}
				if(!isset($_SESSION["offer_id"])){
					$_SESSION["offer_id"] = $_POST["offer_id"];
				}
				else
				$offer_id = $_SESSION["offer_id"];
    
				$row = mysqli_fetch_array(mysqli_query($con , "select * from offers where offer_id ='".$offer_id."'"));
?>
        <div class="w3-twothird w3-container">
        <img src="mountains.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
        <div class="w3-container w3-white">
			<p><b><?php echo $row["offer_title"]?></b></p>
			<p><?php echo $row["offer_description"]?></p>
			<p>Price:<?php echo $row["offer_price"]?></p>
			<p>Reward:<?php echo $row["offer_reward"]?></p>
			<p>Offer Status:<?php echo $row["offer_status"]?></p>
		</div>
		</div>
</body>
<?php
}
?>


 





 
  

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
