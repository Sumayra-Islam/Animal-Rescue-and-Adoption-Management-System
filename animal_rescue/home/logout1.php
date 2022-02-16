<?php

    session_start();

    unset($_SESSION['email']);
    session_destroy();

    echo "<script>window.location.assign('admin.php');</script>";
?>