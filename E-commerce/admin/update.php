<?php 
include 'db.php';
require 'session.php';
Session::start();
$select = $db->query('SELECT id_items, title, des, catg, price, img FROM items ');
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

    <style>
    .input{
        background-color: white;
        border: solid 0px;
        width: 100%;
    }
    
    </style>

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
        <a href="#" class="w3-bar-item w3-button py-5"><i class="fa fa-cogs"></i> Edit article</a>
    </div>  

      <!-- Page Content -->
    <div class="w3-container page-content">
        <div class="title">
            <h1>EDIT ARTICLE</h1>
        </div>
        <!-- / table / -->
        <table class="table">
                <thead class="thead">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($items as $item):?>
                  <tr>
                    <th scope="row"><input class="input" name="id_items" disabled value="<?=$item['id_items']; ?>"></th>
                    <td><?= $item['title'];?></td>
                    <td><?= $item['des'];?></td>
                    <td class="text-center"><?= $item['catg'];?></td>
                    <td class="text-center"><?= $item['price'];?></td>
                    <td><img src="../img/items/<?= $item['img'];?>" width="200px"></td>
                    <td><a href="editpage.php?id_items=<?= $item['id_items'];?>"><i class="fas fa-edit"></i></a></td>
                  </tr>
                <?php endforeach;?>
                </tbody>
              </table>
              
    </div>

          
      

           
</body>
</html> 

    <!-- <script src="../js/admin.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>