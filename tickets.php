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
                <h1 class="probootstrap-heading text-white mb-4">ΕΙΣΙΤΗΡΙΑ</h1>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section  style="padding-top: 0px; " >
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="index.php">ΑΡΧΙΚΗ</a>
          <span class="breadcrumb-item active" href="#">ΕΙΣΙΤΗΡΙΑ</span>
        </nav>
        </section>

      <section class="probootstrap-section " style="padding-top:0%">
        <div class="container">
          <div class="row">
            <div class="col-md">
              <div class="media mb-3">
                <div class="probootstrap-icon"><span class="icon-fingerprint display-4"></span></div>
                <div class="media-body">
                 <button type="button" class="block" onclick="window.location.href = 'komistra.php';" >ΤΙΜΕΣ ΕΙΣΙΤΗΡΙΩΝ</button>
                </div>
              </div>
            </div>

           <div class="col-md">
              <div class="media mb-3">
                <div class="probootstrap-icon"><span class="icon-fingerprint display-4"></span></div>
                <div class="media-body">
                 <button type="button" class="block" onclick="window.location.href = 'ticket_store.php';" >ΑΓΟΡΑ ΕΙΣΙΤΗΡΙΩΝ / ΕΠΑΝΑΦΟΡΤΙΣΗ ΚΑΡΤΑΣ</button>
                </div>
              </div>
            </div>

            <div class="col-md">
              <div class="media mb-3">
                <div class="probootstrap-icon " style="margin-top: 20px;"><span class="icon-fingerprint display-4" ></span></div>
                <div class="media-body">
                 <button type="button" class="block">ΕΚΔΟΣΗ ΚΑΡΤΑΣ</button>
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