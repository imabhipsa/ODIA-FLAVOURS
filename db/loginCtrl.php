<?php
session_start();
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$con = mysqli_connect("localhost", "root", "", "odiaflavours");

$sql = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
$res = mysqli_query($con, $sql);
$num = mysqli_num_rows($res);

if ($num == 0) {
    echo '
            <script>
                alert("No Account Found.Please Create First..");
                location.href= "../registration.php";
            </script>
        ';
} else {
    $_SESSION['value'] = 'root';
    echo '
            <script>
                alert("Welcome!!Press OK to Continue.");
                location.href= "../index.php";
            </script>
        ';
}
