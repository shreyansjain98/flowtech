<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet"> 
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="stylesheets/product-individual.css"/>
	<title>
		Nav
	</title>
</head>
<body>
	<div class="nbcontainer">
		<div class="nb">
		<div class="logo nbpart">
			<img class="logopic" src="img/logo.png">
		</div>
		<div class="menu nbpart">
			<ul class="menulist">
				<li class="opt">
					<i class="material-icons">gps_fixed</i>About Us
				</li>
				<li class="opt dd1">
					<span><i class="material-icons">shopping_cart</i>Products<i class="material-icons">arrow_drop_down</i></span>
					<div class="dropdown-content ddc1">
					    <a href="#">Manual Valves</a>
					    <a href="#">Pneumatic and Motorized Valves</a>
					    <a href="#">Pipe Fittings and Flanges</a>
					    <a href="#">PTFE (Teflon) Products</a>
					</div> 
				</li>
				<li class="opt dd2">
					<span><i class="material-icons">shopping_cart</i>Company<i class="material-icons">arrow_drop_down</i></span>
					<div class="dropdown-content ddc2">
					    <a href="#">Team</a>
					    <a href="#">Clients</a>
					</div> 
				</li>
				<li class="opt">
					<i class="material-icons">phone_android</i>Contact Us
				</li>
				<li class="togbut" id=togbut>
					<i class="material-icons">menu</i>
				</li>
			</ul>
		</div>
		</div>
	</div>
	<div id="resmenu">
			<ul class="resmenulist">
				<li class="resopt">
					Option 1
				</li>
				<li class="resopt">
					Option 2
				</li>
				<li class="resopt">
					Option 3
				</li>
				<li class="resopt">
					Option 4
				</li>
			</ul>
		</div>
		<div class="body2">
	<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "mysql";
			$pid= $_GET['pid'];
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}


	

		$sql1 = "SELECT prodid, prodname, proddesc, prodsize, prodapp, prodacc, brochure FROM prodlist WHERE prodid='$pid'";
		$result1 = mysqli_query($conn, $sql1);
		if (mysqli_num_rows($result1) > 0) {
			while($row = mysqli_fetch_assoc($result1)) {
			$prodname=$row['prodname'];
			$proddesc=$row['proddesc'];
			$brochure=$row['brochure'];
			echo '
		<div class="productheader">
			<p class="productname">
				' . $prodname . '
			</p>
			<p class="download-button">
				<a href="' . $brochure . '">
					<button class="but">Download Catalog</button>
				</a>
			</p>
		</div>
		<div class="productdesc">
			<div class="producttxt">';
			echo nl2br('
				<div class="txts">
					' . $proddesc . '
				</div>');
			}
		}
		else {
			    echo "error";
			}
?>
				<div class="imgs">
<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "mysql";
			$pid= $_GET['pid'];
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			$sql2 = "SELECT imgadd, prodname FROM manual WHERE catid='$pid'";
			$result2 = mysqli_query($conn, $sql2);

			if (mysqli_num_rows($result2) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result2)) {
			    	$imgadd=$row['imgadd'];
			    	$prodname=$row['prodname'];
					echo '<div class="indiv-prod">';
					echo '<img src="' . $imgadd . '" alt="alt">';
					echo '<p class="prodname"> ' . $prodname . '</p>';
					echo '</div>';
				}
			}
			else {
			    echo "error";
			}
			
			?>





			</div>
			</div>

	<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "mysql";
			$pid= $_GET['pid'];
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}
			$sql1 = "SELECT prodid, prodname, proddesc, prodsize, prodapp, prodacc, brochure FROM prodlist WHERE prodid='$pid'";
			$result1 = mysqli_query($conn, $sql1);
			if (mysqli_num_rows($result1) > 0) {
				while($row = mysqli_fetch_assoc($result1)) {
				$prodsize=$row['prodsize'];
				$prodacc=$row['prodacc'];
				$prodapp=$row['prodapp'];
				echo'
			<div class="productprop">
				<ul class="proplist">
					<li class="prop">
						<span class="prophead">Size/Range<br><br></span>
						<span class="proptxt">
							' . $prodsize . '
						</span>
					</li>
					<li class="prop">
						<span class="prophead">Applications<br><br></span>
						<span class="proptxt">
							' . $prodapp . '
						</span>
					</li>
					<li class="prop">
						<span class="prophead">Accessories<br><br></span>
						<span class="proptxt">
							' . $prodacc . '
						</span>
					</li>
				</ul>
			</div>
		</div>';
	}
	}
		else {
			    echo "error";
			}
	

	

			mysqli_close($conn);
		?>
</div>




<script>
	document.getElementById("togbut").onclick=function() {
	var element=document.getElementById("resmenu");
	if (document.getElementById("resmenu").classList.contains('dropdownanim')){
		element.classList.remove("dropdownanim");
		element.classList.add("dropupanim");
		console.log("Not found");
		console.log(element.classList)
	}
	// element.classList.remove("dropupanim"); 
	else{
		element.classList.add("dropdownanim");
		element.classList.remove("dropupanim");
		console.log("Found");
		console.log(element.classList)
	}
	}
	

</script>

</body>
</html>


