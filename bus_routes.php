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
                <h1 class="probootstrap-heading text-white mb-4">ΔΡΟΜΟΛΟΓΙΑ</h1>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section  style="padding-top: 0px; " >
      <nav class="breadcrumb">
        <a class="breadcrumb-item" href="index.php">ΑΡΧΙΚΗ</a>
        <a class="breadcrumb-item" href="routes.php">ΔΙΑΔΡΟΜΗ</a>
        <span class="breadcrumb-item active" href="#">ΔΡΟΜΟΛΟΓΙΑ</span>

      </nav>
      </section>

      <section class="probootstrap-section">
        <div class="container">
            <div class="row" >
                <div class="col-4">
                    <div class="box6" style="text-align: left; padding-left: 0px;">
                    <ul class=" " style="list-style-type: none; ">
                        <li class="nav-item probootstrap-cta" onclick="openTab('b1');"><a class="nav-link active" style="cursor: pointer; " >ΛΕΩΦΟΡΕΙΑ-ΤΡΟΛΕΙ</a></li>
                        <li  class="nav-item probootstrap-cta" onclick="openTab('b2');"><a class="nav-link active" style="cursor: pointer; ">ΜΕΤΡΟ</a></li>
                        <li  class="nav-item probootstrap-cta" onclick="openTab('b3');"><a class="nav-link active" style="cursor: pointer; ">ΤΡΑΜ</a></li>

                      </ul>
                    </div>
                
                </div>
                <div class="col-8">
                    <div id="b1" class="containerTab" style="display:none;">
                    <h2>ΛΕΩΦΟΡΕΙΑ</h2>
                    <div class="row">
                        <div class="col-1 bus-box" style="text-align:center;"><a href="bus224.php" class="black_text">224</a></div>
                        <div class="col-1 bus-box" style="text-align:center;"><a href="bus250.php" class="black_text">250</a></div>
                        <div class="col-1 bus-box" style="text-align:center;"><a href=# class="black_text">418</a></div>
                    </div>
                    <h2>ΤΡΟΛΕΙ</h2>
                    <div class="row">
                        <div class="col-1 bus-box2" style="text-align:center;"><a href="#" class="black_text">1</a></div>
                        <div class="col-1 bus-box2" style="text-align:center;"><a href="#" class="black_text">2</a></div>
                        <div class="col-1 bus-box2" style="text-align:center;"><a href="#" class="black_text">3</a></div>
                    </div>
                    <h2>EXPRESS ΛΕΩΦΟΡΕΙΑ</h2>
                    <div class="row">
                        <div class="col-1 bus-box3" style="text-align:center;"><a href="#" class="black_text">Χ93</a></div>
                        <div class="col-1 bus-box3" style="text-align:center;"><a href="#" class="black_text">Χ95</a></div>
                        <div class="col-1 bus-box3" style="text-align:center;"><a href="#" class="black_text">Ε14</a></div>
                        <div class="col-1 bus-box3" style="text-align:center;"><a href="#" class="black_text">Ε15</a></div>
                    </div>
                    <h2>ΝΥΧΤΕΡΙΝΑ ΛΕΩΦΟΡΕΙΑ/ΤΡΟΛΕΙ</h2>
                    <div class="row">
                            <div class="col-1 bus-box3" style="text-align:center;"><a href="#" class="black_text">Χ14</a></div>
                            <div class="col-1 bus-box" style="text-align:center;"><a href="#" class="black_text">500</a></div>
                            <div class="col-1 bus-box2" style="text-align:center;"><a href="#" class="black_text">11</a></div>

                          </div>
                    </div>

                    <div id="b2" class="containerTab" style="display:none;">
                        <h2>ΜΕΤΡΟ</h2>
                        <div class="row">
                            <div class="col-2 metro1" style="text-align:center;"><a href="#" class="black_text">ΓΡΑΜΜΗ 1: Πειραιάς - Κηφισιά</a></div>
                            <div class="col-2 metro2" style="text-align:center;"><a href="#" class="black_text">ΓΡΑΜΜΗ 2: Ανθούπολη - Ελληνικό</a></div>
                            <div class="col-2 metro3" style="text-align:center;"><a href=# class="black_text">ΓΡΑΜΜΗ 3: Αγ. Μαρίνα - Αεροδρόμιο Ελ. Βενιζέλος</a></div>
                        </div>
                        </div>


                        <div id="b3" class="containerTab" style="display:none;">
                            <h2>ΤΡΑΜ</h2>
                            <div class="row">
                                <div class="col-1 bus-box4" style="text-align:center;"><a href="#" class="black_text">Τ3</a></div>
                                <div class="col-1 bus-box3" style="text-align:center;"><a href="#" class="black_text">Τ4</a></div>
                                <div class="col-1 bus-box2" style="text-align:center;"><a href=# class="black_text">Τ5</a></div>
                            </div>
                            </div>



                </div>
        </div>
        </div>
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



   <?php
      include_once('include\footer.php');
?>




<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>