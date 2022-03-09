




<?php
    $conn = mysqli_connect("localhost", "root", "", "phptutorials") or die("Không kết nối được cơ sở dữ liệu"); 

    if (isset($_GET['q']) && !empty($_GET['q'])) {
    	$keyword = $_GET['q'];

    	$sql = "SELECT * FROM spkhac WHERE id LIKE '%$keyword%' OR maspk LIKE '%$keyword%' OR mancc LIKE '%$keyword%' OR nganh LIKE '%$keyword%' OR tsk7 LIKE '%$keyword%'";
    }else{
    	$sql = "SELECT * FROM spkhac";
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
                                    <th>Mã SP Khác</th>
                                    <th>Mã NCC</th>
                                    <th>Nhóm SP</th>
                                    <th>Tên SP chi tiết</th>
                                    <th>Ngành</th>
                                    <th>Mô tả Sản phẩm</th>
                                    <th>TSKT1</th>
                                    <th>TSKT2</th>
                                    <th>TSKT3</th>
                                    <th>TSKT4</th>
                                    <th>TSKT5</th>
                                    <th>TSKT6</th>
                                    <th>TSKT7</th>
                                    <th>TSKT8</th>
                                    <th>TSKT9</th>
                                    <th>TSKT10</th>
                                    <th>TSKT11</th>
                                    <th>TSKT12</th>
                                    <th>TSKT13</th>
                                    <th>TSKT14</th>
                                    <th>TSKT15</th>
                                    <th>TSKT16</th>
                                    <th>TSKT17</th>
                                    <th>Đơn vị tính</th>
                                    
                                    
		</tr>
		<?php
		   while ($row = mysqli_fetch_assoc($result)) {
		   	?>
   
		<tr>
			<td><?php echo $row['id']; ?></td>
            <td><?php echo $row['maspk']; ?></td>
			<td><?php echo $row['mancc']; ?></td>
			<td><?php echo $row['nhomsp']; ?></td>
            <td><?php echo $row['tenspct']; ?></td>
			<td><?php echo $row['nganh']; ?></td>
            <td><?php echo $row['motasp']; ?></td>
			<td><?php echo $row['tsk1']; ?></td>
            <td><?php echo $row['tsk2']; ?></td>
            <td><?php echo $row['tsk3']; ?></td>
            <td><?php echo $row['tsk4']; ?></td>
            <td><?php echo $row['tsk5']; ?></td>
            <td><?php echo $row['tsk6']; ?></td>
            <td><?php echo $row['tsk7']; ?></td>
            <td><?php echo $row['tsk8']; ?></td>
            <td><?php echo $row['tsk9']; ?></td>
            <td><?php echo $row['tsk10']; ?></td>
            <td><?php echo $row['tsk11']; ?></td>
            <td><?php echo $row['tsk12']; ?></td>
            <td><?php echo $row['tsk13']; ?></td>
            <td><?php echo $row['tsk14']; ?></td>
            <td><?php echo $row['tsk15']; ?></td>
            <td><?php echo $row['tsk16']; ?></td>
            <td><?php echo $row['tsk17']; ?></td>
			<td><?php echo $row['donvitinh']; ?></td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>
















