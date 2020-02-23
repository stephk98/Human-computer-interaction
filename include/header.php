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
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  
        <link rel="stylesheet" href="css/font-awesome.min.css">


  </head>
  <body>    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark probootstrap-navabr-dark">
        <div class="container">
          <a class="navbar-brand" href="index.php"><img src="https://www.athenacard.gr/images/template/oasalogo.png" style="max-height: 50px "></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-nav" aria-controls="probootstrap-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="probootstrap-nav">
              <ul class="navbar-nav ml-auto">
              <li class="nav-item probootstrap-cta"><a href="index.php" class="nav-link">ΑΡΧΙΚΗ</a></li>
              <li class="nav-item probootstrap-cta"><a href="routes.php" class="nav-link">ΔΙΑΔΡΟΜΗ</a></li>
              <li class="nav-item probootstrap-cta"><a href="tickets.php" class="nav-link">ΕΙΣΙΤΗΡΙΑ</a></li>
              <li class="nav-item probootstrap-cta"><a href="amea.php" class="nav-link">ΑΜΕΑ</a></li>
              <li class="nav-item probootstrap-cta"><a href="#" class="nav-link">ENGLISH</a></li>
              <li class="nav-item probootstrap-cta"><div class="dropdown"><a href="eggrafi.php" class="nav-link icon-user" style="padding-top: 22px;"></a>
             <?php 
              if (!isset($_SESSION['loggedin'])) {?>
	              <div class="dropdown-content" style="background-color: darkgray" >
                  <a href="eggrafi.php">ΕΓΓΡΑΦΗ/ΣΥΝΔΕΣΗ</a>
               </div>
            <?php }
            else { ?>
              <div class="dropdown-content" style="background-color: darkgray" >
                <a href="profile.php">ΠΡΟΦΙΛ</a>
                <!-- <a href="#">ΑΛΛΑΓΗ ΚΩΔΙΚΟΥ</a> -->
                <a href="include/logout.php">ΑΠΟΣΥΝΔΕΣΗ</a>
              </div>
           <?php } 
            ?>

            </div>
            </li>
               <li class="nav-item probootstrap-cta"><a href="checkout.php" class="nav-link icon-shopping-cart" style="padding-top: 22px;"> </a></li>

            </ul>
          </div>
        </div>
      </nav>

      
    
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>  
     <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>