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
<body>
    <?php require_once "Template/header.php"; ?>
    <main class="py-4 container">
        <?php 
            foreach ($pageData['data'] as $category => $el) {
        ?>
            <div class="panel text-center">
                <a href="type/<?php echo $el['type'] ?>" style="text-decoration: none; color: black;">
                    <img src="<?php echo $el['img'] ?>">
                    <h2><?php echo $el['title'] ?></h2>
                </a>
                <p>
                    <?php echo $el['description'] ?>
                </p>
                <hr />
            </div>
        <?php } ?>
    </main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>