<?php include 'db.php'; ?>
<?php 
    require 'session.php';
    Session::start();
    /**Traitement du formulaire */
     
   
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {   
        try{
            if(isset($_POST['username']) && isset($_POST['password'])){
                $username = $db->quote($_POST['username']);
                $password = $db->quote($_POST['password']);
                $select = $db->query("select * from users where username = $username and password = $password");
                
                if($select->rowCount() > 0){
                    Session::set('auth',$select->fetch());
                    header('Location:index.php');
                    die;
                }
            }
        }catch(Exception $e){
            // echo('Exception');
        }
       
    }  
    else{
        // echo('Erreur GET');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css"> -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
    <!-- navbar -->
   <!--  <section id="Login">
    <nav class="navbar navbar-light border-bottom border-danger bg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <span id="name"> Admin Panel</span></a>
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
            
          </div>
        </div>
      </div>
    </nav>
    </section> -->
    <!-- / login setion / -->
   <!--  <section class="log">
          <form action="index.php" method="POST" class="login shadow-lg p-5 mb-5">
              <div class="swd-title">
                  <h1>Login</h1> 
                 
                </div>
            <input type="text" name="username" placeholder="Username"><br><br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <button type="submit"><strong>Login</strong></button>
          </form>
          

    </section>
 -->

 <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../img/home2.jpg" id="icon"  />
    </div>

    <!-- Login Form -->
    <form method="POST" action="login.php">
      <input type="text" name="username" id="login" class="fadeIn second"  placeholder="login">
      <input type="password" name="password" id="password" class="fadeIn third" placeholder="password">
      <input type="submit" name="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="changemdp.php">change Password?</a>
    </div>

  </div>
</div>

          



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>