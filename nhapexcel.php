


<?php
    require('db_connect.php');
    require('Classes/PHPExcel.php');

    if(isset($_POST['btnGui'])){
        $file = $_FILES['file']['tmp_name'];
        $objReader = PHPExcel_IOFactory::createReaderForFile($file);
        $objReader ->setloadSheetsOnly('2011');

        $objExcel = $objReader ->load($file);
        $sheetData = $objExcel ->getActiveSheet()->toArray('null', true, true, true);

        $highestRow = $objExcel->setActiveSheetIndex()->getHighestRow();
        for($row = 2; $row<=$highestRow; $row++){
               $ngaytao = $sheetData[$row]['A'];
            $maiqcsdl = $sheetData[$row]['B'];
            $maiqkhspdate = $sheetData[$row]['C'];
            $makh = $sheetData[$row]['D'];
            $trangthai = $sheetData[$row]['E'];
            $nganh = $sheetData[$row]['F'];
            $xuatsu = $sheetData[$row]['G'];
            $thoigiancanhang = $sheetData[$row]['H'];
            $điaiemgiaohangloaigia = $sheetData[$row]['I'];
            $mucdouutien = $sheetData[$row]['J'];
        $sql_csv = "INSERT INTO iq(ngaytao, maiqcsdl, maiqkhspdate, makh, trangthai, nganh, xuatsu, thoigiancanhang, điaiemgiaohangloaigia, mucdouutien) VALUES ('$ngaytao', '$maiqcsdl', '$maiqkhspdate', '$makh', '$trangthai', '$nganh', '$xuatsu', '$thoigiancanhang', '$điaiemgiaohangloaigia', '$mucdouutien')";

                if (empty($sheetData[$row]['A'])) {
                    echo "Thiếu dữ liệu ngày tạo ! Vui lòng nhập đư dữ liệu: ".mysqli_connect_error();                  
                  } elseif ($mysqli->query($sql_csv) === TRUE) {
                echo "Insert Thành công!";
            } else {
                echo "Error: " . $sql_csv . "<br>" . $mysqli->error;
            }
        }
        
    }



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<title>Untitled Document</title>
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
                
            </ul>
        </li>

        <li><a href="iq.php">Iq</a></li>
        <li><a href="hopdong.php">Hợp đông</a></li>

    </ul> 
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="btnGui">Import</button>
    </form>

</body>
</html>