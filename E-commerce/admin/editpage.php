<?php 
include 'db.php';
require 'session.php';
Session::start();
Session::set('id_items_edit',$_GET['id_items']);
if($_SERVER['REQUEST_METHOD'] == "POST"){ 

    /** Traitement Table Work */
        try{
            if(isset($_POST['title']) && isset($_POST['img']) && isset($_POST['des']) && isset($_POST['catg']) && isset($_POST['price'])){
                $id_items = Session::get('id_items_edit');
                $title = $db->quote($_POST['title']);
                $img = $_POST['img'];
                $des = $db->quote($_POST['des']);
                $catg = $db->quote($_POST['catg']);
                $price = (int)$_POST['price'];
                if(!empty($img)){
                    $query = "update items set title=$title,des=$des,catg=$catg,img='$img',price=$price where id_items=$id_items";

                }else{
                    $query = "update items set title=$title,des=$des,catg=$catg,price=$price where id_items=$id_items";

                }
                $msg=$query;
                $select = $db->query($query);
                if(!empty($select)){
                    header('Location:update.php');                
                } else {
                    $msg="Error Work";
                }
            }
        }catch(Exception $e){
            $msg ='Exception Work';
        }
        /***************** */

        
       
}else{
    $msg ='Erreur POST';
}
$select = $db->query('SELECT id_items, title, des, catg, img, price FROM items where id_items = '.Session::get('id_items_edit'));
$items = $select->fetchAll();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <!-- navbar -->
    <section id="home">
        <nav class="navbar navbar-light border-bottom border-danger bg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <span id="name"><i class=""></i> Admin Panel</span></a>
                <nav class="navbar navbar-expand-lg navbar-light bg">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link" href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
                        </div>
                    </div>
            </div>
        </nav>
    </section>

    <!-- Sidebar -->
    <div class="w3-bar w3-black" style="padding-left: 350px;" !-- id="Sidebar"  --> >
        <a href="index.php" class="w3-bar-item w3-button py-5"><i class="fa fa-th-list"></i> All articles</a>
        <a href="insert.php" class="w3-bar-item w3-button py-5"><i class="fa fa-plus-circle"></i> Add article</a>
        <a href="delet.php" class="w3-bar-item w3-button py-5"><i class="fa fa-trash"></i> Delet article</a>
        <a href="update.php" class="w3-bar-item w3-button py-5"><i class="fa fa-cogs"></i> Edit article</a>
    </div>  

      <!-- Page Content -->
    <div class="w3-container page-content">
        <div class="title">
            <h1>ADD ARTICLE</h1>
        </div>
        <!-- / insert items form / -->
        <?php foreach($items as $item):?>
        <form method="POST" action="" class="add-form container">
            <div class="form-group">
                <label>Article title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter title" value="<?=$item['title']; ?>">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="des" class="form-control" id="" cols="50" rows="5"><?=$item['des']; ?></textarea>
            </div>
            <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="catg">
                            <option value=""> Choose a category </option>
                            <option value="shoes">shoes</option>
                            <option value="t-shirts">t-shirts</option>
                            <option value="pants">pants</option>
                    </select>
            </div>
            <div class="form-group">
                <label>Price</label>
                <select class="form-control" name="price">
                        <option value=""> Choose a price </option>
                        <option value="20">20 DH</option>
                        <option value="25">25 DH</option>
                        <option value="30">30 DH</option>
                        <option value="35">35 DH</option>
                        <option value="40">40 DH</option>
                        <option value="45">45 DH</option>
                        <option value="50">50 DH</option>
                        <option value="55">55 DH</option>
                        <option value="60">60 DH</option>
                </select>
            </div>
            <div class="form-group">
                    <p>Image</p>
                    <input type="file" id="import" name="img">
            </div>
            
            <button type="submit" class="btn">Save</button>

        </form>
        <?php endforeach;?>
    </div>    


          
      

           
</body>
</html> 

    <!-- <script src="../js/admin.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>