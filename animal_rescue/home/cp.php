<?php
session_start();
$_SESSION["email"];
$conn = mysqli_connect("localhost", "root", "", "animal_rescue") or die("Connection Error: " . mysqli_error($conn));

if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT *from users WHERE email='" . $_SESSION["email"] . "'");
    $row = mysqli_fetch_array($result);
    if (md5($_POST["password"]) == $row["password"]) {
        mysqli_query($conn, "UPDATE users set password='" . md5($_POST["c_np"]) . "' WHERE email='" . $_SESSION["email"] . "'");
        $message = "Password Changed";
        	header("Location: user.php?success=Your password has been changed successfully");
    } else
        $message = "Current Password is not correct";
    
}
?>