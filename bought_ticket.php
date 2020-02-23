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

        <script>
          function myprint(){
            window.print();
          }
          

        </script>

        


<section class="probootstrap-section">
    <div class="container">
      <div class="row d-flex justify-content-center" id="printable_area">
        <div class="col-4 box5 "  >
          <div class="row" >
            <p>Η αγορά προιόντων ολοκληρώθηκε με επιτυχία</p>
            <p >Τελική τιμή:</p>&emsp;
            <div class="total-cart " id="block1" ></div>€
          </div>
          <div class="row">
            <div class="col">
            <a onclick="printDiv('printable_area')" href=#><div class="icon-print"></div></a>
              Εκτύπωση εισιτηρίου
            </div>
            <div class="col">
              <a  href=#><div class="icon-mail" ></div></a>
              Αποστολή εισιτηρίου στο email
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
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>