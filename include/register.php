<?php
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'db';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$error = 'Email exists, please choose another!';
// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['signupname'], $_POST['signuppassword'], $_POST['signupemail'])) {
	// Could not get the data that should have been sent.
	header("location: ../eggrafi.php?error=Please complete the registration form");
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['signupname']) || empty($_POST['signuppassword']) || empty($_POST['signupemail'])) {
	// One or more values are empty.
	header("location: ../eggrafi.php?error=Please complete the registration form");

}

// We need to check if the account with that username exists.
if (!filter_var($_POST['signupemail'], FILTER_VALIDATE_EMAIL)) {
				header("location: ../eggrafi.php?error=Email is not valid!");

}
// if (preg_match('/[A-Za-z0-9]+/', $_POST['username']) == 0) {
//     die ('Username is not valid!');
// }
if (strlen($_POST['signuppassword']) > 20 || strlen($_POST['signuppassword']) < 5) {
			header("location: ../eggrafi.php?error=Password must be between 5 and 20 characters long!");

}
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['signupemail']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		header("location: ../eggrafi.php?error=username already exist");
	} else {
		// Username doesnt exists, insert new account
        if ($stmt = $con->prepare('INSERT INTO accounts (username,name, surname, password, email, cardnumber,cardtype,discountnumber) VALUES (?, ?, ?,?,?,?,?,?)')) {
            // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
			if (!filter_var($_POST['signupemail'], FILTER_VALIDATE_EMAIL)) {
						header("location: ../eggrafi.php?error=Email is not valid!");
			}
		
			$stmt->bind_param('ssssssss', $_POST['signupemail'], $_POST['signupname'], $_POST['signupsurname'], $_POST['signuppassword'], 
			$_POST['signupemail'], $_POST['cardnum'], $_POST['cardtype'], $_POST['discountnum']);
			$stmt->execute();
				header("location: ../register_true.php");
        } else {
            // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
									header("location: ../eggrafi.php?error=Could not prepare statement!");

        }
	}
	$stmt->close();
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
		header("location: ../eggrafi.php?error=Could not prepare statement!");
}
$con->close();
?>