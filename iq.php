





<?php
    $conn = mysqli_connect("localhost", "root", "", "dataapp3") or die("Không kết nối được cơ sở dữ liệu"); 

    if (isset($_GET['q']) && !empty($_GET['q'])) {
        $keyword = $_GET['q'];

        $sql = "SELECT * FROM iq WHERE ngaytao LIKE '%$keyword%' OR maiqcsdl LIKE '%$keyword%' OR maiqkhspdate LIKE '%$keyword%' OR makh LIKE '%$keyword%' OR trangthai LIKE '%$keyword%' OR nganh LIKE '%$keyword%' OR xuatsu LIKE '%$keyword%'";
    }else{
        $sql = "SELECT * FROM iq";
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
            <th>Ngày tạo</th>
            <th>Mã iq cơ sở dữ liệu</th>
            <th>Mã iq khách hàng sản phẩm date</th>
            <th>Mã khách hàng</th>
            <th>Trạng thái</th>
            <th>Ngành</th>
            <th>Xuất sứ</th>
            <th>Thời gian cần hàng</th>
            <th>Địa điểm giao hàng loại giá</th>
            <th>Mức đô ưu tiên</th>
            <th>Khách hàng</th>
            <th>Chi tiết iq</th>
            <th>Xem hợp đồng</th>
            <th>Update</th>
        </tr>
        <?php
           while ($row = mysqli_fetch_assoc($result)) {
            ?>
   
        <tr>
            <td><?php echo $row['ngaytao']; ?></td>
            <td><?php echo $row['maiqcsdl']; ?></td>
            <td><?php echo $row['maiqkhspdate']; ?></td>
            <td><?php echo $row['makh']; ?></td>
            <td><?php echo $row['trangthai']; ?></td>
            <td><?php echo $row['nganh']; ?></td>
            <td><?php echo $row['xuatsu']; ?></td>
            <td><?php echo $row['thoigiancanhang']; ?></td>
            <td><?php echo $row['điaiemgiaohangloaigia']; ?></td>
            <td><?php echo $row['mucdouutien']; ?></td>
            <form action="" method="get">
            <td><a href="./chiTietkhachhang.php?idKH=<?php echo  $row['makh'] ?>" >Xem khách hàng</a></td>
        </form>
        <form action="" method="get">
            <td><a href="./chiTietiq.php?idiq=<?php echo  $row['maiqcsdl'] ?>" >Xem chi tiết iq</a></td>
        </form>

                  <form action="" method="get">
            <td><a href="./hopdong.php?idhd=<?php echo  $row['makh'] ?>" >Xem hợp đồng</a></td>
        </form>      
        <td><a href="edit_user.php?id=<?php echo $row['maiqcsdl']; ?>">Edit</a></td>        
        </tr>
    <?php } ?>
    </table>
</body>
</html>