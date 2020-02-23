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
        





    <section class="probootstrap-cover">
      
     <section  style="padding-top: 82px; " >
      <nav class="breadcrumb">
        <a class="breadcrumb-item" href="index.php">ΑΡΧΙΚΗ</a>
        <a class="breadcrumb-item" href="routes.php">ΔΙΑΔΡΟΜΗ</a>
        <span class="breadcrumb-item active" >ΕΥΡΕΣΗ ΔΙΑΔΡΟΜΗΣ</span>
      </nav>
      </section>
      <div class="container">

        <div class="row probootstrap-vh-100 align-items-center">
          
          <div class="col-sm-6">
            <div class="form black_text bold_text">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
							  <li class="nav-item">
							    <a class="nav-link active" id="flight-tab" data-toggle="tab" href="#diadromi" role="tab" aria-controls="flight" aria-selected="true">ΕΥΡΕΣΗ ΔΙΑΔΡΟΜΗΣ</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#anaxoriseis" role="tab" aria-controls="hotel" aria-selected="false">ΑΝΑΧΩΡΗΣΕΙΣ</a>
							  </li>
              </ul>

              
              <div class="tab-content" id="myTabContent">
							  <div class="tab-pane fade show active" id="diadromi" role="tabpanel" aria-labelledby="flight-tab">
              
              <form action=routes_results.php method="post" id="form1">
               <?php if(isset($_GET['error'])) {echo $_GET['error'];} ?>


                <div class="form-group">
                  <label for="afetiria1" >ΑΦΕΤΗΡΙΑ:</label>
                  <input type="text" placeholder="Από " class="form-control" name = "afetiria"  id="afetiria" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Από '">
                </div>
                <div class="form-group">
                  <label for="proorismos1">ΠΡΟΟΡΙΣΜΟΣ:</label>
                  <input type="text" placeholder="Προς " class="form-control"name = "proorismos"  id="proorismos" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Προς '">
                </div>
                <div class="form-group">

                <button type="submit" form="form1" class="btn btn-default">ΑΝΑΖΗΤΗΣΗ</button>
                  </div>

              </form>
              </div>
              <div class="tab-pane fade" id="anaxoriseis" role="tabpanel" aria-labelledby="hotel-tab">
                <form id="form2" class="form-group" action="/action_page.php">
                  <label for="afetiria2">ΑΦΕΤΗΡΙΑ:</label>
									<input type="text" class="form-control" name="name" id="afetiria2" placeholder="Από " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">																				
                  <button type="submit" form="form2" class="btn btn-default">ΑΝΑΖΗΤΗΣΗ</button>					  	

                </form>		
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  
 <?php
      include_once('include\footer.php');
?>

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript">
  $(function() {
      
      //autocomplete
      $("#afetiria").autocomplete({
          source: "include\search.php",
      });                

  });</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>


<?php
    unset($_SESSION['error']);
?>