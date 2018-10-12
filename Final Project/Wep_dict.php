
<!-- Arik Idrisy -->
<html>
	<head>
		<title>
			Project Olympus: Weapon Dictionary
		</title>
		<link type="text/css" rel="stylesheet" href="FP.css"/>
		<link type="text/css" rel="stylesheet" href="tableStyle.css"/>
		<?php
			$conn  = new PDO("mysql:host=localhost;dbname=stsbuild_main","stsbuild_me","sts123");
			$cmd = "SELECT *
					FROM weapons";
			$statement = $conn->prepare($cmd);
			$statement->execute();
			$arrayGun = $statement->fetch();
			$cannons = $statement->fetch();
			$dbb = $statement->fetch();
			$photons = $statement->fetch();
			$quantums = $statement->fetch();
		?>
	</head>
	
	<body>
		<a href="index.html" style="text-decoration:none"><h1 class="head">PROJECT OLYMPUS</h1></a>
		<h2>Weapon Dictionary</h2>
		<div class="tablecontainer">
			<table>
				<tr>
					<td>Weapon Name</td>
					<td>Stats and Description</td>
				</tr>
				<tr>
					<tr>
						<td class="tableheaders">Kinetic Weapons</td>
					</tr>
				</tr>
					<tr>
						<td>Photon Torpedo</td>
						<td>
							Damage: <?php echo $photons["DMG"] ?><br/>
							Rate of Fire: <?php echo $photons["ROF"]?> <br/>
							Penetration: <?php echo $photons["PEN"]?><br/>
							Effective Firing Angle: <?php echo $photons["EFA"]?><br/>
						</td>
					</tr>
					<tr>
						<td>Quantum Torpedo</td>
						<td>
							Damage: <?php echo $quantums["DMG"]?><br/>
							Rate of Fire: <?php echo $quantums["ROF"]?> <br/>
							Penetration: <?php echo $quantums["PEN"]?><br/>
							Effective Firing Angle: <?php echo $quantums["EFA"]?><br/>
						</td>
					</tr>
				<tr>
					<td class="tableheaders">Energy Weapons</td>
				<tr/>
				<tr>
					<tr>
						<td>Arrays</td>
						<td>
							Damage: <?php echo $arrayGun["DMG"]?> <br/>
							Rate of Fire: <?php echo $arrayGun["ROF"]?> <br/>
							Penetration: <?php echo $arrayGun["PEN"]?> <br/>
							Effective Firing Angle: <?php echo $arrayGun["EFA"]?>:<br/>
						</td>
					</tr>
					<tr>
						<td>Dual Beam Banks</td>
						<td>
							Damage: <?php echo $dbb["DMG"]?><br/>
							Rate of Fire: <?php echo $dbb["ROF"]?> <br/>
							Penetration: <?php echo $dbb["PEN"]?><br/>
							Effective Firing Angle: <?php echo $dbb["EFA"]?><br/>
						</td>
					</tr>
					<tr>
						<td>Cannons</td>
						<td>
							Damage: <?php echo $cannons["DMG"]?><br/>
							Rate of Fire: <?php echo $cannons["ROF"]?><br/>
							Penetration: <?php echo $cannons["PEN"]?><br/>
							Effective Firing Angle: <?php echo $cannons["EFA"]?><br/>
						</td>
					</tr>
				</tr>
			</table>
		</div>
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
	//WHY?
		var tableHeaders=document.getElementsByClassName("tableheaders");
		for(i=0;i<tableHeaders.length;i++)
		{
			tableHeaders[i].colSpan="3";
		}
	</script>
</html>
