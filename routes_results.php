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
if ($stmt = $con->prepare('SELECT id, route  FROM routes WHERE apo LIKE ? AND pros LIKE ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('ss', $_POST['afetiria'],  $_POST['proorismos']);
	$stmt->execute();
  $stmt->store_result();

}
$myrow=array();
if ($stmt->num_rows > 0) {
	  $numofresults=$stmt->num_rows;

	for($x=0; $x<($stmt->num_rows); $x++)
       {        
           $stmt->bind_result($id, $route);
	          $stmt->fetch();
            $myrow[$x]=nl2br($route);
            // echo nl2br($route);

    }

    // header("location: /routes_results.php");

}

    else{
        
        header("location: index.php?error=Παρακαλούμε βάλτε αφετηρία και προορισμό!");

    }
    
        $stmt->close();

?>

<!DOCTYPE html>
<html lang="en">
  <!-- <head>
    <title>Unlock - Free Bootstrap 4 Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Free HTML5 Website Template by uicookies.com" />
    <meta name="keywords" content="free bootstrap 4, free bootstrap 4 template, free website templates, free html5, free template, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="uicookies.com" />
    
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head> -->
     <?php
      include_once('include\header.php');
?>
  <body>
    


 <section class="probootstrap-section">
          <div  class="container">
                       <?php 
  
          if ($numofresults==1) {?>
	              <div class="row" >
                <div class="col-4">
                <div class="box6"  onclick="openTab('b1');">
                ΔΙΑΔΡΟΜΗ 1
                </div>
              </div>
              <div class="col-8">
                <div id="b1" class="containerTab" style="display:none;">
                  <div onclick="this.parentElement.style.display='none'" ></div>
                 <h2>ΔΙΑΔΡΟΜΗ 1</h2>
                <p> <?=$myrow[0]?></p>
                </div>
            </div>
          </div>
            <?php }
            else{?>
              <div class="row" >
                <div class="col-4">
                <div class="box6"  onclick="openTab('b1');">
                ΔΙΑΔΡΟΜΗ 1
                </div>
              </div>
              <div class="col-8">
                <div id="b1" class="containerTab" style="display:none;">
                  <div onclick="this.parentElement.style.display='none'" ></div>
                 <h2>ΔΙΑΔΡΟΜΗ 1</h2>
                <p> <?=$myrow[0]?></p>
                </div>
            </div>
          </div>
           <div class="row" >
                <div class="col-4">
                <div class="box6" onclick="openTab('b2');" >
                ΔΙΑΔΡΟΜΗ 2
                </div>
                </div>
                <div class="col-8">
                <div id="b2" class="containerTab" style="display:none;">
                  <div onclick="this.parentElement.style.display='none'" class="closebtn">x</div>
                  <h2>ΔΙΑΔΡΟΜΗ 2</h2>
                <p> <?=$myrow[1]?></p>
                </div>
                </div>
              </div>
          </div>  <?php } 
            ?>
</div>

    </section>

    <script>
    function openTab(tabName) {
        var i, x;
        x = document.getElementsByClassName("containerTab");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        document.getElementById(tabName).style.display = "block";
      }
    </script>


      <?php
      include_once('include\footer.php');
?>





<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>