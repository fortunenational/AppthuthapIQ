









<?php
$username = "root"; // Khai báo username
$password = "";      // Khai báo password
$server   = "localhost";   // Khai báo server
$dbname   = "dataapp";      // Khai báo database

// Kết nối database tintuc
$connect = new mysqli($server, $username, $password, $dbname);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if ($connect->connect_error) {
    die("Không kết nối :" . $conn->connect_error);
    exit();
}

//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$masp  = "";
$mancc = "";
$nhomsp = "";
$tenspchitiet = "";
$nganh  = "";
$motasanpham  = "";



//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["masp"])) { $masp = $_POST['masp']; }
    if(isset($_POST["mancc"])) { $mancc = $_POST['mancc']; }
    if(isset($_POST["nhomsp"])) { $nhomsp = $_POST['nhomsp']; }
    if(isset($_POST["tenspchitiet"])) { $tenspchitiet = $_POST['tenspchitiet']; }
    if(isset($_POST["nganh"])) { $nganh = $_POST['nganh']; }
    if(isset($_POST["motasanpham"])) { $motasanpham = $_POST['motasanpham']; }


    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO iq (masp, mancc, nhomsp, tenspchitiet, nganh, motasanpham)
    VALUES ('$masp', '$mancc', '$nhomsp' , '$tenspchitiet',  '$nganh' , '$motasanpham')";

    if ($connect->query($sql) === TRUE) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}
//Đóng database
$connect->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <form action="" method="post">
    <table>
        

      

        <tr>
            <th>Mã sản phẩm:</th>
            <td><input type="text" name="masp" value=""></td>
        </tr>
        <tr>
            <th>Mã nhà cung cấp:</th>
            <td><input type="text" name="mancc" value=""></td>
        </tr>
        <tr>
            <th>Nhóm sản phẩm</th>
            <td><input type="text" name="nhomsp" value=""></td>
        </tr>

        <tr>
            <th>Tên sản phẩm chi tiết</th>
            <td><input type="text" name="tenspchitiet" value=""></td>
        </tr>           
            
        
        <tr>
            <th>Ngành:</th>
            <td><input type="text" name="nganh" value=""></td>
        </tr>    

        <tr>
            <th>Mô tả sản phẩm</th>
            <td><input type="text" name="motasanpham" value=""></td>
        </tr>    
                                      
    </table>
    <button type="submit">Gửi</button>
</form>
  
</body>
</html>