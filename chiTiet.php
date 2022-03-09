<p>Chi tiết IQ</p>
<?php
    $conn = mysqli_connect("localhost", "root", "", "dataapp3") or die("Không kết nối được cơ sở dữ liệu"); 
    if (isset($_GET['idSP'])) {
    	$keyIQ = $_GET['idSP'];
    	$sql_chitiet = "SELECT * FROM sanpham JOIN chitietiq ON sanpham.masp=chitietiq.masp WHERE chitietiq.masp = '$keyIQ' ";
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
            <th>Mã iq csdl</th>
            <th>Mã sản phẩm</th>
            <th>Nhóm SP</th>
            <th>Đơn vị tính</th>
            <th>Số lượng</th>
            <th>Gía dự toán</th>
            <th>Gía mục tiêu của sale</th>
            <th>Gía chốt của khách</th>
            <th>Gía min</th> 
            <th>Báo giá 1</th>
            <th>Báo giá 2</th>
            <th>Báo giá 3</th>
            <th>Báo giá 4</th>
            <th>Báo giá 5</th>
            <th>Báo giá 6</th>
            <th>Báo giá 7</th>
            <th>Báo giá 8</th>
            <th>Báo giá 9</th>
            <th>Báo giá 10</th>
        </tr>
<tr>
	<td><?php echo $row_chitiet['maiqcsdl'] ?></td>
	<td><?php echo $row_chitiet['masp'] ?></td>
	<td><?php echo $row_chitiet['nhomsp'] ?></td>
	<td><?php echo $row_chitiet['donvitinh'] ?></td>
	<td><?php echo $row_chitiet['soluong'] ?></td>
	<td><?php echo $row_chitiet['giadutoan'] ?></td>
	<td><?php echo $row_chitiet['giamuctieucuasale'] ?></td>
	<td><?php echo $row_chitiet['giachotcuakh'] ?></td>
	<td><?php echo $row_chitiet['giamin'] ?></td>
	<td><?php echo $row_chitiet['baogia1'] ?></td>
	<td><?php echo $row_chitiet['baogia2'] ?></td>
	<td><?php echo $row_chitiet['baogia3'] ?></td>
	<td><?php echo $row_chitiet['baogia4'] ?></td>
	<td><?php echo $row_chitiet['baogia5'] ?></td>
	<td><?php echo $row_chitiet['baogia6'] ?></td>
    <td><?php echo $row_chitiet['baogia7'] ?></td>
	<td><?php echo $row_chitiet['baogia8'] ?></td>
	<td><?php echo $row_chitiet['baogia9'] ?></td>
	<td><?php echo $row_chitiet['baogia10'] ?></td>
</tr>
<?php } ?>
</table>

</body>
</html>