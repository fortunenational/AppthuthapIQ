



<?php
    $conn = mysqli_connect("localhost", "root", "", "dataapp3") or die("Không kết nối được cơ sở dữ liệu"); 

    if (isset($_GET['q']) && !empty($_GET['q'])) {
        $keyword = $_GET['q'];

        $sql = "SELECT * FROM sanpham WHERE masp LIKE '%$keyword%' OR mancc LIKE '%$keyword%' OR nhomsp LIKE '%$keyword%' OR tenspchitiet LIKE '%$keyword%' OR nganh LIKE '%$keyword%'";
    }else{
        $sql = "SELECT * FROM sanpham WHERE nhomsp = 'Băng gầu' ";
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
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
   

        .list{border-collapse: collapse;}  .list tr th{background: #ebebeb;} .list img{width: 32px;} 
        .dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
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
                
            </ul>
        </li>

        <li><a href="iq.php">Iq</a></li>
        <li><a href="hopdong.php">Hợp đông</a></li>
        <li><a href="">Thông số kt</a>
            <ul>
                <li><a href="tsktbg1.php">Thông số kt bg 1</a></li>
            </ul>
            <ul>
                <li><a href="tsktbg2.php">Thông số kt bg 2</a></li>
            </ul>         
            <ul>
                <li><a href="tsktbg3.php">Thông số kt bg 3</a></li>
            </ul>            
                        <ul>
                <li><a href="tsktbg4.php">Thông số kt bg 4</a></li>
            </ul>            
                        <ul>
                <li><a href="tsktbg5.php">Thông số kt bg 5</a></li>
            </ul>            
                        <ul>
                <li><a href="tsktbg6.php">Thông số kt bg 6</a></li>
            </ul>                        
        </li>

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


<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Độ cứng</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <a href="docung63.php">63</a>
    <a href="#base">Base</a>
    <a href="#blog">Blog</a>
    <a href="#contact">Contact</a>
    <a href="#custom">Custom</a>
    <a href="#support">Support</a>
    <a href="#tools">Tools</a>
  </div>
</div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>



    <table class="list" border="1" cellpadding="10">
          <tr>
            <th>Mã SP</th>
            <th>Mã NCC</th>
            <th>Nhóm SP</th>
            <th>Tên SP chi tiết</th>
            <th>Ngành</th>
            <th>Mô tả Sản phẩm</th>
            <th>Chi tiết iq</th>
            <th>Chi tiết kỹ thuật</th>

            
        </tr>
        <?php
           while ($row = mysqli_fetch_assoc($result)) {
            ?>
   
        <tr>
            <td><?php echo $row['masp']; ?></td>
            <td><?php echo $row['mancc']; ?></td>
            <td><?php echo $row['nhomsp']; ?></td>
            <td><?php echo $row['tenspchitiet']; ?></td>
            <td><?php echo $row['nganh']; ?></td>
            <td><?php echo $row['motasanpham']; ?></td>
                     <form action="" method="get">
            <td><a href="./chiTiet.php?idSP=<?php echo  $row['masp'] ?>" >Xem chi tiết</a></td>
        </form>
                    <form action="" method="get">
            <td><a href="./cttskt.php?idSPKT=<?php echo  $row['masp'] ?>" >Xem chi tiết</a></td>
        </form>   
            
        </tr>
    <?php } ?>
    </table>
</body>
</html>




















































