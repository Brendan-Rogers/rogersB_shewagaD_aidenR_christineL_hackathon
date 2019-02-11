<?php
	require_once('admin/config.php');

	if(isset($_POST['submit'])){
		$firstname = trim($_POST['first-name']);
		$lastname = trim($_POST['last-name']);
		$email = trim($_POST['email']);
		$country = $_POST['country'];
		if(empty($country)){
			$message = "Please select a country.";
		}else{
			$result = signUp($firstname, $lastname, $email, $country);
			$message = $result;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="language" content="english"> 
	<meta http-equiv="content-type" content="text/html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>ONTARIO SUMMER</title>
	<link rel="stylesheet" href="css/master.css">
  	<script src="https://unpkg.com/vue"></script>
  	<script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
</head>
<body>
	<main class="container" id="app">

		<div>
			<router-view/>
		</div>
    
	</main>

<script type="module" src="js/main.js"></script>
</body>
</html>




