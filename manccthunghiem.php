




<?php
    $conn = mysqli_connect("localhost", "root", "", "phptutorials") or die("Không kết nối được cơ sở dữ liệu"); 

    if (isset($_GET['q']) && !empty($_GET['q'])) {
    	$keyword = $_GET['q'];

    	$sql = "SELECT * FROM news WHERE id LIKE '%$keyword%' OR mancc LIKE '%$keyword%'";
    }else{
    	$sql = "SELECT * FROM news";
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
                                    <th>Mã NCC</th>
                                    <th>Tên NCC</th>
                                    <th>SĐT</th>
                                    <th>Email</th>
                                    <th>Địa chỉ</th>
                                    <th>Website</th>
                                    <th>Thông tin người liên lạc 1</th>
                                    <th>Thông tin người liên lạc 2</th>
                                    <th>Thông tin người liên lạc 3</th>
                                    <th>Thông tin người liên lạc 4</th>
                                    <th>NOTE</th>
                                    <th>LEVEL</th>
                                    <th>OLD notes</th>
                                    <th>Feedback đơn hàng đã nhập</th>
                                    <th>Catalogue</th>
                                    <th>References</th>
                                    <th>Range of Commission</th>
                                    <th>Technical data sheet</th>
                                    <th>OEM</th>
                                    <th>Tốc độ phản hồi</th>
                                    <th>Nhóm tốc độ phản hồi</th>
                                    <th>Tên người phụ trách</th>
                                    
                                    
		</tr>
		<?php
		   while ($row = mysqli_fetch_assoc($result)) {
		   	?>
   
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['mancc']; ?></td>
			<td><?php echo $row['tenncc']; ?></td>
            <td><?php echo $row['sdt']; ?></td>
			<td><?php echo $row['email']; ?></td>
            <td><?php echo $row['diachi']; ?></td>
            <td><?php echo $row['website']; ?></td>
			<td><?php echo $row['ttngll1']; ?></td>
            <td><?php echo $row['ttngll2']; ?></td>
            <td><?php echo $row['ttngll3']; ?></td>
            <td><?php echo $row['ttngll4']; ?></td>
            <td><?php echo $row['note']; ?></td>
            <td><?php echo $row['level']; ?></td>
            <td><?php echo $row['oldnote']; ?></td>
            <td><?php echo $row['feedbackdonhadnh']; ?></td>
            <td><?php echo $row['catalo']; ?></td>
            <td><?php echo $row['referen']; ?></td>
            <td><?php echo $row['roc']; ?></td>
            <td><?php echo $row['tds']; ?></td>
            <td><?php echo $row['oem']; ?></td>
            <td><?php echo $row['tdph']; ?></td>
			<td><?php echo $row['ntdph']; ?></td>
			<td><?php echo $row['details']; ?></td>
			
		</tr>
	<?php } ?>
	</table>
</body>
</html>
















