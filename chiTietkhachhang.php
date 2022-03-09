
<p>Chi tiết Khách hàng</p>
<?php
    $conn = mysqli_connect("localhost", "root", "", "dataapp3") or die("Không kết nối được cơ sở dữ liệu"); 
    
    if (isset($_GET['idKH'])) {
    	$keyIQ = $_GET['idKH'];
    	$sql_chitiet = "SELECT * FROM iq  JOIN  khachhang ON iq.makh=khachhang.makh WHERE khachhang.makh = '$keyIQ'";
    }
    
    $result = mysqli_query($conn,$sql_chitiet);
    while ($row_chitiet = mysqli_fetch_assoc($result)) {
?>

<!DOCTYPE html>
<html>
<head>
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
      <table class="list" border="1" cellpadding="10">
          <tr>
            <th>Mã khách hàng</th>
            <th>Tên khách hàng nhà cung cấp</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Người quản lý</th>
            <th>Thảo luận</th>
            <th>Phân loại</th>
            <th>Mức độ tiềm năng</th> 

            <th>Danh xưng</th>
            <th>Số hợp đồng</th>
            <th>Xem hợp đồng</th>
            
        </tr>
<tr>
	<td><?php echo $row_chitiet['makh'] ?></td>
	<td><?php echo $row_chitiet['tenkhachhangnhacc'] ?></td>
	<td><?php echo $row_chitiet['sodienthoai'] ?></td>
	<td><?php echo $row_chitiet['Email'] ?></td>
	<td><?php echo $row_chitiet['diachi'] ?></td>
	<td><?php echo $row_chitiet['nguoiquanly'] ?></td>
	<td><?php echo $row_chitiet['thaoluan'] ?></td>
	<td><?php echo $row_chitiet['phanloai'] ?></td>
	<td><?php echo $row_chitiet['mucdotiemnang'] ?></td>

    <td><?php echo $row_chitiet['danhxung'] ?></td>
	<td><?php echo $row_chitiet['sohopdong'] ?></td>
                  <form action="" method="get">
            <td><a href="./hopdong.php?idhd=<?php echo  $row['mancc'] ?>" >Xem chi tiết</a></td>
        </form>  
</tr>
<?php } ?>
</table>

</body>
</html>