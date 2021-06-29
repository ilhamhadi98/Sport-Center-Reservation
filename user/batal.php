<?php
// include database connection file
include_once("koneksi.php");


if (isset($_GET['id'])){

    $id = $_GET['id'];
    $s = "Dibatalkan";

    // Fetch all users data from database
    $sql = "UPDATE reservation SET status='$s' WHERE id='$id'";
    $result = mysqli_query($mysqli, $sql) or die (mysqli_error($mysqli));

    echo "<script language='javascript'>alert('Reservasi dibatalkan !')</script>";
    echo "<script>document.location='more.php';</script>";

    }
?>