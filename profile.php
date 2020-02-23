<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.php');
	exit();
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'db';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password,email,surname, name, cardnumber, cardtype,discountnumber FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email, $surname, $name, $cardnumber, $cardtype, $discountnumber);
$stmt->fetch();
$stmt->close();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
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
  </head>
  <body>
    

   <?php
      include_once('include/header.php');
?>

      <section class="probootstrap-cover2">
        <div class="container">
          <div class="row probootstrap-vh-50 align-items-center text-left">
            <div class="col-sm">
              <div class="probootstrap-text pt-5">
                <h1 class="probootstrap-heading text-white mb-4">ΤΟ ΠΡΟΦΙΛ ΜΟΥ</h1>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="probootstrap-section" style="padding-top:0%">
        <div class="container">
          <div class="row">
            <div class="col">
                <h2>Το προφίλ μου</h2>
                <p>Όνομα: <?=$name?></p>
                <p>Επώνυμο: <?=$surname?></p>
                <p>Email: <?=$email?></p>
                <!-- <form id="form4">
                Νέος κωδικός<br>
                <input type="password" name="newpass"></br>
                Επιβεβαίωση νεού κωδικού<br>
                <input type="password" name="confnewpass">
                <button type="submit" form="form4" class="btn-default" style="margin-top: 20px;">ΑΛΛΑΓΗ ΚΩΔΙΚΟΥ</button>
                </form> -->

            </div>
            <div class="col">
                <h2>Η κάρτα μου</h2>
                <div class="row">
                <div class="col"><img src="https://www.athenacard.gr/images/template/card.png" style="max-height: 100px ">
                <p>Αριθμός κάρτας: <?=$cardnumber?></p>
                </div>
                <div class="col"><h5 style="text-align: center;">Τύπος Κάρτας</h5>
                <h6 style="text-align:center ;"><?=$cardtype?></h6>
                <?php 
                if (($cardtype=="Μειωμένο") OR ($cardtype=="Αμέα/Ανέργος")) {?>
                <h5 style="text-align: center;">Αριθμός Εκπτωτικού Πάσου/Κάρτας</h5>
                <h6 style="text-align:center ;"><?=$discountnumber?></h6>
                <?php }
                 ?>
                <p style="text-align: center;"><a  href=ticket_store.php > ΑΝΑΝΕΩΣΗ ΚΑΡΤΑΣ</a></p>
                </div>
                </div>
            </div>
          </div>
        </div>
      </section>


   <?php
      include_once('include/footer.php');
?>


    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>