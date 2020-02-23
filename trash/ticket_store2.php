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
            <h1 class="probootstrap-heading text-white mb-4">ΑΓΟΡΑ ΕΙΣΙΤΗΡΙΟΥ</h1>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section style="padding-top: 0px; ">
    <nav class="breadcrumb">
      <a class="breadcrumb-item" href="index.php">ΑΡΧΙΚΗ</a>
      <a class="breadcrumb-item" href="tickets.php">ΕΙΣΙΤΗΡΙΑ</a>
      <span class="breadcrumb-item active" href="#">ΑΓΟΡΑ ΕΙΣΙΤΗΡΙΟΥ</span>
    </nav>
  </section>

  <nav class="navbar navbar-inverse bg-inverse bg-faded">
    <div class="row">
      <div class="col">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart">Καλαθι (<span
            class="total-count"></span>)</button>
        <button class="clear-cart btn btn-danger">διαγραφη καλαθιου</button></div>
    </div>
  </nav>

      <section class="probootstrap-section" style="padding-top:0%">
        <div class="container black_text " style="text-align: center;">
            <h2>ΕΝΙΑΙΑ ΕΙΣΙΤΗΡΙΑ</h2>
          <div class="row ">
            <div class="col " >
                <div class="boxed">ΕΝΙΑΙΟ ΕΙΣΙΤΗΡΙΟ<br>0,60€</div>
                <button class="btn_shop add-to-cart " data-name="ΕΝΙΑΙΟ_ΕΙΣΙΤΗΡΙΟ" data-price="0.60">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ</button>
            </div>
            <div class="col" >
                <div class="boxed">2πλό ΕΝΙΑΙΟ<br>1,35€</div>
                <button class="btn_shop add-to-cart" data-name="2πλό_ΕΝΙΑΙΟ" data-price="1.35">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ</button>
            </div>
            <div class="col" >
                <div class="boxed">5πλό ΕΝΙΑΙΟ ΕΙΣΙΤΗΡΙΟ <br>3€</div>
                <button class="btn_shop add-to-cart" data-name="5πλό_ΕΝΙΑΙΟ_ΕΙΣΙΤΗΡΙΟ" data-price="3">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ</button>
            </div>
            <div class="col" >
                <div class="boxed">10+1 ΕΙΝΑΙΑ ΕΙΣΙΤΗΡΙΑ<br>6,00€</div>
                <button class="btn_shop add-to-cart" data-name="10+1_ΕΙΝΑΙΑ_ΕΙΣΙΤΗΡΙΑ" data-price="6">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ</button>
            </div>
           
            </div>
        </div>
        <div class="container black_text " style="text-align: center;">
            <h2>ΗΜΕΡΙΣΙΑ ΕΙΣΙΤΗΡΙΑ</h2>
            <div class="row" style="margin-top: 40px;">
                <div class="col-3" >
                    <div class="boxed">Ημερίσιο<br>4,50€</div>
                    <button class="btn_shop add-to-cart" data-name="Ημερήσιο" data-price="4.50">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ</button>
                </div>
                <div class="col-3" >
                    <div class="boxed">Πέντε ημερών<br>9,00€</div>
                    <button class="btn_shop add-to-cart" data-name="Πέντε_ημερών" data-price="9.00">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ</button>
                </div>
                <div class="col-3" >
                    <div class="boxed">Τουριστικό 3 ημερών <br>22,00€</div>
                    <button class="btn_shop add-to-cart" data-name="Τουριστικό_3_ημερών" data-price="22.00">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ</button>
                </div>
                </div>
          </div>
        </div>

        <div class="container black_text" style="text-align: center;">
            <h2>ΜΗΝΙΑΙΕΣ ΚΑΡΤΕΣ</h2>
          <div class="row">
            <div class="col" >
                <div class="boxed">30 ημερών<br>15 €</div>
                <button class="btn_shop add-to-cart" data-name="30_ημερών" data-price="15.00">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ</button>
            </div>
            <div class="col" >
                <div class="boxed">90 ημερών<br>43 €</div>
                <button class="btn_shop add-to-cart" data-name="90_ημερών" data-price="43.00">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ</button>
            </div>
            <div class="col" >
                <div class="boxed">180 ημερών<br>85 €</div>
                <button class="btn_shop add-to-cart" data-name="180_ημερών" data-price="85.00">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ</button>
            </div>
            <div class="col" >
                <div class="boxed">365 ημερών<br>165 €</div>
                <button class="btn_shop add-to-cart" data-name="365_ημερών" data-price="165.00">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ</button>
            </div>
            </div>

            <h2>ΜΗΝΙΑΙΕΣ ΩΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ </h2>
            <div class="row" style="margin-top: 40px;">
                <div class="col" >
                    <div class="boxed">30 ημερών<br>25 €</div>
                    <button class="btn_shop add-to-cart" data-name="30_ημερών" data-price="25.00">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ</button>
                </div>
                <div class="col" >
                    <div class="boxed">90 ημερών<br>71 €</div>
                    <button class="btn_shop add-to-cart" data-name="90_ημερών" data-price="71.00">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ</button>
                </div>
                <div class="col" >
                    <div class="boxed">180 ημερών<br>125 €</div>
                    <button class="btn_shop add-to-cart" data-name="180_ημερών" data-price="125.00">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ</button>
                </div>
                <div class="col" >
                    <div class="boxed">365 ημερών<br>245 €</div>
                    <button class="btn_shop add-to-cart" data-name="365_ημερών" data-price="245.00">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ</button>
                </div>
                </div>
          </div>
        </div>
        <div class="container black_text" style="text-align: center;">
            <h2>ΑΕΡΟΔΡΟΜΙΟΥ</h2>
          <div class="row">
            <div class="col-3" >
                <div class="boxed">λεωφορείων EXPRESS<br>6,00€</div>
                <button class="btn_shop add-to-cart" data-name="λεωφορείων_EXPRESS" data-price="6.00">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ</button>
            </div>
            <div class="col-3" >
                <div class="boxed">εισιτήριο ΜΕΤΡΟ<br>10,00€</div>
                <button class="btn_shop add-to-cart" data-name="365_ημερών" data-price="10.00">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ</button>
            </div>
            <div class="col-3" >
                <div class="boxed">μετ' επιστροφής ΜΕΤΡΟ<br>18,00€</div>
                <button class="btn_shop add-to-cart" data-name="μετ'_επιστροφής_ΜΕΤΡΟ" data-price="18.00">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ</button>
            </div>
            </div>
        </div>


      </section>

    <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Καλάθι</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="show-cart table">
    
            </table>
            <div>Τελική τιμή: <span class="total-cart"></span>€</div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Κλεισιμο</button>
            <button type="button" class="btn btn-primary" onclick="window.location.href = 'checkout.php';">Αγορα</button>
          </div>
        </div>
      </div>
    </div>
    
    
    
    
    <?php
          include_once('include\footer.php');
    ?>
    
    
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    </body>
    
    </html>