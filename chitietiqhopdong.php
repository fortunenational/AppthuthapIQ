




<p>Hợp đồng</p>
<?php
    $conn = mysqli_connect("localhost", "root", "", "dataapp3") or die("Không kết nối được cơ sở dữ liệu"); 
    
    if (isset($_GET['idiqhd'])) {
        $keyIQ = $_GET['idiqhd'];
        $sql_chitiet = "SELECT * FROM hopdong JOIN iq ON hopdong.maiqcsdl=iq.maiqcsdl WHERE iq.maiqcsdl = '$keyIQ' ";
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
            <th>Ngày tạo</th>
            <th>Mã iq cơ sở dữ liệu</th>
            <th>Mã iq khách hàng sản phẩm update</th>
            <th>Mã khách hàng</th>
            <th>Trạng thái</th>
            <th>Ngành</th>
            <th>Xuất xứ</th>
            <th>Thời gian cần hàng</th>
            <th>Địa điểm giao hàng loại giá</th>
            <th>Mức độ ưu tiên</th>
          
            
        </tr>
<tr>
    <td><?php echo $row_chitiet['ngaytao'] ?></td>
    <td><?php echo $row_chitiet['maiqcsdl'] ?></td>
    <td><?php echo $row_chitiet['maiqkhspdate'] ?></td>
    <td><?php echo $row_chitiet['makh'] ?></td>
    <td><?php echo $row_chitiet['trangthai'] ?></td>
    <td><?php echo $row_chitiet['nganh'] ?></td>
    <td><?php echo $row_chitiet['xuatsu'] ?></td>
    <td><?php echo $row_chitiet['thoigiancanhang'] ?></td>
    <td><?php echo $row_chitiet['điaiemgiaohangloaigia'] ?></td>
    <td><?php echo $row_chitiet['mucdouutien'] ?></td>
                   
</tr>
<?php } ?>
</table>

</body>
</html>