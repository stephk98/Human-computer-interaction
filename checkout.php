<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();

?>
<!DOCTYPE html>
<html lang="en">

       <?php
      include_once('include\header.php');
?>
  <body>
    

    

      <section class="probootstrap-cover2">
        <div class="container">
          <div class="row probootstrap-vh-50 align-items-center text-left">
            <div class="col-sm">
              <div class="probootstrap-text pt-5">
                <h1 class="probootstrap-heading text-white mb-4">ΤΟ ΚΑΛΑΘΙ ΜΟΥ</h1>
              </div>
            </div>
          </div>
        </div>
      </section>

      

      <section  style="padding-top: 0px; " >
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="index.php">ΑΡΧΙΚΗ</a>
             <a class="breadcrumb-item" href="tickets.php">ΕΙΣΙΤΗΡΙΑ</a>
                          <a class="breadcrumb-item" href="ticket_store.php">ΑΓΟΡΑ ΕΙΣΙΤΗΡΙΟΥ</a>
          <span class="breadcrumb-item active" href="#">ΤΟ ΚΑΛΑΘΙ ΜΟΥ</span>
        </nav>
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


    <section class="probootstrap-section " >
    <div class="container">
      <div class="row">
          <div class="col">
            <h4>ΠΡΟΙΟΝΤΑ</h4>
            <table class="show-cart table">
            </table>
            <div>Τελική τιμή: <span class="total-cart"></span>€</div>
         
 </div>
           <?php 
              if (!isset($_SESSION['loggedin'])) {?>
	                 <div class="col" style="margin-left:40px">
            <h4>ΑΓΟΡΑ ΩΣ ΕΠΙΣΚΕΠΤΗΣ</h4>
            <div class="row">
                <form action = "checkout_card.php" id="form5" style="margin-left:40px">
                Email <br>
                <input type="email"  name= "email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required><br>
                </form>
                <br>
            </div>
            <div class="row">
                <button form="form5"class="btn btn_shop" >Συνεχεια στην αγορα </button>
                </div>
            <hr />
            <h4>ΣΥΝΔΕΣΗ / ΔΗΜΙΟΥΡΓΙΑ ΛΟΓΑΡΙΑΣΜΟΥ</h4>
            <div class="row">
            </div>
            <div class="row">
              <button class="btn btn_shop"onclick="window.location.href = 'eggrafi.php';">Συνδεση / Εγγραφη </button>
              
            </div >
          </div>
            <?php 
       
          }
            else { ?>
              <div class="col">
            
 
            <div class="row">
                <button class="btn btn_shop" style="margin-top:80px; margin-left:40px" onclick="window.location.href = 'checkout_card.php';">Συνεχεια στην αγορα </button>
                </div>
                </div>
           <?php } 
            ?>
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