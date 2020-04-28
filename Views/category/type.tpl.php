<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pageData['title'] ?></title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/png">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/all.css">
    <script src="https://kit.fontawesome.com/44d005799f.js" crossorigin="anonymous"></script>
</head>
<body onload="showMyCart()">
    <?php require_once "Template/header.php"; ?>
    <main class="py-4 container">
        <div class="container">
          <div class="mb-3 text-center d-flex flex-wrap">
              <?php 
                foreach ($pageData['data'] as $product => $el){
              ?>
                <div class="card mb-4 shadow-sm center-block">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal"><?php echo $el['title']; ?></h4>
                </div>
                <div class="card-body">
                  <div>
                    <img src="<?php echo $el['img']; ?>" class="img-thumbnail">
                  </div>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li><?php echo $el['price']; ?> ₽</li>
                  </ul>
                    <input type="button" value="Buy" onclick="addToCart('<?php echo $el['id']; ?>')" class="btn-block btn btn-lg btn-dark mt-2">
                    <a href="/full/<?php echo $el['id']; ?>" name="btn" class="btn btn-lg btn-block btn-dark mt-2">More</a>
                </div>
              </div>
              <?php } ?>
          </div>
        </div>
    </main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" crossorigin="anonymous"></script>
<script src="/js/myCart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>