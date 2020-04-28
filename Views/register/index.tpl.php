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
    <main class="py-4 container">
        <form method="POST">
          <input type="hidden" value="register">
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
            <p class="label-txt">PASSWORD</p>
            <input type="password" name="password" class="input">
            <div class="line-box">
              <div class="line"></div>
            </div>
          </label>
          <button type="submit" name="btn">submit</button>
        </form>
    </main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>