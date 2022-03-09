






<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['username'])) {
     header('Location: login.php');
}


$username = "root"; // Khai báo username
$password = "";      // Khai báo password
$server   = "localhost";   // Khai báo server
$dbname   = "dataapp3";      // Khai báo database

// Kết nối database tintuc
$connect = new mysqli($server, $username, $password, $dbname);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if ($connect->connect_error) {
    die("Không kết nối :" . $conn->connect_error);
    exit();
}

//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$ngaytao = "";
$maiqcsdl  = "";
$maiqkhspdate = "";
$makh = "";
$trangthai  = "";
$nganh  = "";
$xuatsu  = "";
$thoigiancanhang  = "";
$điaiemgiaohangloaigia  = "";
$mucdouutien  = "";


//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["maiqcsdl"])) { $maiqcsdl = $_POST['maiqcsdl']; }
    if(isset($_POST["ngaytao"])) { $ngaytao = $_POST['ngaytao']; }
    if(isset($_POST["maiqkhspdate"])) { $maiqkhspdate = $_POST['maiqkhspdate']; }
    if(isset($_POST["makh"])) { $makh = $_POST['makh']; }
    if(isset($_POST["trangthai"])) { $trangthai = $_POST['trangthai']; }
    if(isset($_POST["nganh"])) { $nganh = $_POST['nganh']; }
    if(isset($_POST["xuatsu"])) { $xuatsu = $_POST['xuatsu']; }
    if(isset($_POST["thoigiancanhang"])) { $thoigiancanhang = $_POST['thoigiancanhang']; }
    if(isset($_POST["điaiemgiaohangloaigia"])) { $điaiemgiaohangloaigia = $_POST['điaiemgiaohangloaigia']; }
    if(isset($_POST["mucdouutien"])) { $mucdouutien = $_POST['mucdouutien']; }

    require('validate.php');
                
   

    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO iq (ngaytao, maiqcsdl, maiqkhspdate, makh,  trangthai, nganh, xuatsu, thoigiancanhang, điaiemgiaohangloaigia, mucdouutien)
    VALUES ('$ngaytao','$maiqcsdl', '$maiqkhspdate' , '$makh', '$trangthai' , '$nganh' , '$xuatsu' , '$thoigiancanhang' , '$điaiemgiaohangloaigia' , '$mucdouutien')";

    if (empty($ngaytao)) {
        echo "Thiếu dữ liệu ngày tạo ! Vui lòng nhập đư dữ liệu: ".mysqli_connect_error();
    }

      if (empty($maiqcsdl)) {
        echo "Thiếu dữ liệu mã iq cơ sở dữ liệu ! Vui lòng nhập đư dữ liệu: ".mysqli_connect_error();
    }  

        if (empty($maiqkhspdate)) {
        echo "Thiếu dữ liệu mã iq khách hàng  ! Vui lòng nhập đư dữ liệu: ".mysqli_connect_error();
    }

    elseif ($connect->query($sql) === TRUE) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Thêm dữ liệu không thành công! Mã iq cơ sở dữ liệu đã có! Vui lòng kiểm tra dữ liệu nhập vào";
    } 
}



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
        .submit-form{}
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
                <li><a href="nhapexcel.php">Nhập dạng file </a></li>
            </ul>
        </li>

        <li><a href="iq.php">Iq</a></li>
        <li><a href="hopdong.php">Hợp đông</a></li>

    </ul> 
    <table class="submit-form">
  <form action="" method="post">
    <table>
        
        <tr>
            <th>Mã iq cơ sở dữ liệu</th>
            <td><input type="text" name="maiqcsdl" value=""></td>
        </tr>
      

        <tr>
            <th>Ngày tạo:</th>
            <td><input type="date" name="ngaytao" value=""></td>
        </tr>
        <tr>
            <th>Mã iq khách hàng sản phẩm update</th>
            <td><input type="text" name="maiqkhspdate" value=""></td>
        </tr>

        <tr>
            <th>Mã khách hàng</th>
            <td><input type="text" name="makh" value=""></td>
        </tr>           

        <tr>
            <th>Trạng thái:</th>
            <td><input type="text" name="trangthai" value=""></td>
        </tr>              
        
        <tr>
            <th>Ngành:</th>
            <td><input type="text" name="nganh" value=""></td>
        </tr>    

        <tr>
            <th>Xuất xứ:</th>
            <td><input type="text" name="xuatsu" value=""></td>
        </tr>    
        <tr>
            <th>Thời gian cần hàng</th>
            <td><input type="date" name="thoigiancanhang" value=""></td>
        </tr>    
        <tr>
            <th>Địa điểm giao hàng</th>
            <td><input type="text" name="điaiemgiaohangloaigia" value=""></td>
        </tr>        
        <tr>
            <th>Mưc độ ưu tiên</th>
            <td><input type="text" name="mucdouutien" value=""></td>
        </tr>                                    
    </table>
    <button type="submit">Gửi</button>

        <form method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit2" name="btnGui">Import</button>
    </form>
</table>
</form>
  
</body>
</html>