<?php
include('dblong.php');
if(isset($_GET['id']) && $_GET['id']>0 && isset($_GET['t']) && $_GET['t']!=''){
    $id=mysqli_real_escape_string($con,$_GET['id']);
    $t=mysqli_real_escape_string($con,$_GET['t']);
    if($t=="news"){
        $sql="select id, mancc, tenncc, sdt, email, diachi, website, ttngll1, ttngll2, ttngll3, ttngll4, note,  level, oldnote, feedbackdonhadnh, catalo,   referen, roc,   tds, oem, tdph,  ntdph, details from news where id='$id'";
    }else{
        header('location:quat.php');
        die();
    }

    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0){
        $row=mysqli_fetch_assoc($res);
        echo "<h2>".$row['mancc']."</h2>";
        echo "<h2>".$row['tenncc']."</h2>";
        echo "<h2>".$row['sdt']."</h2>";
        echo "<h2>".$row['email']."</h2>";

        echo "<h2>".$row['diachi']."</h2>";
        echo "<h2>".$row['website']."</h2>";

        echo "<h2>".$row['ttngll1']."</h2>";

        echo "<h2>".$row['ttngll2']."</h2>";
        echo "<h2>".$row['ttngll3']."</h2>";
        echo "<h2>".$row['ttngll4']."</h2>";
        echo "<h2>".$row['note']."</h2>";
        echo "<h2>".$row['level']."</h2>";
        echo "<h2>".$row['oldnote']."</h2>";

        echo "<h2>".$row['feedbackdonhadnh']."</h2>";

        echo "<h2>".$row['catalo']."</h2>";
        echo "<h2>".$row['referen']."</h2>";

        echo "<h2>".$row['roc']."</h2>";

        echo "<h2>".$row['tds']."</h2>";

        echo "<h2>".$row['oem']."</h2>";
        echo "<h2>".$row['tdph']."</h2>";
        echo "<h2>".$row['ntdph']."</h2>";

        echo "<p>".$row['details']."</p>";
        echo "<a href='index.php'>Back</a>";
    }else{
        header('location:quat.php');
        die();
    }
}
?>   