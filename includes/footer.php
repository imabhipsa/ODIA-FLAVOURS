<!-- Footer -->
<footer class="page-footer font-small indigo" style="background-color:black;">

    <!-- Footer Links -->
    <div class="container">

        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-5 mb-3">

            <!-- Grid column -->
            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold ">
                    <a href="./index.php" class="text-warning">home</a>
                </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="./all-products.php" class="text-warning">Menu</a>
                </h6>
            </div>

            <!-- Grid column -->
            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="./index.php#welcome" class="text-warning">About</a>
                </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class=" col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <?php
                    if (isset($_SESSION['value'])) {
                        echo '
                              <a href=".//logout.php" class="text-warning">Logout</a>
                            ';
                    } else {
                        echo '
                            <a href="login.php" class ="text-warning">
                                Login
                            </a>                            
                            ';
                        }
                        
                        ?>                        
                </h6>
            </div>
            <div class=" col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <?php
                    if (isset($_SESSION['value'])) {
                        
                    } else {
                        echo '
                            <a href="registration.php" class ="text-warning">
                                Sign Up
                            </a>                            
                            ';
                        }
                        
                        ?>                        
                </h6>
            </div>
            <!-- Grid column -->

           
            

        </div>
        <!-- Grid row-->
        <hr class=" rgba-white-light" style="margin: 0 15%;">

        <!-- Grid row-->
        <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

            <!-- Grid column -->
            <div class="col-md-8 col-12 mt-5 ">
                <p style="line-height: 1.7rem; color:#b9b0b0;">We provides pure authentic odia foods.Some of them with slight
                    western touch to change your taste.Our recipes are tasty
                    and healthy like any other odia dishes. <br>
                    You can get the taste of odisha at your doorstep.</p>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row-->
        <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

        <!-- Grid row-->
        <div class="row pb-3">

            <!-- Grid column -->
            <div class="col-md-12 pt-4">

                <div class="mb-5 text-center py-3" style="border-top: 1px solid white; border-bottom:1px solid white; color:#e4dbdb;">

                    <!-- Facebook -->
                    <a class="fb-ic" style="cursor:pointer">
                        <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic" style="cursor:pointer">
                        <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
                    </a>
                    <!-- Google +-->
                    <a class="gplus-ic" style="cursor:pointer">
                        <i class="fab fa-google-plus-g fa-lg white-text mr-4"> </i>
                    </a>

                    <!--Instagram-->
                    <a class="ins-ic" style="cursor:pointer">
                        <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
                    </a>


                </div>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row-->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="color: #635e5e;">© 2020 Copyright:Odia Flavours</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->