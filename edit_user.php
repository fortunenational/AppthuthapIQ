<!DOCTYPE html>
<html>
<head>
<title>Editing MySQL Data</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
// Kết nối Database
$mysqli = mysqli_connect('localhost', 'root', '', 'dataapp3');
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `iq` where maiqcsdl='$id'");
$row=mysqli_fetch_assoc($query);
?>
<form method="POST" class="form">
<h2>Sửa thành viên</h2>
<label>Username: <input type="text" value="<?php echo $row['maiqcsdl']; ?>" name="maiqcsdl"></label><br/>
<label>Email: <input type="text" value="<?php echo $row['ngaytao']; ?>" name="ngaytao"></label><br/>
<label>Phone: <input type="text" value="<?php echo $row['trangthai']; ?>" name="trangthai"></label><br/>
<input type="submit" value="Update" name="update_user">


<?php
if (isset($_POST['update_user'])){
$id=$_GET['id'];
$maiqcsdl=$_POST['maiqcsdl'];
$ngaytao=$_POST['ngaytao'];
$trangthai=$_POST['trangthai'];
// Create connection
$conn = new mysqli("localhost", "root", "", "dataapp3");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE `iq` SET maiqcsdl='$maiqcsdl', ngaytao='$ngaytao', trangthai='$trangthai' WHERE maiqcsdl='$id'";
if ($conn->query($sql) === TRUE) {
echo "Record updated successfully";
} else {
echo "Error updating record: " . $conn->error;
}
$conn->close();
}
?>

</form>
</body>
</html>