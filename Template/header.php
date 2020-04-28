<nav class="navbar navbar-expand-md bg-dark shadow-sm navbar-dark" style="border-radius: 0.01rem;">
    <div class="container">
        <a class="navbar-brand" href="/" style="color: white;">
            Online-shop.
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
                <a class="nav-link ml-3" style="color: white;" href="/">All products</a>
                <a class="nav-link" style="color: white;" href="/category">Categories</a>
                <!-- Authentication Links -->
                <?php
                    if(isset($_SESSION['user']))
                    {
                        echo '<li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle ml-3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white;">
                                    '.$_SESSION['user']['name'].'<span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/logout"><i class="fa fa-sign-out mr-3" aria-hidden="true"></i> Logout   
                                    </a>

                                    <a class="dropdown-item" href="/cart"><i class="fa fa-shopping-cart mr-3" aria-hidden="true"></i> Cart   
                                    </a>
                                </div>
                            </li>';
                    }else
                    {
                        echo '<li class="nav-item">
                                <a class="nav-link ml-3" style="color: white;" href="/login">Login</a>
                            </li>';
                        echo '<li class="nav-item">
                                <a class="nav-link" style="color: white;" href="/register">Register</a>
                            </li>'; 
                    }
                ?>         
            </ul>
        </div>
    </div>
</nav>