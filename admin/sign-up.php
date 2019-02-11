<?php 

function signUp($firstname, $lastname, $email, $country) {
	require_once('connect.php');

	// check if user's email already exists in database
	$check_email_query = 'SELECT COUNT(*) FROM tbl_users WHERE email = :email';
	$check_email_set = $pdo->prepare($check_email_query);
	$check_email_set->execute(
		array(
			':email'=>$email
		)
	);
	// do something special if the users email already exists in the system
	if($check_email_set->fetchColumn() > 0) {
		// update the users last update column

		$update_last_query = 'UPDATE tbl_users SET last_update = current_timestamp WHERE email = :email';
		$update_last_set = $pdo->prepare($update_last_query);
		$update_last_set->execute(
			array(
				':email'=>$email
			)
		);
		return sendEmail($firstname, $email, true);
		exit;

	} else {
		// insert user information
		$insert_user_query = "INSERT INTO tbl_users(firstname, lastname, email, country) VALUES (:firstname, :lastname, :email, :country)";
		$insert_user_set = $pdo->prepare($insert_user_query);
		$insert_user_set->execute(
			array(
				":firstname"=>$firstname,
				":lastname"=>$lastname,
				":email"=>$email,
				":country"=>$country
			)
		);

		if($insert_user_set) {
			return sendEmail($firstname, $email, false);
		} else {
			return 'you have failed!';
		}

	}
}

function sendEmail($name, $email, $returning) {
	if($returning) {
		return 'We have sent the RETURNING email.';
	} else {
		return 'We have sent the NEW USER email';
	}
}




?>








