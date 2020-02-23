
<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
        <title>Unlock - Free Bootstrap 4 Template</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Free HTML5 Website Template by uicookies.com" />
        <meta name="keywords" content="free bootstrap 4, free bootstrap 4 template, free website templates, free html5, free template, free website template, html5, css3, mobile first, responsive" />
        <meta name="author" content="uicookies.com" />
        
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/style.css">
      
  </head>
  <body>
       <?php
      include_once('include\header.php');
?>
     
    
     
     
      <div class="fix1">
    <div class="container mt-2 mb-4">
        <div class="col-sm-8 ml-auto mr-auto">
          <ul class="nav nav-pills nav-fill mb-1" id="pills-tab" role="tablist">
            <li class="nav-item"> <a class="nav-link active" id="pills-signin-tab" data-toggle="pill" href="#pills-signin" role="tab" aria-controls="pills-signin" aria-selected="true">Sign In</a> </li>
            <li class="nav-item"> <a class="nav-link" id="pills-signup-tab" data-toggle="pill" href="#pills-signup" role="tab" aria-controls="pills-signup" aria-selected="false">Sign Up</a> </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-signin" role="tabpanel" aria-labelledby="pills-signin-tab">
              <div class="col-sm-12 border border-primary shadow rounded pt-2">
                <div class="text-center"><img src="https://www.athenacard.gr/images/template/oasalogo.png"  style="max-height: 70px"></div>
                <form action=include/login.php method="post" id="singninFrom">
                  <?php if(isset($_GET['error'])) {echo $_GET['error'];} ?>

                  <div class="form-group">
                    <label class="font-weight-bold">Email <span class="text-danger">*</span></label>
                    <input type="username" name="username" id="username" class="form-control" placeholder="Enter valid username" required>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Κωδικός <span class="text-danger">*</span></label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="***********" required>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col">
                        <label><input type="checkbox" name="condition" id="condition"> Remember me.</label>
                      </div>
                      <div class="col text-right"> <a href="javascript:;" data-toggle="modal" data-target="#forgotPass">Forgot Password?</a> </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="submit" value="Sign In" class="btn btn-block btn-primary">
                  </div>
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
              <div class="col-sm-12 border border-primary shadow rounded pt-2">
                <div class="text-center"><img src="https://www.athenacard.gr/images/template/oasalogo.png"  style="max-height: 70px"></div>
               
                <form action=include/register.php  method="post" id="singnupFrom">
                <?php if(isset($_GET['error'])) {echo $_GET['error'];} ?>

                  <div class="form-group">
                    <label class="font-weight-bold">Όνομα <span class="text-danger">*</span></label>
                    <input type="name" name="signupname" id="signupname" class="form-control" placeholder="Enter valid Name" required>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Επίθετο <span class="text-danger">*</span></label>
                    <input type="name" name="signupsurname" id="signupsurname" class="form-control" placeholder="Enter valid Surname" required>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Email <span class="text-danger">*</span></label>
                    <input type="email" name="signupemail" id="signupemail" class="form-control" placeholder="Enter valid Email" required>
                   
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Αριθμός Κάρτας <span class="text-danger">*</span></label>
                    <input type="text" name="cardnum" id="cardnum" class="form-control" required >
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold" >Είδος Κάρτας <span class="text-danger">*</span></label> <br>  
                      <input type="radio" name="cardtype" id="cardtype"value="Κανονικό" required> Κανονικο  &emsp;  
                      <input type="radio" name="cardtype" id="cardtype"value="Μειωμένο" required> Μειωμένο   &emsp;  
                      <input type="radio" name="cardtype" id="cardtype"value="Αμέα/Ανέργων" required> Αμέα/Ανέργων<br> 
                  </div>
                 <div class="form-group">
                    <label class="font-weight-bold">Αριθμός Εκπτωτικού Πάσου/Κάρτας </label>
                    <input type="text" name="discountnum" id="discountnum" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Password <span class="text-danger">*</span></label>
                    <input type="password" name="signuppassword" id="signuppassword" class="form-control" placeholder="***********" pattern="^\S{6,}$" 
                    onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); 
                    if(this.checkValidity()) form.password_two.pattern = this.value;" required>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Confirm Password <span class="text-danger">*</span></label>
                    <input type="password" name="signupcpassword" id="signupcpassword" class="form-control" 
                    pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 
                    'Please enter the same Password as above' : '');" placeholder="***********" required>
                  </div>
                  <div class="form-group">
                    <label><input type="checkbox" name="signupcondition" id="signupcondition" required> Έχω διαβάσει και αποδέχομαι τους <a href="javascript:;"> όρους χρήσης και αγοράς.</a> </label>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="signupsubmit" value="Sign Up" class="btn btn-block btn-primary">
                  </div>
           
                </form>
              </div>
            </div>
          </div>
        </div>
      
        <!-- Modal -->
        <div class="modal fade" id="forgotPass" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <form method="post" id="forgotpassForm">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Forgot Password</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label>Email <span class="text-danger">*</span></label>
                    <input type="email" name="forgotemail" id="forgotemail" class="form-control" placeholder="Enter your valid email..." required>
                  </div>
                  <div class="form-group">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Sign In</button>
                  <button type="submit" name="forgotPass" class="btn btn-primary"><i class="fa fa-envelope"></i> Send Request</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>


     <?php
      include_once('include\footer.php');
?>

 </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>

<?php
    unset($_SESSION['error']);
?>

