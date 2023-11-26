<?php
   include 'cnx.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand text-success" href="#!"><i class="bi bi-flower1"></i> O'PEP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">  
                </ul>
                <form class="d-flex gap-2">
                    <span class="text-success fs-4">CLIENT</span>
                    <button class="btn btn-outline-success" name="pagelogin">LogOut</button>
                    <button class="btn btn-outline-success" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-success text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <header class="bg-success py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Shop Plante</h1>
                <p class="lead fw-normal text-white mb-0">WITH CATEGORIE</p>
            </div>
        </div>
    </header>
<!-- Section-->

<section class="py-5">
<?php  
    $req="SELECT * FROM `catégorie`";
    $res=mysqli_query($cnx,$req);
     ?>
    <form action="" class="container w-50" method="POST">
        <Label class="fs-4 my-2 text-success">Categorie :</Label>
        <select name="cat" id="" class="form-control">
        <?php while($row=mysqli_fetch_array($res)){?>
            <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
            <?php }?>
        </select>
      
        <input type="submit" value="Choisir Categorie" name="Choisir" class="btn btn-primary my-2">
        <input type="submit" value="Afficher Toutes les Plantes" name="AfficherToutes" class="btn btn-success my-2">
    </form>
<div class="container px-4 px-lg-5 mt-5 ">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
   
    <?php
    $cat="";
    $qery="SELECT * FROM `plantes'";
    if(isset($_POST['Choisir'])){
      $cat=$_POST['cat'];
    
      $qery="SELECT * FROM `plantes` WHERE idcat=$cat";
    
    }
      else{
        $qery="SELECT * FROM plantes";
        
      }
      $r=mysqli_query($cnx,$qery);
      if($r){
        while ($row = mysqli_fetch_assoc($r)) {
          
      
     ?>
   <form action="" method="post">
            <div class="col mb-5">
                <div class="card h-100 border border-success">
                    <!-- Product image-->
                    <img class="card-img-top" src="../img/<?php echo $row['image']; ?>" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder"><?php   echo $row['nomplante']; ?></h5>
                            <!-- Product price-->
                            $<?php   echo $row['prix']; ?>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><button class="btn btn-outline-success mt-auto" name="add">ADD PRODUCT</button></div>
                    </div>
                </div>
            </div>
            </form>
           
          
         
            <?php   }
      }
    
    ?>
          
       
        </div>
    </div>
   
</section>
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      
</body>
</html>
