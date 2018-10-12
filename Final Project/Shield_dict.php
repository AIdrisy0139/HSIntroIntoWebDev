
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
					FROM shields";
			$statement = $conn->prepare($cmd);
			$statement->execute();
			$covariant = $statement->fetch();
			$regen = $statement->fetch();
			$para = $statement->fetch();
			$resil = $statement->fetch();
		?>
	</head>
	
	<body>
		<a href="index.html" style="text-decoration:none"><h1 class="head">PROJECT OLYMPUS</h1></a>
		<h2>Shield Dictionary</h2>
		<div class="tablecontainer">
			<table>
				<tr>
					<td>Shield Name</td>
					<td>Stats and Description</td>
				</tr>
				<tr>
					<tr>
						<td class="tableheaders">Shields</td>
					</tr>
				</tr>
					<tr>
						<td>Covariant Shield Grid</td>
						<td>
							Maximum Capacity: <?php echo $covariant["Max_Cap"]?><br/>
							Regeneration Rate: <?php echo $covariant["Regen"]?><br/>
							Bleed-Through Amount: <?php echo $covariant["Bleed"]?><br/>
							Link to Memory Alpha: <?php echo $covariant["Link"]?><br/>
						</td>
					</tr>
					<tr>
						<td>Regenerative Shield Grid</td>
						<td>
							Maximum Capacity: <?php echo $regen["Max_Cap"]?><br/>
							Regeneration Rate: <?php echo $regen["Regen"]?><br/>
							Bleed-Through Amount: <?php echo $regen["Bleed"]?><br/>
							Link to Memory Alpha: <?php echo $regen["Link"]?><br/>
						</td>
					</tr>
					<tr>
						<td>Paranitric Shield Grid</td>
						<td>
							Maximum Capacity: <?php echo $para["Max_Cap"]?><br/>
							Regeneration Rate: <?php echo $para["Regen"]?><br/>
							Bleed-Through Amount: <?php echo $para["Bleed"]?><br/>
							Link to Memory Alpha: <?php echo $para["Link"]?><br/>
						</td>
					</tr>
					<tr>
						<td>ResilientShield Grid</td>
						<td>
							Maximum Capacity: <?php echo $resil["Max_Cap"]?><br/>
							Regeneration Rate: <?php echo $resil["Regen"]?><br/>
							Bleed-Through Amount:<?php echo $resil["Bleed"]?><br/>
							Link to Memory Alpha: <?php echo $resil["Link"]?><br/>
						</td>
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
