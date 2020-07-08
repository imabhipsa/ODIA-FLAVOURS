<?php
session_start();
session_destroy();
?>
<script>
    alert('Logout Successfully');
    location.href = "index.php";
</script>