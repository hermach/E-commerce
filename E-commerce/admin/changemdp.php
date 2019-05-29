<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<section class="container-fluid" id="content">
		
		<main class="container col-md-6" style="margin-left: 35%; margin-top: 10%">
	
	<div class="signup-form col-md-6">
    <form action="" method="post">
	   <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="username" required="required">
        </div>
        <div class="form-group">
        	<input type="password" class="form-control" name="password" placeholder="password" required="required">
        </div>
        <div class="form-group">
        	<input type="password" class="form-control" name="newpassword" placeholder="cnew password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="cnewpassword" placeholder="new password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-lg" style="margin-left: 34%;">Sign Up</button>
        </div>

    
    </form>
</div>
     
</main>


	    

	    
</section>
	
</body>
</html>
<?php

include"db.php";



$pdo=$db;
if (isset($_POST['submit'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $nmdp=$_POST['newpassword'];
    $rnmdp=$_POST['cnewpassword'];
    if ($nmdp==$rnmdp) {
         
            $sqlll="SELECT password FROM users WHERE username='$username';";
            $dat=$pdo->query($sqlll);
            $q=$dat->fetch(PDO::FETCH_ASSOC);
               
               
                $zz="UPDATE `users` SET `password` = '$nmdp' WHERE `users` . `username`='$username'";
                $fich=$pdo->query($zz);
            
    }
   
}
?>




