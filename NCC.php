<p>Nhà cung cấp</p>


<?php
    $conn = mysqli_connect("localhost", "root", "", "dataapp3") or die("Không kết nối được cơ sở dữ liệu"); 
    if (isset($_GET['idSPncc'])) {
    	$keyIQ = $_GET['idSPncc'];
    	$sql_chitiet = "SELECT * FROM sanpham JOIN ncc ON  sanpham.mancc=ncc.mancc WHERE ncc.mancc = '$keyIQ' ";
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
            <th>Mã nhà cung câp</th>
            <th>Tên nhà cung cấp</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Website</th>
            <th>Thông tin người liên lạc 1</th>
            <th>Thông tin người liên lạc 2</th>
            <th>Thông tin người liên lạc 3</th> 
            <th>Thông tin người liên lạc 4</th>
            <th>NOTE</th>
            <th>LEVEL</th>

            <th>Tên người phụ trách</th>
        </tr>
<tr>
	<td><?php echo $row_chitiet['mancc'] ?></td>
	<td><?php echo $row_chitiet['tenncc'] ?></td>
	<td><?php echo $row_chitiet['SĐT'] ?></td>
	<td><?php echo $row_chitiet['Email'] ?></td>
	<td><?php echo $row_chitiet['diachi'] ?></td>
	<td><?php echo $row_chitiet['Website'] ?></td>
	<td><?php echo $row_chitiet['thongtinnguoilienlac1'] ?></td>
	<td><?php echo $row_chitiet['thongtinnguoilienlac2'] ?></td>
	<td><?php echo $row_chitiet['thongtinnguoilienlac3'] ?></td>
	<td><?php echo $row_chitiet['thongtinnguoilienlac4'] ?></td>
	<td><?php echo $row_chitiet['NOTE'] ?></td>
	<td><?php echo $row_chitiet['LEVEL'] ?></td>

	<td><?php echo $row_chitiet['tennguoiphutrach'] ?></td>
</tr>
<?php } ?>
</table>

</body>
</html>