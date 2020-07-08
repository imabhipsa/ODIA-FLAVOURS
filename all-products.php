<?php
//connection
$con = mysqli_connect("localhost", "root", "", "odiaflavours");
// select sql command
$sql = "SELECT * FROM `product`";
// execute above command and store the result in a variable
$res = mysqli_query($con, $sql);
// fetching value from db

?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
</head>

<body>
    <section style="height: 50vh;">
        <?php include('./includes/navbar.php'); ?>

    </section>
    <section class="nv-background">
        <h2 class="nonveg-title">
            All Your Favorite Items at Your Door Step
        </h2>
    </section>
    <!-- main end -->
    <section id="all-items">
        <div class="container">
            <!-- <div class="row"> -->
            <div class="row" id="food_items">
                <?php

                while ($value = mysqli_fetch_assoc($res)) {
                    echo
                        '                    
                        <div class="col-md-4 my-3">
                            <div class="card border-0 shadow" style="width: 100% ;">
                            <img src="' . $value['img'] . '" class="card-img-top" height="210px">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between">
                                <h5 class="card-title">' . $value['name'] . '</h5>
                                <span class="text-span"><i class="fas fa-rupee-sign"></i> ' . $value['price'] . ' </span>
                                </div>
                                <p>' . $value['description'] . '</p>
                                <div class="text-center">  
                                <a href="product-details.php?id=' . $value['id'] . '" class="card-link btn btn-outline-dark">Order Now </a>
                                </div>
                            </div>
                            </div>
                        </div>                        
                        ';
                }
                $name = "gudu";
                echo '<h1>' . $name . '</h1>';
                ?>
            </div>
        </div>
    </section>
    <?php include("includes/footer.php");?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>