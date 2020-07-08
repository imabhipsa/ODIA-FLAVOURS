<!doctype html>
<html lang="en">

<head>
    <title>OdiaFlavours</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

</head>




<body>
    <!-- main -->
    <section id="main" class="hero">
       <?php include('./includes/navbar.php'); ?>

        <div class="banner-title text-center">
            <h2>Hungry <span class="">?!<br> Good,</span> <br>We are here to <span>Serve</span>You...</h2>
        </div>
        <!-- search bar -->
        <div class="search_bar">
            <div class="search">
                <form action="search-result.php" method="POST">
                    <input type="text" name="item" placeholder="Type..." class="search-items animated bounceInLeft slow " style="animation-delay: 0.25s">
                    <input type="submit" value="Search" class="search-btn animated bounceInRight slow" style="animation-delay: 0.25s">
                </form>
            </div>

        </div>
        <!-- search bar end  -->

    </section>
    <!-- main end -->



    <!-- welcome -->
    <section id="welcome">
        <div class="container welcome">
            <div class="para">
                <h1>eat <span>organic</span> live <span>better</span></h1>
                <p class="text-justify lead">
                    <span>W</span>e provides pure authentic odia foods.some of them with slight
                    western touch to change your taste.Our recipes are tasty
                    and healthy like any other odia dishes. <br>
                    by clicking the button below you can get the taste of odisha at your doorstep.
                </p>
                <a href="./all-products.php" class="btn  btn-outline-dark text-uppercase">
                    view all
                </a>
            </div>
            <div class="side-image">
                <img src="images/banners/bowl.jpg">
            </div>
        </div>
    </section>
    <!-- welcome end -->


    <!-- working -->

    <section id="work" class="py-5 work">
        <h2 class="text-center display-4 py-5">HOW IT <span> WORKS</span> </h2>
        <div class="container-fluid  row">
            <div class="col-md-4 py-4 text-center">
                <img src="http://madang.kenzap.com/wp-content/themes/madang-child/images/meal.svg" width="200px">
                <h1 class="text-capitalize pt-3 text-warning">choose your favorite</h1>

                <h4 class="text-center text-justify">Choose your Favorite meals & order <br> online or by phone. <br>
                    It's easy to customize your Order.
                </h4>
            </div>
            <div class="col-md-4 py-4 text-center">
                <img src="http://madang.kenzap.com/wp-content/themes/madang-child/images/delivery.svg" width="200px">
                <h1 class="text-capitalize pt-3 text-warning">We delivered Your meal</h1>

                <h4 class="text-center">Get your food delivered at your door <br> & pay cash on delivery. </h4>

            </div>
            <div class="col-md-4 py-4 text-center">
                <img src="http://madang.kenzap.com/wp-content/themes/madang-child/images/eat-enjoy.svg" width="200px">
                <h1 class="text-capitalize pt-3 text-warning">eat and enjoy</h1>
                <h4 class="text-center">We serves authentic odia dishes. <br> Unwrap the pack and enjoy with your <br>
                    family and friends. </h4>

            </div>
        </div>
    </section>

    <!-- working end -->

    <!-- MENU -->
    <section id="menu">
        <div class="container py-5">
            <h2 class="text-center  display-4 pb-5 text-dark">MENU</h2>
            <div class="row" id="food_items">
                <div class="col-md-4 my-3">
                    <div class="card border-0 shadow" style="width: 100%; height: 65vh;">
                        <img src="images/category/veg.jpg" class="card-img-top" height="210px">
                        <div class="card-body p-4">
                            <!-- <div class="d-flex text-center"> -->
                            <h5 class="card-title text-center">Veg</h5>
                            <!-- <span class="text-span"><i class="fas fa-rupee-sign"></i> 400 </span> -->

                            <!-- </div> -->
                            <p class="card-text text-justify">This is going to be bliss if you are a pure vegetarian.You can enjoy authentic odia foods from our
                                special veg menu section. </p>
                        </div>
                        <div class="card-body text-center">
                            <a href="veg.php" class="card-link btn btn-outline-dark">Show more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card border-0 shadow" style="width: 100%; height: 65vh;">
                        <img src="images/category/nonveg.jpg" class="card-img-top" height="210px">
                        <div class="card-body p-4">
                            <!-- <div class="d-flex text-center"> -->
                            <h5 class="card-title text-center">Non Veg</h5>
                            <!-- <span class="text-span"><i class="fas fa-rupee-sign"></i> 400 </span> -->

                            <!-- </div> -->
                            <p class="card-text text-justify">Don't wait for your favorite Non veg items.You can find all tasty odia style
                                non veg recipes by clicking the button below.
                            </p>
                        </div>
                        <div class="card-body text-center">
                            <a href="non-veg.php" class="card-link btn btn-outline-dark">Show more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card border-0 shadow" style="width: 100%; height: 65vh;">
                        <img src=" images/category/fastfood.jpg" class="card-img-top" height="210px">
                        <div class="card-body p-4">
                            <!-- <div class="d-flex text-center"> -->
                            <h5 class="card-title text-center">Fast Food</h5>
                            <!-- <span class="text-span"><i class="fas fa-rupee-sign"></i> 400 </span> -->

                            <!-- </div> -->
                            <p class="card-text">It's not only Fast Food,it's our best kind of odia fast foods that must be
                                loved don't miss to pick your favorite one.
                            </p>
                        </div>
                        <div class="card-body text-center">
                            <a href="fast-food.php" class="card-link btn btn-outline-dark">Show more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MENU END -->
    <!-- footer -->
    <?php
        include('includes/footer.php');
    ?>
    <!-- footer end -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- javascript -->
    <script>
        var icon = document.querySelector(".icon");
        var close = document.querySelector(".close");
        var navLink = document.querySelector(".nav-links");
        icon.addEventListener("click", () => {
            navLink.style.display = "block";
        });
    </script>
    <!-- js end -->
</body>

</html>