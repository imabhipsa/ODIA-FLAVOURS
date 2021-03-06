<!doctype html>
<html lang="en">

<head>
    <title>login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>

<body>
    <!-- main -->
    <section style="margin-bottom: 89vh;">
        <?php include('./includes/navbar.php'); ?>

    </section>
    <section class="log-background">
        <div class="box">
            <!-- <img src="images/banners/icons8-male-user-96.png" class="userimage"> -->
            <h1>Login to your Account</h1>
            <p class="text-center">or<a href="registration.php" class="text-warning "> Create an Account</a></p>

            <form action="db/loginCtrl.php" method="POST">
                Email:<input type="email" name="email" placeholder="Enter Email">
                Password:<input type="password" name="password" placeholder="Enter Password" id="myInput">
                <span class="eye" onclick="myFunction()">
                    <i id="hide1" class="fas fa-eye"></i>
                    <i id="hide2" class="fas fa-eye-slash"></i>
                </span>

                <input type="submit" name="" value="Login">
                <a href="" style="float: left;">Forget Password</a>
                <a href="registration.php" style="float:right;">Create Account</a>
            </form>
        </div>


        <script>
            function myFunction() {
                var x = document.getElementById('myInput');
                var y = document.getElementById('hide1');
                var z = document.getElementById('hide2');

                if (x.type === 'password') {
                    x.type = 'text';
                    y.style.display = "block";
                    z.style.display = "none";
                } else {
                    x.type = 'password';
                    y.style.display = "none";
                    z.style.display = "block";
                }
            }
        </script>
    </section>


    <!-- main end -->
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>