  <!DOCTYPE HTML>
<!-- Arik Idrisy -->
<?php session_start();?>
<html>
	<head>
		<title>
			Project Olympus: Defiant Build
		</title>
		<link type="text/css" rel="stylesheet" href="FP.css"/>
		<link type="text/css" rel="stylesheet" href="buildPage.css"/>
		<script>
			picCounter=0;
			function changeImage()
			{
				picCounter++;
				if(picCounter==1)
				{
					botImgBox.src="Pics/build/defiantB4.jpg";
				}
				if(picCounter==2)
				{
					botImgBox.src="Pics/build/defiantB2.png";
				}	
				if(picCounter==3)
				{
					botImgBox.src="Pics/build/defiantB3.jpg";
				}
				if(picCounter==4)
				{
					botImgBox.src="Pics/build/defiantB5.jpg";
				}
				if(picCounter==5)
				{
					picCounter=0;
					changeImage();
				}
			}
		</script>
		<style>
		
		</style>
		<?php
			$conn  = new PDO("mysql:host=localhost;dbname=stsbuild_main","stsbuild_me","sts123");
			
			function createOptions($tableName)
			{
				global $conn;
				$cmd = "SELECT * 
						FROM $tableName";
				$statement = $conn->prepare($cmd);
				$statement->execute();
				$numRows = $statement->rowCount();
				for($i=0; $i<$numRows; $i++)
				{
					$tmpGun = $statement->fetch();
					$gunName = $tmpGun["Name"];
					echo "<option value='$gunName'>$gunName</option>";
				}
			}
			$_SESSION["class"] = "Defiant";
		?>
	</head>
	
	<body>
		<a href="index.html" style="text-decoration:none"><h1 class="head">PROJECT OLYMPUS</h1></a>
		<div class="img">
			<img src="Pics/build/defiantB.jpg" id="sealimage"/>
		</div>
		<div>Choose Your Weapons</div>
		<div class="weaponformdiv">
			<form method="post" action="shipConfirmation.php">
				<span>Ship Name</span>
				<input name="sname" type="text"/>
				<span>Ship Registrity Number</span>
				<input name="regnum"type="text"/>
				<br/>
				<span>Fore Weapons</span>
				<select name="foreweapon1">
					<?php
						createOptions("weapons");
					?>
				</select>
				<select name="foreweapon2">
					<?php
						createOptions("weapons");
					?>
				</select>
				<select name="foreweapon3">
					<?php
						createOptions("weapons");
					?>
				</select>
				<select name="foreweapon4">
					<?php
						createOptions("weapons");
					?>
				</select>
				<br/>
				<span>Aft Weapons</span>
				<select name="aftweapon1">
					<?php
						createOptions("weapons");
					?>
				</select>
				<select name="aftweapon2">
					<?php
						createOptions("weapons");
					?>
				</select>
				<input type="submit"/>
			</form>
		</div>
		<div class="img">
			<img id="botImage"/>
		<div>
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
		botImgBox=document.getElementById("botImage")
		changeImage();
		setInterval(function() {changeImage()},15000);
	</script>
</html>
