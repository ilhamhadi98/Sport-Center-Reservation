<?php
// include database connection file
include_once("connect.php");


if (isset($_GET['id'])){

    $id = $_GET['id'];
    $s = "Disetujui";

    // Fetch all users data from database
    $sql = "UPDATE reservation SET status='$s' WHERE id='$id'";
    $result = mysqli_query($mysqli, $sql) or die (mysqli_error($mysqli));

    echo "<script language='javascript'>alert('Reservasi telah di approve !')</script>";
    echo "<script>document.location='reservation.php';</script>";

    }
?>