<?php
    $mysqli = mysqli_connect('localhost', 'root', '', 'dataapp3');
    if (mysqli_connect_errno()) {
    	echo "Connect failed: ".mysqli_connect_error();
    	exit;
    }
?>