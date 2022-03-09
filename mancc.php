



<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Chi tiết sản phẩm</title>
        <style>
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
</style>
</head>
<body>

          <ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="banggau.php">Băng gầu</a></li>
  <li><a href="bangtai.php">Băng tải</a></li>
  <li><a href="hopso.php">Hộp số</a></li>
  <li><a href="quat.php">Quạt</a></li>                                       
  <li><a href="spduc.php">Sản phẩm đúc</a></li>
  <li><a href="spkhac.php">Sản phẩm khác</a></li>
  <li><a href="tamlot.php">Tấm lót</a></li>
  <li><a href="xichtai.php">Xích tai</a></li>
  <li style="float:right"><a class="active" href="mancc.php">Nhà cung cấp</a></li>
</ul>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Chi tiết mã IQ </h4>
                    </div>
                    <div class="card-header">
     


                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
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
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","phptutorials");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM news WHERE CONCAT(mancc) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['mancc']; ?></td>
                                                    <td><?= $items['tenncc']; ?></td>
                                                    <td><?= $items['sdt']; ?></td>
                                                    <td><?= $items['email']; ?></td>
                                                    <td><?= $items['diachi']; ?></td>
                                                    <td><?= $items['website']; ?></td>
                                                    <td><?= $items['ttngll1']; ?></td>
                                                    <td><?= $items['ttngll2']; ?></td>
                                                    <td><?= $items['ttngll3']; ?></td>
                                                    <td><?= $items['ttngll4']; ?></td>
                                                    <td><?= $items['note']; ?></td>
                                                    <td><?= $items['level']; ?></td>
                                                    <td><?= $items['oldnote']; ?></td>
                                                    <td><?= $items['feedbackdonhadnh']; ?></td>
                                                    <td><?= $items['catalo']; ?></td>
                                                    <td><?= $items['referen']; ?></td>
                                                    <td><?= $items['roc']; ?></td>
                                                    <td><?= $items['tds']; ?></td>
                                                    <td><?= $items['oem']; ?></td>
                                                    <td><?= $items['tdph']; ?></td>
                                                    <td><?= $items['ntdph']; ?></td>
                                                    <td><?= $items['details']; ?></td>
                                                    
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>