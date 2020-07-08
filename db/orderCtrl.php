<?php
    extract($_REQUEST);
    $con = mysqli_connect("localhost","root","","odiaflavours");
    $sql="INSERT INTO `order_table`(`name`, `mobile`, `email`, `address`, `order_id`) VALUES ('$name','$mobile','$email','$address','$id')";
    $res =mysqli_query($con,$sql);

    if ($res) {
        echo 
        '
            <script>
            alert("Your Order Confirmed.ThankYou!");
            location.href = "../index.php";
            </script>
        ';
    }

?>