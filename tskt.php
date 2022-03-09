




<?php
    $conn = mysqli_connect("localhost", "root", "", "dataapp") or die("Không kết nối được cơ sở dữ liệu"); 

    if (isset($_GET['q']) && !empty($_GET['q'])) {
        $keyword = $_GET['q'];

        $sql = "SELECT * FROM tentskt WHERE idtskt LIKE '%$keyword%' OR ten LIKE '%$keyword%' OR nhomsp LIKE '%$keyword%'";
    }else{
        $sql = "SELECT * FROM tentskt ";
    }

    

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Câu truy vấn sai");
    }

 
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
   

        .list{border-collapse: collapse;}  .list tr th{background: #ebebeb;} .list img{width: 32px;} 
    </style>
</head>
<body> 
     <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="">Các loại sản phẩm</a>
            <ul>
                <li><a href="banggau.php">Băng gầu</a></li>
                <li><a href="bangtai.php">Băng tải</a></li>
                <li><a href="hopso.php">Hộp số</a></li>
                <li><a href="quat.php">Quạt</a></li>
                <li><a href="xichtai.php">Xích tai</a></li>
                <li><a href="spduc.php">Sản phẩm đúc</a></li>
                <li><a href="spkhac.php">Sản phẩm khác</a></li>
                <li><a href="tamlot.php">Tấm lót</a></li>                
            </ul>
        </li>
        <li><a href="">Admin</a>
            <ul>
                <li><a href="adminiq.php">Trang quản trị</a></li>
                <li><a href="tskt.php">Thông số kỹ thuật</a></li>
                
            </ul>
        </li>

        <li><a href="iq.php">Iq</a></li>
        <li><a href="hopdong.php">Hợp đông</a></li>

    </ul> 
    
    <table class="search-form" cellpadding="10">
        <tr>
            <td>
                <form action="" method="get">
                    <input type="text" name="q" placeholder="Nhập từ khóa cần tìm" value="<?php if(isset($_GET['q']))?>" />
                    <input type="submit" value="Tìm">
                    
                </form>
            </td>
        </tr>
    </table>
    <table class="list" border="1" cellpadding="10">
          <tr>
            <th>Id tskt</th>
            <th>Tên</th>
            <th>Nhóm SP</th>
           
            
        </tr>
        <?php
           while ($row = mysqli_fetch_assoc($result)) {
            ?>
   
        <tr>
            <td><?php echo $row['idtskt']; ?></td>
            <td><?php echo $row['ten']; ?></td>
            <td><?php echo $row['nhomsp']; ?></td>
          
                        <form action="" method="get">
            <td><a href="./chiTiettskt.php?idKT=<?php echo  $row['idtskt'] ?>" >Xem chi tiết</a></td>
        </form>
            
        </tr>
    <?php } ?>
    </table>
</body>
</html>