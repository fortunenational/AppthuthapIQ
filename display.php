<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "phptutorials";

    $conn=mysqli_connect($servername,$username,$password,$database);

    $sql = "select * from chitietsanpham";

    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_assoc($result);

    print_r($row);
?>