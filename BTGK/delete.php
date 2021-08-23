<?php
    $conn = mysqli_connect('localhost','root','','dhtl');
    $id = $_GET["id"];
    echo $id;
    $query = "DELETE FROM canbo WHERE IDCanBo=$id";
    $result = mysqli_query($conn, $query);
    header ("location: admin.php");
?>