<?php
    session_start();
    extract($_REQUEST);
    if ($password == $cpassword) {
        $con = mysqli_connect("localhost", "root", "", "odiaflavours");
        $sql = "INSERT INTO `users`(`email`, `password`) VALUES ('$email','$password')";
        $res = mysqli_query($con, $sql);
        if ($res) {
        $_SESSION['value'] = 'root';
            echo
                '
                <script>
                alert("Your Account created Successfully!");
                location.href = "../index.php";
                </script>
            ';
        }
    } else{
        echo
            '
                <script>
                alert("Both passwords should be same");
                location.href = "../registration.php";
                </script>
            ';
    }

