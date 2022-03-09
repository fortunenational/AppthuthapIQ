
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `chitietsanpham` WHERE CONCAT(`id`, `fname`, `lname`, `age`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `chitietsanpham`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "phptutorials");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="php_html_table_data_filter.php" method="post">
            
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>Id</th>
                    <th>Tên nhà máy</th>
                    <th>Vị trí làm việc</th>
                    <th>Số lượng</th>
                    <th>Năm thay</th>
                    <th>Tháng thay</th>
                    <th>Hãng / xuất xứ</th>
                    <th>Thời gian SD(tháng)</th>
                    <th>Thời điểm thay tiếp theo</th>
                    <th>SP chính</th>
                    <th>Chiều dài(M)</th>
                    <th>Chiều rộng(Mm)</th>
                    <th>Tên sản phẩm</th>
                    <th>Tskt1</th>
                    <th>Tskt2</th>
                    <th>Tskt3</th>
                    <th>Tskt4</th>
                    <th>Tskt5</th>
                    <th>Tskt6</th>
                    <th>Tskt7</th>
                    <th>Tskt8</th>
                    <th>Thiếu hay đủ</th>
                    <th>Hỏi gia</th>
                    <th>Người phụ trách</th>
                    <th>Tên IQ</th>
                    <th>Link BG</th>
                    <th>NCC 1</th>
                    <th>Báo giá 1</th>
                    <th>NCC 2</th>
                    <th>Báo giá 2</th>
                    <th>NCC 3</th>
                    <th>Báo giá 3</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['tennhamay'];?></td>
                    <td><?php echo $row['vitrilamviec'];?></td>
                    <td><?php echo $row['soluong'];?></td>
                    <td><?php echo $row['namthay'];?></td>
                    <td><?php echo $row['thangthay'];?></td>
                    <td><?php echo $row['hangxuatsu'];?></td>
                    <td><?php echo $row['thoigiansp'];?></td>
                    <td><?php echo $row['thoidiemthaytieptheo'];?></td>
                    <td><?php echo $row['spchinh'];?></td>
                    <td><?php echo $row['chieudai'];?></td>
                    <td><?php echo $row['chieurong'];?></td>
                    <td><?php echo $row['tensanpham'];?></td>
                    <td><?php echo $row['tskt1'];?></td>
                    <td><?php echo $row['tskt2'];?></td>
                    <td><?php echo $row['tskt3'];?></td>
                    <td><?php echo $row['tskt4'];?></td>
                    <td><?php echo $row['tskt5'];?></td>
                    <td><?php echo $row['tskt6'];?></td>
                    <td><?php echo $row['tskt7'];?></td>
                    <td><?php echo $row['tskt8'];?></td>
                    <td><?php echo $row['thieudu'];?></td>
                    <td><?php echo $row['hoigia'];?></td>
                    <td><?php echo $row['nguoiphutrach'];?></td>
                    <td><?php echo $row['teniq'];?></td>
                    <td><?php echo $row['linkbg'];?></td>
                    <td><?php echo $row['ncc1'];?></td>
                    <td><?php echo $row['baogia1'];?></td>
                    <td><?php echo $row['ncc2'];?></td>
                    <td><?php echo $row['baogia2'];?></td>
                    <td><?php echo $row['ncc3'];?></td>
                    <td><?php echo $row['baogia3'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>