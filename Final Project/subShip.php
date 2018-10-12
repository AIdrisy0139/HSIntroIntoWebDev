  <!DOCTYPE HTML>
<!-- Arik Idrisy -->
<?php session_start();?>
<html>
	<head>
		<title>
			Project Olympus: Ship Submission Complete
		</title>
		<link type="text/css" rel="stylesheet" href="FP.css"/>
		<script>

		</script>
		<style>
		</style>
		<?php
			$UName = $_SESSION['uname'];
			$Sclass= $_SESSION["class"];
			$shipName = $_SESSION["sname"];
			$shipReg = $_SESSION["regnum"];
			$foreWep1 = $_SESSION["wep1"];
			$foreWep2 = $_SESSION["wep2"];
			$foreWep3 = $_SESSION["wep3"];
			$foreWep4 = $_SESSION["wep4"];
			$aftWep1 = $_SESSION["wep5"];
			$aftWep2 = $_SESSION["wep6"];
			$TPI = $_SESSION["TPI"];
			$conn  = new PDO("mysql:host=localhost;dbname=stsbuild_main","stsbuild_me","sts123");
			$cmd = "INSERT INTO u_ships (Sclass,Sname,Sreg,Uname,Wep1,Wep2,Wep3,Wep4,Wep5,Wep6,TPI)
					VALUES('$Sclass','$shipName','$shipReg','$UName','$foreWep1','$foreWep2','$foreWep3','$foreWep4','$aftWep1','$aftWep2','$TPI')";
			$statement = $conn->prepare($cmd);
			$statement->execute();
		?>
	</head>
	
	<body>
		<a href="index.html" style="text-decoration:none"><h1 class="head">PROJECT OLYMPUS</h1></a>
		<span>Congrats, your ship has been uploaded</span>
		<div>Click <a href="allShips.php">Here</a> to see all the ships made.</div>
			<div class="botbarcontainer">
				<div>
					<span class="botbar">
						<a href="about.html">About and CREDITS</a>
					</span>
					<span class="botbar">
						<a href="Wep_dict.php">Weapons Dictionary</a>
					</span>
					<span class="botbar">
						<a href="Shield_dict.php">Shields Dictionary</a>
					</span>
					<span class="botbar">
						<a href="index.html">Engine Dictionary</a>
					</span>
					<span class="botbar">
						<a href="index.html">Warp Drive Dictionary</a>
					</span>
					<span class="botbar">
						<a href="index.html">Misc Dictionary</a>
					</span>
				</div>
			</div>
	</body>
	<script>
	</script>
</html>
