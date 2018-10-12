  <!DOCTYPE HTML>
<!-- Arik Idrisy -->
<?php session_start();?>
<html>
	<head>
		<title>
			Project Olympus: All Created Ships
		</title>
		<link type="text/css" rel="stylesheet" href="FP.css"/>
		<link type="text/css" rel="stylesheet" href="shipConfirmation.css"/>
		<script>

		</script>
		<style>
		</style>
		<?php
			//print_r($_SESSION);
			$trCounter=-1;
			$conn  = new PDO("mysql:host=localhost;dbname=stsbuild_main","stsbuild_me","sts123");
			$cmd = "SELECT *
					FROM u_ships";
			$statement = $conn->prepare($cmd);
			$statement->execute();
			$entireTable = $statement->fetchAll();
			//print_r($entireTable);
			//echo "<hr>";
			//print_r ($entireTable["10"]);
			//echo "<hr>";
			//echo $entireTable["11"]["Uname"];
			function displayTable()
			{	
				global $statement;
				$numRows = $statement->rowCount();
				global $entireTable;
				for($i=0;$i<$numRows;$i++)
				{
					$tmpUname = $entireTable[$i]["Uname"];
					$tmpSclass = $entireTable[$i]["Sclass"];
					$tmpSname = $entireTable[$i]["Sname"];
					$tmpSreg = $entireTable[$i]["Sreg"];
					$tmpWep1 = $entireTable[$i]["Wep1"];
					$tmpWep2 = $entireTable[$i]["Wep2"];
					$tmpWep3 = $entireTable[$i]["Wep3"];
					$tmpWep4 = $entireTable[$i]["Wep4"];
					$tmpWep5 = $entireTable[$i]["Wep5"];
					$tmpWep6 = $entireTable[$i]["Wep6"];
					$TPI = $entireTable[$i]["TPI"];
					echo "<tr><td>$tmpUname</td><td>$tmpSclass</td><td>$tmpSname</td><td>$tmpSreg</td><td>$tmpWep1</td><td>$tmpWep2</td><td>$tmpWep3</td><td>$tmpWep4</td><td>$tmpWep5</td><td>$tmpWep6</td><td>$TPI</td></tr>";
				}
				/*
				global $entireTable;
				global $trCounter;
				$trCounter+=1;
				echo "$entireTable[$trCounter]['Uname']"."$entireTable[$trCounter]['Sname']";
				global $statement;
				$numRows = $statement->rowCount();
				echo $numRows;
				for($i=0;$i<$numRows; $i++)
				{
					echo "<td>$entireTable[$i]['Uname']</td><td>$entireTable[$i]['Sname']</td><td>$entireTable[$i]['Sreg']</td>";
				}*/
			}
			session_destroy();
		?>
	</head>
	
	<body>
		<a href="index.html" style="text-decoration:none"><h1 class="head">PROJECT OLYMPUS</h1></a>
		<div style="font-weight:bold">The follwing is all the Ships ever made on this website</div>
		<table>	
			<tr>
				<th>User Name</th>
				<th>Ship Class</th>
				<th>Ship Name</th>
				<th>Registry Number</th>
				<th>Weapon 1</th>
				<th>Weapon 2</th>
				<th>Weapon 3</th>
				<th>Weapon 4</th>
				<th>Weapon 5</th>
				<th>Weapon 6</th>
				<th>Total Power Index</th>
			</tr>
			<?php displayTable();?>
		</table>
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
