

<?php
    $conn = mysqli_connect("localhost", "root", "", "phptutorials") or die("Không kết nối được cơ sở dữ liệu"); 

    if (isset($_GET['q']) && !empty($_GET['q'])) {
    	$keyword = $_GET['q'];

    	$sql = "SELECT * FROM users WHERE id LIKE '%$keyword%' OR ngaytao LIKE '%$keyword%' OR maiq LIKE '%$keyword%' OR makhachhang LIKE '%$keyword%' OR khachhang LIKE '%$keyword%' OR nganh LIKE '%$keyword%'";
    }else{
    	$sql = "SELECT * FROM users";
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
	<style type="text/css">
		ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}

table, thead, tr, th {
    border: 1px solid black;
    padding: 10px;

}

		.list{border-collapse: collapse;}  .list tr th{background: #ebebeb;} .list img{width: 32px;} .search-form{position: relative; left: 7%;}
	</style>
</head>
<body> 
	   <ul>
  <li><a href="thunghiem.php">Home</a></li>
  <li><a href="thunghiembanggau.php">Băng gầu</a></li>
  <li><a href="thunghiembangtai.php">Băng tải</a></li>
  <li><a href="hopsothunghiem.php">Hộp số</a></li>
  <li><a href="quatthunghiem.php">Quạt</a></li>                                       
  <li><a href="spducthunghiem.php">Sản phẩm đúc</a></li>
  <li><a href="spkhacthunghiem.php">Sản phẩm khác</a></li>
  <li><a href="tamlotthunghiem.php">Tấm lót</a></li>
  <li><a href="xichtaithunghiem.php">Xích tai</a></li>
  
  <select onchange="la(this.value)">
    <option disabled selected>Danh sách sản phẩm</option>
    <option value="thunghiembanggau.php">băng gâu</option>
    <option value="thunghiembangtai.php">băng tải</option>
    <option value="hopsothunghiem.php">hộp số</option>
    <option value="quatthunghiem.php">quạt</option>
    <option value="spducthunghiem.php">sản phẩm đúc</option>
    <option value="spkhacthunghiem.php">sản phẩm khác</option>
    <option value="tamlotthunghiem.php">tấm lót</option>
    <option value="xichtaithunghiem.php">xích</option>
  </select>

  <script>
    function la(src)
    {
      window.location=src;
    }
  </script>
  <li style="float:right"><a class="active" href="manccthunghiem.php">Nhà cung cấp</a></li>
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
			                        <th>ID</th>
                                    <th>Ngày tạo</th>
                                    <th>Mã IQ</th>
                                    <th>Mã khách hàng</th>
                                    <th>Khách hàng</th>
                                    <th>Trạng thái</th>
                                    <th>Ngành</th>
                                    <th>Mã SP</th>
                                    <th>Nhóm SP</th>
                                    <th>Tên SP chi tiết</th>
                                    <th>Xuất xứ</th>
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
                                    <th>Báo giá 11</th>
                                    <th>Báo giá 12</th>
                                    <th>Báo giá 13</th>
                                    <th>Báo giá 14</th>
		</tr>
		<?php
		   while ($row = mysqli_fetch_assoc($result)) {
		   	?>
   
		<tr>
			<td><?php echo $row['id']; ?></td>
            <td><?php echo $row['ngaytao']; ?></td>
			<td><?php echo $row['maiq']; ?></td>
			<td><?php echo $row['makhachhang']; ?></td>
            <td><?php echo $row['khachhang']; ?></td>
			<td><?php echo $row['trangthai']; ?></td>
			<td><?php echo $row['nganh']; ?></td>
            <td><?php echo $row['masp']; ?></td>
			<td><?php echo $row['nhomsp']; ?></td>
            <td><?php echo $row['tenspchitiet']; ?></td>
			<td><?php echo $row['xuatsu']; ?></td>
            <td><?php echo $row['baogia1']; ?></td>
			<td><?php echo $row['baogia2']; ?></td>
			<td><?php echo $row['baogia3']; ?></td>
            <td><?php echo $row['baogia4']; ?></td>
			<td><?php echo $row['baogia5']; ?></td>
            <td><?php echo $row['baogia6']; ?></td>
			<td><?php echo $row['baogia7']; ?></td>
            <td><?php echo $row['baogia8']; ?></td>
			<td><?php echo $row['baogia9']; ?></td>
			<td><?php echo $row['baogia10']; ?></td>
			<td><?php echo $row['baogia11']; ?></td>
			<td><?php echo $row['baogia12']; ?></td>
			<td><?php echo $row['baogia13']; ?></td>
			<td><?php echo $row['baogia14']; ?></td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>




























