  <!DOCTYPE HTML>
<!-- Arik Idrisy -->
 <?php session_start();?>
<html>
	<head>
		<title>
			Project Olympus: Ship Confirmation
		</title>
		<link type="text/css" rel="stylesheet" href="FP.css"/>
		<link type="text/css" rel="stylesheet" href="shipConfirmation.css"/>
		<script>

		</script>
		<style>
		</style>
		<?php
			$conn  = new PDO("mysql:host=localhost;dbname=stsbuild_main","stsbuild_me","sts123");
			$shipName = $_POST["sname"];
			$shipReg = $_POST["regnum"];
			$foreWep1 = $_POST["foreweapon1"];
			$foreWep2 = $_POST["foreweapon2"];
			$foreWep3 = $_POST["foreweapon3"];
			$foreWep4 = $_POST["foreweapon4"];
			$aftWep1 = $_POST["aftweapon1"];
			$aftWep2 = $_POST["aftweapon2"];
			$_SESSION["sname"] = $shipName;
			$_SESSION["regnum"] = $shipReg;
			$_SESSION["wep1"]=$foreWep1;
			$_SESSION["wep2"]=$foreWep2;
			$_SESSION["wep3"]=$foreWep3;
			$_SESSION["wep4"]=$foreWep4;
			$_SESSION["wep5"]=$aftWep1;
			$_SESSION["wep6"]=$aftWep2;
			$tmpClass = $_SESSION["class"];
			//echo $tmpClass;
			//print_r($_SESSION);
			$allWeaponInfo = array();
			$globalTDMG=0;
			$globalTROF=0;
			$globalTPEN=0;
			$globalTEFA=0;
			function runSQL($name)
			{
				global $conn;
				$sql = "SELECT *
						FROM weapons
						WHERE Name = '$name'";
				$statement = $conn->prepare($sql);
				$statement->execute();
				$weaponInfo = $statement->fetch();
				global $allWeaponInfo;
				$allWeaponInfo[] = $weaponInfo;
				//array_push($allWeaponInfo, $weaponInfo);
				//print_r($allWeaponInfo);
			}
			function getValues()
			{
				global $allWeaponInfo;
				$numOfIndexes = count($allWeaponInfo);
				$totalDmg =0;
				for($i=0;$i<$numOfIndexes;$i++)
				{
						//echo $totalDmg;
						$totalDMG = $totalDMG+ $allWeaponInfo[$i]["DMG"];
						$totalROF = $totalROF + $allWeaponInfo[$i]["ROF"];
						$totalPEN = $totalPEN + $allWeaponInfo[$i]["PEN"];
						$totalEFA = $totalEFA + $allWeaponInfo[$i]["EFA"];
				}
				//echo $totalDMG;
				global $globalTDMG;
				global $globalTROF;
				global $globalTPEN;
				global $globalTEFA;
				$globalTDMG = $totalDMG;
				$globalTPEN = $totalPEN;
				$globalTROF = $totalROF;
				$globalTEFA = $totalEFA;
				global $tmpClass;
				if($tmpClass == "Defiant")
				{
					$globalTDMG = $globalTDMG + 5;
				}
				else{}
				if($tmpClass == "Sovereign")
				{
					$globalTROF = $globalTROF + 5;
				}
				else{}
				if($tmpClass == "Voyager")
				{
					$globalTPEN = $globalTPEN + 5;
				}
				else{}
				$TPI = ($globalTDMG+$globalTPEN+$globalTROF);//TPI = TOTAL POWER INDEX
				$_SESSION['TPI'] = $TPI;
			}
			$timesToRunParseLoop = (count($_POST) -2);
			runSQL($foreWep1);
			runSQL($foreWep2);
			runSQL($foreWep3);	
			runSQL($foreWep4);
			runSQL($aftWep1);
			runSQL($aftWep2);
			getValues();
		?>
	</head>
	
	<body>
		<a href="index.html" style="text-decoration:none"><h1 class="head">PROJECT OLYMPUS</h1></a>
		<div>This is how your ship looks right now,if you are content with it, click submit, if you are not go back and change your ship</div>
		<div id="tablediv">
			<table>
				<tr>
					<th>Ship Name</th>
					<th>Registry Number</th>
					<th>Weapon 1</th>
					<th>Weapon 2</th>
					<th>Weapon 3</th>
					<th>Weapon 4</th>
					<th>Weapon 5</th>
					<th>Weapon 6</th>
				</tr>
				<tr>
					<td><?php echo "$shipName"?></td>
					<td><?php echo "$shipReg"?></td>
					<td><?php echo "$foreWep1"?></td>
					<td><?php echo "$foreWep2"?></td>
					<td><?php echo "$foreWep3"?></td>
					<td><?php echo "$foreWep4"?></td>
					<td><?php echo "$aftWep1"?></td>
					<td><?php echo "$aftWep2"?></td>
				</tr>
			</table>
			<table>
				<tr>
					<th>Total Damage</th>
					<th>Total Rate of Fire</th>
					<th>Total Penetration</th>
					<th>Sum of Effective Firing Angles</th>
					<th>Total Power Index</th>
				</tr>
				<tr>
					<td><?php echo $globalTDMG;?></td>
					<td><?php echo $globalTROF;?></td>
					<td><?php echo $globalTPEN;?></td>
					<td><?php echo $globalTEFA;?></td>
					<td><?php echo $_SESSION['TPI'];?></td>
				</tr>
			</table>
		</div>
		<div id="buttondiv">
			<button><a style="color:black" href="subShip.php">Submit</a></button>
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
	</script>
</html>
