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
    <?php 
      if(isset($_SESSION['admin'])){
    ?>
        <main class="py-4 container">
          <h1 class="text-center text-white">Create New Admin</h1>
          <a href="/panel" class="btn btn-danger float-xl-right">back</a>
          <form method="POST" style="width: 100%">
            <input type="hidden" value="add">
            <label>
              <p class="label-txt">EMAIL</p>
              <input type="text" name="email" class="input">
              <div class="line-box">
                <div class="line"></div>
              </div>
            </label>
            <label>
              <p class="label-txt">NAME</p>
              <input type="text" name="name" class="input">
              <div class="line-box">
                <div class="line"></div>
              </div>
            </label>
            <label>
              <p class="label-txt">SURNAME</p>
              <input type="text" name="surname" class="input">
              <div class="line-box">
                <div class="line"></div>
              </div>
            </label>
            <label>
              <p class="label-txt">ROLE</p>
              <input type="text" name="role" class="input">
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
              <p class="label-txt">PASSWORD</p>
              <input type="password" name="password" class="input">
              <div class="line-box">
                <div class="line"></div>
              </div>
            </label>
            <button type="submit" name="btn">submit</button>
          </form>
        </main>
    <?php } else {?>
      <h1 class="text-center text-white mt-5">Вы не имеете доступ к этой странице</h1>
    <?php } ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>