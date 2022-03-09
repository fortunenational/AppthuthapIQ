<p>Chi tiết thông số kỹ thuật</p>

<?php
    $conn = mysqli_connect("localhost", "root", "", "dataapp3") or die("Không kết nối được cơ sở dữ liệu"); 
    if (isset($_GET['idSPKT'])) {
    	$keyIQ = $_GET['idSPKT'];
    	$sql_chitiet = "SELECT * FROM sanpham INNER JOIN  chitiettskt ON sanpham.masp = chitiettskt.masp  WHERE chitiettskt.masp = '$keyIQ'  ";
        $sql_chitiet = "SELECT * FROM tentskt INNER JOIN  chitiettskt ON tentskt.idtskt = chitiettskt.idtskt  WHERE chitiettskt.masp = '$keyIQ'  ";
                                              
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
          	<th>Mã sản phẩm</th>
            <th>Tên</th>
            <th>Gía trị</th>
          
        </tr>
<tr>
	<td><?php echo $row_chitiet['masp'] ?></td>
	<td><?php echo $row_chitiet['ten'] ?></td>
	<td><?php echo $row_chitiet['giatri'] ?></td>

</tr>
<?php } ?>
</table>

</body>
</html>