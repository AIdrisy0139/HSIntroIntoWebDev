  <!DOCTYPE HTML>
<!-- Arik Idrisy -->
<html>
	<head>
		<title>
			Project Olympus: Greetings
		</title>
		<!--<link type="text/css" rel="stylesheet" href="FP.css"/>-->
		<script>

		</script>
		<?php
			$conn  = new PDO("mysql:host=localhost;dbname=final_proj","root","");	
			$cmd = "SELECT *
					FROM users";
			$statement = $conn->prepare($cmd);
			$statement->execute();
			$userInfo = $statement->fetch();
			$inputUname = $_POST['username'];
			$inputPword = $_POST['password'];
		?>
		<style>
		</style>
	</head>
	
	<body>
	</body>
	<script>
	</script>
</html>
