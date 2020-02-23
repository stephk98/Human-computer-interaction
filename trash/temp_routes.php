<?php
session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'db';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}


// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if (!isset($_POST['afetiria'], $_POST['proorismos'])) {
    // Could not get the data that should have been sent.
    	die ('Please complete the  form');

}
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT id, route  FROM routes WHERE apo = ? AND pros= ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('ss', $_POST['afetiria'],  $_POST['proorismos']);
	$stmt->execute();
    $stmt->store_result();

}
$myrow=array();
if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $route);
	$stmt->fetch();

	for($x=0; $x<($stmt->num_rows); $x++)
       {        
           
            $myrow[$x]=nl2br($route);
            //echo nl2br($route);

    }

    header("location: ../routes_results.php");

}

    else{
        header("location: ../index.php?error=Παρακαλούμε βάλτε αφετηρία και προορισμό!");

    }
    
        $stmt->close();

?>