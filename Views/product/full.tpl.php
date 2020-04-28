<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pageData['title'] ?></title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/png">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/full.css">
    <script src="https://kit.fontawesome.com/44d005799f.js" crossorigin="anonymous"></script>
</head>
<body onload="showMyCart()">
	<?php require_once "Template/header.php"; ?>
	<main class="py-4 container">
		<?php 
			foreach ($pageData['data'] as $product => $el) {
		?>
	        <div class=" row card">
	          <div class="row">
	            <img src="<?php echo $el['img'] ?>" class="p-4 col-3">
	            <div class="mt-5">
	              <h1><?php echo $el['price'] ?><a style="color: #707070; ">₽</a></h1>
	              <h5><?php echo $el['model'] ?></h5>
	              <h2></h2>
	              <p class="mt-2">Country: <?php echo $el['country'] ?></p>
	              <input type="button" value="Buy" onclick="addToCart('<?php echo $el['id']; ?>')" class="btn btn-dark pr-5 pl-5" style="color: white;">
	            </div>
	          </div>
	          <div class="float-right mt-lg-n5 mr-5 fs">
	            <p><b>Additionally:</b></p>
	            <p>Guarantee: <b>36 m.</b></p>
	            <p class="mt-2">Страна-производитель: <b><?php echo $el['country'] ?></b></p>
	          </div>
	        </div>
	        <div>
	          <h3 class="mt-5 mb-4 text-center"><?php echo $el['model'] ?></h3>
	          <p>
	            <?php echo $el['description'] ?>
	          </p>
	        </div>
		<?php } ?>
	</main>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" crossorigin="anonymous"></script>
 <script src="/js/myCart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>