  <!DOCTYPE HTML>
<!-- Arik Idrisy -->
<?php session_start();?>
<html>
	<head>
		<title>
			Project Olympus: Account Confirmation
		</title>
		<link type="text/css" rel="stylesheet" href="FP.css"/>
		<script>

		</script>
		<style>
		</style>
		<?php
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$uname = $_POST['uname'];
			$pword = $_POST['pword'];
			$email = $_POST['email'];
			$_SESSION["fname"] = $fname;
			$_SESSION["lname"] = $lname;
			$_SESSION["uname"] = $uname;
			$_SESSION["pword"] = $pword;
			$_SESSION["email"] = $email;
		//	print_r($_SESSION);
		?>
	</head>
	
	<body>
		<a href="index.html" style="text-decoration:none"><h1 class="head">PROJECT OLYMPUS</h1></a>
		<a href="choose.html">Continue to Ship Selection</a>
	</body>
	<script>
	</script>
</html>
