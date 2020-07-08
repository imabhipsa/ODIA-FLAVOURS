<!-- Navbar -->
<div class="nav-bars">
    <div class="nav-logo">
        <!-- <img src="images/logo.jpg" width="40px"> -->
        <img src="images/banners/icons8-tableware-48.png" width="60px" height="50px">
        <h3>
            Odia Flavours
        </h3>
    </div>
    <div class="nav-links">
        <ul>
            <a href="index.php">
                <li style="color: #d2cdcd;">Home</li>
            </a>

            <!-- <a href="./all-products.php">
                        <li>Menu</li>
                    </a> -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="    color: #d2cdcd;">
                    Menu
                </a>
                <div class="dropdown-menu  bg-warning " aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="veg.php">Veg</a>
                    <a class="dropdown-item" href="non-veg.php"> Non Veg</a>
                    <a class="dropdown-item" href="fast-food.php">Fast Foods</a>
                    <a class="dropdown-item" href="all-products.php">All Items</a>

                </div>
            </li>

            <?php
            session_start();
            if (isset($_SESSION['value'])) {
                echo '
                            <a href="logout.php">
                                <li>Logout</li>
                            </a>
                            ';
            } else {
                echo '
                    <a href="login.php">
                        <li style="color: #d2cdcd;">Login</li>
                    </a>
                    <a href="registration.php">
                        <li style="color: white; background-color:darkorange; padding:4px 6px;">Sign Up</li>
                    </a>
                    ';
            }

            ?>
            

        </ul>
    </div>
</div>
<div class="icon">
    <i class="fa fa-bars" aria-hidden="true"></i>
</div>
<div class="close">
    <i class="fa fa-times" aria-hidden="true"></i>
</div>