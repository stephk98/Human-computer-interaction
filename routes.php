<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();

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
      include_once('include\header.php');
?>

      <section class="probootstrap-cover2">
        <div class="container">
          <div class="row probootstrap-vh-50 align-items-center text-left">
            <div class="col-sm">
              <div class="probootstrap-text pt-5">
                <h1 class="probootstrap-heading text-white mb-4">ΔΙΑΔΡΟΜΗ</h1>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section  style="padding-top: 0px; " >
      <nav class="breadcrumb">
        <a class="breadcrumb-item" href="#">ΑΡΧΙΚΗ</a>
        <span class="breadcrumb-item active" href="#">ΔΙΑΔΡΟΜΗ</span>
      </nav>
      </section>

      <section class="probootstrap-section " style="padding-top:0%">
        <div class="container">
          <div class="row">
            <div class="col-md">
              <div class="media mb-3">
                <div class="probootstrap-icon"><span class="icon-fingerprint display-4"></span></div>
                <div class="media-body">
                 <button type="button" class="block" onclick="window.location.href = 'route-finder.php';" >ΕΥΡΕΣΗ ΔΙΑΔΡΟΜΗΣ / ΑΝΑΧΩΡΗΣΕΙΣ</button>
                </div>
              </div>
            </div>

     
            <div class="col-md">
              <div class="media mb-3">
                <div class="probootstrap-icon"><span class="icon-fingerprint display-4"></span></div>
                <div class="media-body">
                 <button type="button" class="block"onclick="window.location.href = 'bus_routes.php';">ΔΡΟΜΟΛΟΓΙΑ</button>
                </div>
              </div>
            </div>

            <div class="col-md">
              <div class="media mb-3">
                <div class="probootstrap-icon"><span class="icon-fingerprint display-4"></span></div>
                <div class="media-body">
                 <button type="button" class="block">ΚΑΤΑΣΤΑΣΗ ΓΡΑΜΜΩΝ</button>
                </div>
              </div>
            </div>


          </section>

  
 <?php
      include_once('include\footer.php');
?>


    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    
  </body>
</html>