<?php
require_once "./classes/Products.php";
require_once "./classes/Categories.php";

$list_product = [
  $prodotto1 = new Categories("Scatoletta", "https://loremflickr.com/320/240/cat", 14, "Cibo", "", "gatto"),
  $prodotto2 = new Categories("Pallina", "https://loremflickr.com/320/240/dog", 12, "Giocattolo", "", "cane"),
  $prodotto3 = new Categories("Croccantini", "https://loremflickr.com/320/240/cat", 20, "giocattolo", "", "gatto"),
  $prodotto4 = new Categories("Scatoletta", "https://loremflickr.com/320/240/dog", 14, "Cibo", "", "cane"),
  $prodotto5 = new Categories("Pallina", "https://loremflickr.com/320/240/cat", 12, "Giocattolo", "", "gatto"),
  $prodotto6 = new Categories("Croccantini", "https://loremflickr.com/320/240/dog", 20, "giocattolo", "", "cane")

];

var_dump($list_product);




?>



































<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
  <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">

  <title>Php-oop-2| Index</title>

  <!-- Third party libraries -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  
  <!-- Custom css -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <main class="container pb-5">
    <h1 class="my-5">E-commerce Animali</h1>


  <div class="container_card row gap-5">

    <?php foreach ($list_product as $product) { ?> 
      <div class="card" style="width: 18rem;"> <img src=<?php echo $product->getImage() ?> class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title"><?php echo $product->getName_product() ?></h5>
          <p>TIPOLOGIA PRODOTTO:<br><?php echo $product->getType() ?></p>
          <p><i class="<?php echo $product->getIcon() ?>"></i></p>
          <p>CATEGORIA:<br><?php echo $product->getCategory() ?></p>
          <p>PREZZO:<br><?php echo $product->getPrice() ?>€</p>
        </div>
      </div> <?php } ?>
  </div>
  </main>

  <script src="js/main.js"></script>
</body>

</html>