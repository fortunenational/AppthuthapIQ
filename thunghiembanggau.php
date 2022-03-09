

<?php
    $conn = mysqli_connect("localhost", "root", "", "phptutorials") or die("Không kết nối được cơ sở dữ liệu"); 

    if (isset($_GET['q']) && !empty($_GET['q'])) {
    	$keyword = $_GET['q'];

    	$sql = "SELECT * FROM banggau WHERE id LIKE '%$keyword%' OR maspbg LIKE '%$keyword%' OR mancc LIKE '%$keyword%' OR nhomsp LIKE '%$keyword%'";
    }else{
    	$sql = "SELECT * FROM banggau";
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
                                    <th>Mã SP Băng gầu</th>
                                    <th>Mã NCC</th>
                                    <th>Nhóm SP</th>
                                    <th>Tên SP chi tiết</th>
                                    <th>Ngành</th>
                                    <th>Chiều dài băng / Total length</th>
                                    <th>Chiều rộng băng / Width</th>
                                    <th>Chiều dày / Thickness</th>
                                    <th>Chiều dày / Thickness</th>
                                    <th>Lớp cao su dưới / Bottom cover thickness</th>
                                    <th>Đường kính cáp thép / Cord diameter</th>
                                    <th>Bước cáp / Cord pitch</th>
                                    <th>Số sợi cáp / Number of cords</th>
                                    <th>Kết nối / Cord construction</th>
                                    <th>Cường lực băng/ Tensile strength belt</th>
                                    <th>Cường lực băng/ Tensile strength</th>
                                    <th>Độ giãn dài giới hạn / Elongation of break</th>
                                    <th>Độ cứng / Hardness</th>
                                    <th>Độ chịu mài mòn / Abrasion resistance</th>
                                    <th>Nhiệt độ /Temp</th>
                                    <th>Đường kính lỗ bắt gầu</th>
                                    <th>Khoảng cách lỗ bắt gầu</th>
                                    <th>Số lỗ bắt gầu</th>
                                    <th>Bước gầu</th>
                                    <th>Số gầu</th>
                                    <th>Khối lượng gầu</th>
                                    <th>Năng suất</th>
                                    <th>Tốc độ băng</th>
                                    <th>Công suất</th>
                                    <th>Khối lượng băng</th>
                                    <th>Tiêu chuẩn</th>
                                    <th>Đơn vị tính</th>
		</tr>
		<?php
		   while ($row = mysqli_fetch_assoc($result)) {
		   	?>
   
		<tr>
			<td><?php echo $row['id']; ?></td>
            <td><?php echo $row['maspbg']; ?></td>
			<td><?php echo $row['mancc']; ?></td>
			<td><?php echo $row['nhomsp']; ?></td>
            <td><?php echo $row['tenspchti']; ?></td>
			<td><?php echo $row['nganh']; ?></td>
			
		</tr>
	<?php } ?>
	</table>
</body>
</html>


















