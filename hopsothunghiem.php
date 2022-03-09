



<?php
    $conn = mysqli_connect("localhost", "root", "", "phptutorials") or die("Không kết nối được cơ sở dữ liệu"); 

    if (isset($_GET['q']) && !empty($_GET['q'])) {
    	$keyword = $_GET['q'];

    	$sql = "SELECT * FROM hopso WHERE id LIKE '%$keyword%' OR masphopsp LIKE '%$keyword%'";
    }else{
    	$sql = "SELECT * FROM hopso";
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
                                    <th>Mã SP Hộp số</th>
                                    <th>Mã NCC</th>
                                    <th>Nhóm SP</th>
                                    <th>Tên SP chi tiết</th>
                                    <th>Ngành</th>
                                    <th>Mô tả Sản phẩm</th>
                                    <th>Mã hiệu</th>
                                    <th>Size</th>
                                    <th>Kiểu</th>
                                    <th>Công suất (Kw)</th>
                                    <th>Tỷ số truyền(X)</th>
                                    <th>Tốc độ đầu vào</th>
                                    <th>Tốc Độ Đầu Ra</th>
                                    <th>Momen xoắn</th>
                                    <th>Vị trí 2 trục (thẳng - song song - vuông góc)</th>
                                    <th>Trục đầu ra (Lồi - lõm)</th>
                                    <th>Đường kính trục vào</th>
                                    <th>Đường kính trục ra</th>
                                    <th>Kiểu lắp (chân đế - mặt pích - kết hợp)</th>
                                    <th>Vị trí lắp</th>
                                    <th>Chiều quay</th>
                                    <th>Tay đòn đầu ra (trái - phải)</th>
                                    <th>Đơn vị tính</th>
		</tr>
		<?php
		   while ($row = mysqli_fetch_assoc($result)) {
		   	?>
   
		<tr>
			<td><?php echo $row['id']; ?></td>
            <td><?php echo $row['masphopsp']; ?></td>
			<td><?php echo $row['mancc']; ?></td>
			<td><?php echo $row['nhomsp']; ?></td>
            <td><?php echo $row['tenspchitiet']; ?></td>
			<td><?php echo $row['nganh']; ?></td>
            <td><?php echo $row['motasanpham']; ?></td>
			<td><?php echo $row['mahieu']; ?></td>
            <td><?php echo $row['tskt1']; ?></td>
			<td><?php echo $row['tskt2']; ?></td>
            <td><?php echo $row['tskt3']; ?></td>
			<td><?php echo $row['tskt4']; ?></td>
			<td><?php echo $row['tskt5']; ?></td>
            <td><?php echo $row['tskt6']; ?></td>
			<td><?php echo $row['tskt7']; ?></td>
            <td><?php echo $row['tskt8']; ?></td>
			<td><?php echo $row['tskt9']; ?></td>
            <td><?php echo $row['tskt10']; ?></td>
			<td><?php echo $row['tskt11']; ?></td>
			<td><?php echo $row['tskt12']; ?></td>
			<td><?php echo $row['tskt13']; ?></td>
			<td><?php echo $row['tskt14']; ?></td>
			<td><?php echo $row['tskt15']; ?></td>
			<td><?php echo $row['donvitinh']; ?></td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>




























