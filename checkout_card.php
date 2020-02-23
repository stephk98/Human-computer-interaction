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
                <h1 class="probootstrap-heading text-white mb-4">ΤΑ ΣΤΟΙΧΕΙΑ ΜΟΥ</h1>
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
                                <a class="breadcrumb-item" href="checkout.php">ΤΟ ΚΑΛΑΘΙ ΜΟΥ</a>

          <span class="breadcrumb-item active" href="#">ΤΑ ΣΤΟΙΧΕΙΑ ΜΟΥ</span>
        </nav>
        </section>

<section class="probootstrap-section">
<div class="container">
  <div class="row">
    <div class="col-8">
      <div class="card_box">
        <h4 class="font-weight-bold">ΣΤΟΙΧΕΙΑ ΚΑΡΤΑΣ</h4>
      <form id="form10" action ="bought_ticket.php">
        <div class="form-group">
          <label class="font-weight-bold" for="fname">ΟΝΟΜΑ</label>
          <input type="text" id="fname" class="form-control" required>
        </div>
        <div class="form-group">
          <label class="font-weight-bold" for="lname">ΕΠΩΝΥΜΟ</label>
          <input type="text" id="fname"  class="form-control" required>
        </div>
        <div class="form-group">
          <label class="font-weight-bold" for="cardnum">ΑΡΙΘΜΟΣ ΚΑΡΤΑΣ</label>
          <input type="text" id="cardnum" maxlength="16" length="16" class="form-control" pattern="[0-9]{13,16}" required>
        </div>
        <div class="form-row">
        <div class="form-group col-4">
          <label class="font-weight-bold" for="cardmonth">ΜΗΝΑΣ ΛΗΞΗΣ</label>
          <select id='Month' class="form-control"required>
          <option value=''>ΕΠΙΛΟΓΗ ΜΗΝΑ</option>
          <option value='1'>ΙΑΝΟΥΑΡΙΟΣ</option>
          <option value='2'>ΦΕΒΡΟΥΑΡΙΟΣ</option>
          <option value='3'>ΜΑΡΤΙΟΣ</option>
          <option value='4'>AΠΡΙΛΙΟΣ</option>
          <option value='5'>ΜΑΙΟΣ</option>
          <option value='6'>ΙΟΥΝΙΟΣ</option>
          <option value='7'>ΙΟΥΛΙΟΣ</option>
          <option value='8'>ΑΥΓΟΥΣΤΟΣ</option>
          <option value='9'>ΣΕΠΤΕΜΒΡΙΟΣ</option>
          <option value='10'>ΟΚΤΩΒΡΙΟΣ</option>
          <option value='11'>ΝΟΕΜΒΡΙΟΣ</option>
          <option value='12'>ΔΕΚΕΜΒΡΙΟΣ</option>
          </select> 
      </div>
        <div class="form-group col-4">
          <label class="font-weight-bold" for="cardyear">ΕΤΟΣ ΛΗΞΗΣ</label>
          <select id='Month' class="form-control" required>
            <option value=''>ΕΠΙΛΟΓΗ ΕΤΟΥΣ</option>
            <option value='1'>2020</option>
            <option value='2'>2021</option>
            <option value='3'>2022</option>
            <option value='4'>2023</option>
            <option value='5'>2024</option>
            </select>
        </div>
        <div class="form-group col-2">
          <label class="font-weight-bold" for="cardcvv">CVV/CVC</label>
          <input type="tel" id="cardcvv" maxlength='3' class="form-control" pattern="([0-9][0-9][0-9])" required>
        </div>
        </div>
      </div>
      </form>
    </div>
    
    <div class="col-4">
      <div class="row">
      <div class="price_box">
      <div>
        <h4 class="font-weight-bold">Τελική τιμή: </h4>
        <div class="total-cart " id="block1"></div>
        <div id="block2">€</div>
      </div>
      </div>
    </div>
    <div class="row">
      <button form="form10" class=" btn_form btn btn-default">ΑΓΟΡΑ</button>
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