<!doctype html>
<html lang="en">

<head>
    <title>Order Details</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="bg-light py-5">
    <main class=" row">
        <div class="col-md-8 m-auto">
            <h1 class="text-warning text-center">ADMIN PANEL</h1>
            <h3 class="my-5 text-center">Order Details</h3>
            <table class="table table-striped">
                <thead class="thead-inverse">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Product</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // check for login

                    session_start();
                    $email = $_REQUEST['email'];
                    $password = $_REQUEST['password'];

                    $con = mysqli_connect("localhost", "root", "", "odiaflavours");

                    $login_sql = "SELECT * FROM `admin` WHERE `name`='$email' AND `password`='$password'";
                    $login_res = mysqli_query($con, $login_sql);
                    $login_num = mysqli_num_rows($login_res);

                    if ($login_num == 0) {
                        echo '
                            <script>
                                alert("No Account Found.Please Create First..");
                                location.href= "./index.php";
                            </script>
                        ';
                    } 




                    $sql = "SELECT * FROM order_table INNER JOIN product ON order_table.order_id=product.id";
                    $res = mysqli_query($con, $sql);
                    $num = mysqli_num_rows($res);
                    while ($row = mysqli_fetch_array($res)) {
                    ?>
                        <tr>
                            <td scope="row"><?= $row[0] ?></td>
                            <td><?= $row[1] ?></td>
                            <td><?= $row[2] ?></td>
                            <td><?= $row[3] ?></td>
                            <td><?= $row[4] ?></td>
                            <td><?= $row[7] ?></td>
                            <td><i class="fas fa-rupee-sign"></i><?= $row[9] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>