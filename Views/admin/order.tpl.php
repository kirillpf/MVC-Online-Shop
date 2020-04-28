<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pageData['title'] ?></title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/png">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/admin.css">
    <script src="https://kit.fontawesome.com/44d005799f.js" crossorigin="anonymous"></script>
</head>
<body>
    <main class="py-4 container">
		<?php 
      		if(isset($_SESSION['admin'])){
    	?>
	        <main class="py-4 container">
            <div class="main-body-content w-100 ets-pt">
                <div class="table-responsive bg-light">
                    <h3 class="text-center text-dark">All orders</h3>
                    <table class="table">
                        <tr>
                            <th>Status</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                        </tr>
                        <?php 
                            foreach ($pageData['data'] as $product => $el) {
                        ?>
                            <tr>
                                <td><?php echo $el['status']; ?></td>
                                <td><?php echo $el['name']; ?></td>
                                <td><?php echo $el['email']; ?></td>
                                <td><?php echo $el['phone']; ?></td>
                                <td><?php echo $el['address']; ?> ₽</td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </main>
    	<?php } else {?>
      		<h1 class="text-center text-white mt-5">Вы не имеете доступ к этой странице</h1>
    	<?php } ?>
    </main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>