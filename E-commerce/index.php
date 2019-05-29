<?php 
include 'Admin/db.php';
require 'Admin/session.php';
Session::start();
$selectS = $db->query('SELECT id_items, title, des, price, img FROM items where catg="shoes"');
$selectP = $db->query('SELECT id_items, title, des, price, img FROM items where catg="t-shirts"');
$selectD = $db->query('SELECT id_items, title, des, price, img FROM items where catg="pants"');
// $select = $db->query('SELECT id_items, title, des, catg, price, img FROM items');
$itemS = $selectS->fetchAll();
$itemP = $selectP->fetchAll();
$itemD = $selectD->fetchAll();

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>zolo stor</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

<style>
.contact-section{
    background-image: url('img/home-min.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100%;
    width: 100%;
    padding-top: 6rem;
    padding-bottom: 3rem;
    
  }
  
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 2rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -15%;
    text-align: center;
    color: #76d7c4

;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #76d7c4

;
    font-weight: 600;
    color: #34495e

;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #76d7c4

;
    border: none;
    cursor: pointer;
}

  /* footer section */
  footer{
    background-color: #34495e

;
    padding: 4.5mm;

  }
  .copyright{
    color: #76d7c4

;
    text-align: center;
  }


</style>

    
</head>
<body>
    <!-- navbar -->
    <section id="home">
    <nav class="navbar navbar-light border-bottom border-danger bg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <span id="name"><i class="fas "></i> zolo-shop</span></a>
      <nav class="navbar navbar-expand-lg navbar-light bg">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#shoes">shoes</a>
            <a class="nav-item nav-link" href="# t-shirts"> t-shirts</a>
            <a class="nav-item nav-link" href="#pants">pants</a>
            <a class="nav-item nav-link" href="#contact">Contact</a>
            <a class="nav-item nav-link" href="admin/login.php">Login</a>
          </div>
        </div>
      </div>
    </nav>
  </section>
    <!--/ Intro Skew Star /-->
    <header class="intro">   
        <div class="welcome" style="width: 50%; margin-left: 25%; margin-top: 30%;">
          <p class="display-1" style="color: #FFF"><strong>Welcome</strong></p>
          <h1 id="subtitle"><strong>In our store online</strong></h1>
        </div>
    </header>
    <!--/ Intro Skew End /-->

    <!-- / Sandwich section start/ -->
    <section class="shoes" id="shoes">
      <div class="swd-title">
        <h1>shoes</h1> 
        
      </div>
      <div class="row">
      <?php foreach($itemS as $itemS):?>
          <div class="col-md-3">
              <div class="articls-box shadow-lg p-3 mb-5">
                <div>
                  <img src="img/items/<?= $itemS['img'];?>" alt="" class="img-fluid">
                </div>
                <div>
                  <h2 class="a-title"><?=$itemS['title']; ?></h2>
                  <p class="a-description text-center">
                  <?=$itemS['des']; ?>
                  </p>
                  <div class="pl-4">

                      <h6>Price: <?=$itemS['price']; ?> DH</h6>
                  </div>
                </div>
              </div>
          </div> 
      <?php endforeach;?>     
    </section>
    <!-- / Sandwich section end/ -->

    <!-- /  t-shirts section start/ -->
    <section class="pants" id=" t-shirts">
        <div class="drk-title">
          <h1> t-shirts</h1> 
          
        </div>
        <div class="row">
        <?php foreach($itemP as $itemP):?>
            <div class="col-md-3">
                <div class="articls-box shadow-lg p-3 mb-5">
                  <div>
                    <img src="img/items/<?= $itemP['img'];?>" alt="" class="img-fluid">
                  </div>
                  <div>
                    <h2 class="a-title"><?=$itemP['title']; ?></h2>
                    <p class="a-description text-center">
                    <?=$itemP['des']; ?>
                    </p>
                    <div class="pl-4">
                        <h6>Prix: <?=$itemP['price']; ?> DH</h6>
                    </div>
                  </div>
                </div>
            </div> 
        <?php endforeach;?>           
      </section>  
    <!-- /  t-shirts section end/ -->

    <!-- / pants section start/ -->
    <section class="shoes" id="pants">
      <div class="swd-title">
        <h1>pants</h1> 
        
      </div>
      <div class="row">
      <?php foreach($itemD as $itemD):?>
          <div class="col-md-3">
              <div class="articls-box shadow-lg p-3 mb-5">
                <div>
                  <img src="img/items/<?= $itemD['img'];?>" alt="" class="img-fluid">
                </div>
                <div>
                  <h2 class="a-title"><?=$itemD['title']; ?></h2>
                  <p class="a-description text-center">
                  <?=$itemD['des']; ?>
                  </p>
                  <div class="pl-4">
                      <h6>Prix: <?=$itemD['price']; ?> DH</h6>
                  </div>
                </div>
              </div>
          </div>
      <?php endforeach;?>            
    </section>  
  <!-- / pants section end / -->

  <!-- / conatct section start / -->

  <section class="contact-section" id="contact">
      <div class="container contact-form">
          <div class="contact-image">
              
          </div>
          
          <form  method="post" action="contact.php" class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Name" style="border-radius: 0px;">
                </div>
              </div>
              <br>
              <div class="col-md-6" style="float: left;">
                <div class="form-group">
                  <input type="text" class="form-control" name="email" placeholder="Email" style="border-radius: 0px;">
                </div>
              </div>
              <div class="col-md-6">
               <div class="form-group">
                          <input type="text" name="subject" class="form-control" placeholder="Subject *" value="" / style="border-radius: 0px;">
                      </div>
                    </div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea class="form-control" name="message" cols="30" rows="7" placeholder="Message"style="border-radius: 0px;"></textarea>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="submit" name="btnSubmit" value="Send Message" class="btn btn-primary">
                </div>
              </div>
            </form>
</div>
  </section>

   <!-- / conatct section end / -->

    <!-- / footer section start/ -->

   
    
    <!-- / footer section end/ -->
    




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>