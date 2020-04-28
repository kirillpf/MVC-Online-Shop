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
    <?php 
        if(isset($_SESSION['admin'])){
    ?>
        <main class="py-4 container">
            <div id="page-container" class="main-admin">
                <nav class="navbar navbar-expand-md bg-success shadow-sm navbar-dark">
                    <div class="container">
                        <a class="navbar-brand" href="/" style="color: white;">
                            Admin-Panel.
                        </a>
                        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <a class="nav-link ml-3" style="color: white;" href="product">Add Products</a>
                                <a class="nav-link" style="color: white;" href="add">Add Admin</a>
                                <a class="nav-link" style="color: white;" href="new">Add Category</a>
                                <a class="nav-link ml-3" style="color: white;" href="order">All Order</a>

                                <!-- Authentication Links -->
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle ml-3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white;"><?=$_SESSION['admin']['name']?><span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="logout"><i class="fa fa-sign-out mr-3" aria-hidden="true"></i> Logout   
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="main-body-content w-100 ets-pt">
                <div class="table-responsive bg-light">
                    <h3 class="text-center text-dark">All Product</h3>
                    <table class="table">
                        <tr>
                            <th>Model</th>
                            <th>Type</th>
                            <th>Producer</th>
                            <th>Country</th>
                            <th>Price</th>
                        </tr>
                        <?php 
                            foreach ($pageData['product'] as $product => $el) {
                        ?>
                            <tr>
                                <td><?php echo $el['model']; ?></td>
                                <td><?php echo $el['type']; ?></td>
                                <td><?php echo $el['producer']; ?></td>
                                <td><?php echo $el['country']; ?></td>
                                <td><?php echo $el['price']; ?> ₽</td>
                            </tr>
                        <?php } ?>
                    </table>
                    <h3 class="text-center text-dark mt-5">Admin List</h3>
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Phone</th>
                        </tr>
                        <?php 
                            foreach ($pageData['data'] as $admin => $el) {
                        ?>
                            <tr>
                                <td><?php echo $el['name']; ?></td>
                                <td><?php echo $el['surname']; ?></td>
                                <td><?php echo $el['email']; ?></td>
                                <td><?php echo $el['role']; ?></td>
                                <td><?php echo $el['phone']; ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </main>
    <?php } else { ?>
        <h1 class="text-center text-white mt-5">Вы не имеете доступ к этой странице</h1>
    <?php } ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>