






<?php
    $conn = mysqli_connect("localhost", "root", "", "dataapp3") or die("Không kết nối được cơ sở dữ liệu"); 

    if (isset($_GET['q']) && !empty($_GET['q'])) {
        $keyword = $_GET['q'];

        $sql = "SELECT * FROM hopdong WHERE mahopdong LIKE '%$keyword%' OR congty LIKE '%$keyword%' OR ngaykyhdban LIKE '%$keyword%' OR ngaykyhdmua LIKE '%$keyword%'";
    }else{
        $sql = "SELECT * FROM hopdong";
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
            <th>Mã hợp đồng</th>
            <th>Mã iq cơ sở dữ liệu</th>
            <th>Công ty</th>
            <th>ngày ký hợp đồng bán</th>
            <th>Mã hợp đồng mua</th>
            <th>Ngày ký hợp đồng mua</th>
            <th>Mã khách hàng</th>
            <th>Saler</th>
            <th>Chi tiết hợp đồng</th>
            <th>Iq</th>
            
        </tr>
        <?php
           while ($row = mysqli_fetch_assoc($result)) {
            ?>
   
        <tr>
            <td><?php echo $row['mahopdong']; ?></td>
            <td><?php echo $row['maiqcsdl']; ?></td>
            <td><?php echo $row['congty']; ?></td>
            <td><?php echo $row['ngaykyhdban']; ?></td>
            <td><?php echo $row['mahdmua']; ?></td>
            <td><?php echo $row['ngaykyhdmua']; ?></td>
            <td><?php echo $row['makh']; ?></td>
            <td><?php echo $row['Saler']; ?></td>
            <form action="" method="get">
            <td><a href="./chitiethopdong.php?idhd=<?php echo  $row['mahopdong'] ?>" >Xem chi tiết</a></td>
        </form>
          <form action="" method="get">
            <td><a href="./chitietiqhopdong.php?idiqhd=<?php echo  $row['maiqcsdl'] ?>" >Xem chi tiết</a></td>
        </form>
        
        </tr>
    <?php } ?>
    </table>
</body>
</html>







