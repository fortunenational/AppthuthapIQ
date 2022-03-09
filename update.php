

<?php
$username = "root"; // Khai báo username
$password = "";      // Khai báo password
$server   = "localhost";   // Khai báo server
$dbname   = "dataapp3";      // Khai báo database

// Kết nối database tintuc
$connect = mysqli_connect($server, $username, $password, $dbname);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if (!$connect) {
    die("Không kết nối :" . mysqli_connect_error());
    exit();
}

//Lấy dữ liệu từ view.php bằng phương thức GET.
if(isset($_GET['idupdate'])){ 
    $id = $_GET['idupdate'];
    $sql     = "SELECT * FROM iq WHERE maiqcsdl='$id'";
    $ket_qua = mysqli_query($connect,$sql);

    while ($row = mysqli_fetch_array($ket_qua)) {
        $ngaytao     = $row['ngaytao'];
        $maiqcsdl    = $row['maiqcsdl'];
        $trangthai   = $row['trangthai'];
?>

<!-- Truyền dữ liệu vào form. -->
<form action="process.php" method="post">
    <table>
        
        <tr>
            <th>Ngày thang:</th>
            <td><input type="text" name="title" value="<?php echo $ngaytao; ?>"></td>
        </tr>

        <tr>
            <th>Mã IQ:</th>
            <td><input type="text" name="date" value="<?php echo $maiqcsdl; ?>"></td>
        </tr>

        

        <tr>
            <th>Trạng thái:</th>
            <td><textarea cols="30" rows="7" name="content"><?php echo $trangthai; ?></textarea></td>
        </tr>
    </table>
    <button type="submit">Gửi</button>
</form>

<?php 
    } //Đóng vòng lặp while.
} //Đóng câu lệnh if.

//Đóng kết nối database tintuc
$connect->close();
?>