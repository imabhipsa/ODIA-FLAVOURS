<?php
$item = $_REQUEST['item'];
?>
<!doctype html>
<html lang="en">

<head>
    <title>Order</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product-details.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>

<body>
    <!-- main -->
    <section style="margin-bottom: 45vh;">
        <?php include('./includes/navbar.php'); ?>

    </section>
    <section class="log-background">
        <div class="box">
            <section id="order" class="py-5">
                <!-- Product Details -->
                <?php
                $con = mysqli_connect("localhost", "root", "", "odiaflavours");
                $sql = "SELECT * FROM `product` WHERE name LIKE '%$item%' LIMIT 1";
                $res = mysqli_query($con, $sql);
                $num = mysqli_num_rows($res);
                if ($num == 0) {
                    echo '
                            <h1 class="text-center my-5 text-white pt-5">Sorry! No<span> Item</span> found</h1>                        
                        ';
                } else {
                    echo '
                            <h1 class="text-center  text-white pt-5">Wow! It\'s<span> Yummy!</span> </h1>
                        ';
                }
                while ($val = mysqli_fetch_assoc($res)) {
                ?>
                    <div class="container item py-4">
                        <div class="row bg-warning">
                            <div class="col-md-6 item-image">
                                <img src=" <?= $val['img'] ?>" width="100%" height="80%">
                            </div>
                            <div class="col-md-6  text-center item-name p-4">
                                <h3 class="text-capitalize"> <?= $val['name'] ?> </h3>
                                <span>
                                    <i class="fas fa-rupee-sign    "></i> <?= $val['price'] ?>
                                </span>
                                <p class="text-capitalize lead py-4">
                                    Category: <?= $val['category'] ?>
                                </p>
                                <div class=" order-btn">
                                    <?php

                                    if (isset($_SESSION['value'])) {
                                        echo '
                                                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                                                    ORDER NOW
                                                    <i class="fas fa-arrow-right"></i>
                                                </button>
                                                ';
                                    } else {
                                        echo '
                                                <a href="login.php" class="btn">
                                                    Please login to Order.
                                                    <i class="fas fa-arrow-right"></i>
                                                </a>
                                                ';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                    <?php
                }
                    ?>

                    <!-- End -->
                    </div>

            </section>

        </div>
    </section>
    <!-- order details -->
    <!-- modal  -->
    <?php
    $res = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($res)) {
        echo '
            <div class="modal fade" id="exampleModal">
                <div class="modal-dialog">
                    <form action="db/orderCtrl.php" method="post" class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title text-capitalize" id="exampleModalLabel">' . $row['name'] . '</h3>
                            <button type="button" class="btn border-none" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <div class="form-group">
                                    Name<input name="name" type="text" class="form-control shadow ">
                                </div>
                                <div class="form-group">
                                    Mobile no<input  name="mobile" type="text" class="form-control shadow">
                                </div>
                                <div class="form-group">
                                    Email<input name="email" type="email" class="form-control shadow">
                                </div>
                                <div class="form-group">
                                    Address<textarea  name ="address" class="form-control shadow" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer order-btn">
                            <input type="hidden" value="' . $row['id'] . '" name="id">
                            <button type="submit" class="btn btn-warning large"> Confirm Order</button>
                        </div>
                    </form>
                </div>
            </div>
   
            ';
    }
    ?>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Custom Js -->
</body>

</html>