


<?php
    $conn = mysqli_connect("localhost", "root", "", "phptutorials") or die("Không kết nối được cơ sở dữ liệu"); 

    if (isset($_GET['q']) && !empty($_GET['q'])) {
    	$keyword = $_GET['q'];

    	$sql = "SELECT * FROM bangtai WHERE id LIKE '%$keyword%' OR maspbangtai LIKE '%$keyword%' OR mancc LIKE '%$keyword%' OR nhomsp LIKE '%$keyword%'";
    }else{
    	$sql = "SELECT * FROM bangtai";
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
                                    <th>Mã SP Băng tải</th>
                                    <th>Mã NCC</th>
                                    <th>Nhóm SP</th>
                                    <th>Tên SP chi tiết</th>
                                    <th>Ngành</th>
                                    <th>Mô tả Sản phẩm</th>
                                    <th>Chiều dài băng (m)</th>
                                    <th>Chiều rộng băng (mm)</th>
                                    <th>Cường lực băng (N/m)</th>
                                    <th>Số lớp bố</th>
                                    <th>Cường lực 1 lớp bố</th>
                                    <th>Cường lực mặt băng (mPa)</th>
                                    <th>Độ dãn dài (%)</th>
                                    <th>Độ cứng</th>
                                    <th>Chiều dày băng (mm)</th>
                                    <th>Chiều dày lớp cao su trên (mm)</th>
                                    <th>Chiều dày lớp cao su dưới (mm)</th>
                                    <th>Độ mài mòn</th>
                                    <th>Nhiệt độ liệu (°C)</th>
                                    <th>Nhiệt độ liên tục của liệu (°C)</th>
                                    <th>Nhiệt độ cao nhất của liệu (°C)</th>
                                    <th>Công suất (tấn/h)</th>
                                    <th>Vật liệu tải</th>
                                    <th>Kích thước vật liệu (mm)</th>
                                    <th>Đơn vị tính</th>
		</tr>
		<?php
		   while ($row = mysqli_fetch_assoc($result)) {
		   	?>
   
		<tr>
			<td><?php echo $row['id']; ?></td>
            <td><?php echo $row['maspbangtai']; ?></td>
			<td><?php echo $row['mancc']; ?></td>
			<td><?php echo $row['nhomsp']; ?></td>
            <td><?php echo $row['tenspchitiet']; ?></td>
			<td><?php echo $row['nganh']; ?></td>
            <td><?php echo $row['motasp']; ?></td>
			<td><?php echo $row['chieudai']; ?></td>
            <td><?php echo $row['chieurong']; ?></td>
			<td><?php echo $row['cuonglucbang']; ?></td>
            <td><?php echo $row['solopbo']; ?></td>
			<td><?php echo $row['cuongluc1lopbo']; ?></td>
			<td><?php echo $row['cglucmatbang']; ?></td>
            <td><?php echo $row['dodandai']; ?></td>
			<td><?php echo $row['docung']; ?></td>
            <td><?php echo $row['chieudaybang']; ?></td>
			<td><?php echo $row['chieudaycaosutren']; ?></td>
            <td><?php echo $row['chieudaycaosuduoi']; ?></td>
			<td><?php echo $row['domaimon']; ?></td>
			<td><?php echo $row['nhdolieu']; ?></td>
			<td><?php echo $row['nhdolientuclieu']; ?></td>
			<td><?php echo $row['nhdocaonhat']; ?></td>
			<td><?php echo $row['congsuat']; ?></td>
			<td><?php echo $row['vatlieutai']; ?></td>
			<td><?php echo $row['kichthuocvalieu']; ?></td>
			<td><?php echo $row['donvitinh']; ?></td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>




























