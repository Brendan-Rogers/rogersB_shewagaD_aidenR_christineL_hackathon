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
  	<script src="https://unpkg.com/vue"></script>
  	<script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
</head>
<body>
	<main class="container" id="app">

		<header>
			<h1 class="pageTitle">Ontario Summer</h1>
			<router-view/>
		</header>

		<section class="landingArea">
			<video src="videos/pureVolume_desktop.mp4" controls></video>
			<button class="bookNow">Book your trip</button>

			<h2 class="welcomeText">Welcome to the Ontario Summer...</h2>

			<img src="images/drake.png" alt="placeholder" class="ontarioImg">
			<img src="images/drake.png" alt="placeholder" class="ontarioImg">
			<img src="images/drake.png" alt="placeholder" class="ontarioImg">

			<h4 class="explore">Explore Ontario</h4>
			
			<p class="promoText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex dolores hic quibusdam fugit libero quaerat tempora ipsum recusandae! Cum voluptates culpa odit hic voluptatibus autem iure natus vel fuga!Ipsum omnis esse quo distinctio laudantium in vel reprehenderit doloribus dicta dolore illo, beatae saepe temporibus quos. Nemo iure quaerat corporis exercitationem, deserunt magnam odio nam ratione quas velit laborum?</p>
		</section>

		<section class="landmarks">

			<img src="images/drake.png" alt="placeholder" class="landmarkImg">
			<h3 class="landmarkTitle">Niagra Falls</h3>
			<h4 class="landmarkSub">Natural Wonder of the World</h4>
			<p class="landmarkText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate id laborum, adipisci quibusdam nemo a voluptatum illum perspiciatis ipsam? Exercitationem repellendus consequuntur dicta sunt voluptates voluptas autem non consequatur quae?Minima blanditiis, ullam quae error laudantium facere illum ducimus aperiam laboriosam alias debitis ad explicabo, quos odit enim delectus, mollitia repudiandae officiis ex suscipit cum? Delectus accusantium quisquam voluptatibus cupiditate!</p>
			<a class="explore">Explore Ontario</a>

			<img src="images/drake.png" alt="placeholder" class="landmarkImg">
			<h3 class="landmarkTitle">Niagra Falls</h3>
			<h4 class="landmarkSub">Natural Wonder of the World</h4>
			<p class="landmarkText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate id laborum, adipisci quibusdam nemo a voluptatum illum perspiciatis ipsam? Exercitationem repellendus consequuntur dicta sunt voluptates voluptas autem non consequatur quae?Minima blanditiis, ullam quae error laudantium facere illum ducimus aperiam laboriosam alias debitis ad explicabo, quos odit enim delectus, mollitia repudiandae officiis ex suscipit cum? Delectus accusantium quisquam voluptatibus cupiditate!</p>
			<a class="explore">Explore Ontario</a>

		</section>

		<section class="experience">

			<h3 class="expTitle">Experience</h3>
			<h4 class="lakes">The Great Lakes</h4>

			<div class="activity">
				<img src="images/drake.png" alt="placeholder" class="activityImg">
				<h3 class="activityTitle">Water Skiing</h3>
				<p class="activityDesc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam assumenda quae qui, nobis incidunt delectus consequuntur modi libero officia, esse cupiditate voluptatum a natus illum cum molestiae labore quam harum.</p>
				<a class="readMore">Read More</a>
			</div>

			<div class="activity">
				<img src="images/drake.png" alt="placeholder" class="activityImg">
				<h3 class="activityTitle">Water Skiing</h3>
				<p class="activityDesc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam assumenda quae qui, nobis incidunt delectus consequuntur modi libero officia, esse cupiditate voluptatum a natus illum cum molestiae labore quam harum.</p>
				<a class="readMore">Read More</a>
			</div>

			<div class="activity">
				<img src="images/drake.png" alt="placeholder" class="activityImg">
				<h3 class="activityTitle">Water Skiing</h3>
				<p class="activityDesc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam assumenda quae qui, nobis incidunt delectus consequuntur modi libero officia, esse cupiditate voluptatum a natus illum cum molestiae labore quam harum.</p>
				<a class="readMore">Read More</a>
			</div>

		</section>

	</main>

<script type="module" src="js/main.js"></script>
</body>
</html>




