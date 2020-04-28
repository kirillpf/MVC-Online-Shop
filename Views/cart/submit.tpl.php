<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pageData['title'] ?></title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/png">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/auth.css">
    <script src="https://kit.fontawesome.com/44d005799f.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php require_once "Template/header.php"; ?>
    <main class="py-4 container">
	    <?php 
            if(isset($_SESSION['user'])){
        ?>
            <main class="py-4 container">
                <h2 class="text-center text-white">Сheckout</h2>
                <form method="POST" style="width: 100%">
                  <label>
                    <p class="label-txt">NAME</p>
                    <input type="text" name="name" class="input">
                    <div class="line-box">
                      <div class="line"></div>
                    </div>
                  </label>
                  <label>
                    <p class="label-txt">EMAIL</p>
                    <input type="text" name="email" class="input">
                    <div class="line-box">
                      <div class="line"></div>
                    </div>
                  </label>
                  <label>
                    <p class="label-txt">PHONE</p>
                    <input type="text" name="phone" class="input">
                    <div class="line-box">
                      <div class="line"></div>
                    </div>
                  </label>
                  <label>
                    <p class="label-txt">ADDRESS</p>
                    <input type="text" name="address" class="input">
                    <div class="line-box">
                      <div class="line"></div>
                    </div>
                  </label>
                  <button type="submit" name="btn">submit</button>
                </form>
            </main>
        <?php } else { ?>
            <h1 class="text-center mt-5">Сначала авторизуйтесь</h1>
        <?php } ?>
    </main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" crossorigin="anonymous"></script>
<script src="/js/myCart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html> 