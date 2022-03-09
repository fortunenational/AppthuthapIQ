


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Chi tiết sản phẩm</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Chi tiết mã IQ </h4>
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
                                    <th>Tên nhà máy</th>
                                    <th>Vị trí làm việc</th>
                                    <th>Số lượng</th>
                                    <th>Năm thay</th>
                                    <th>Tháng thay</th>
                                    <th>Hãng / xuất xứ</th>
                                    <th>Thời gian sd(tháng)</th>
                                    <th>Thời điểm thay tiếp theo</th>
                                    <th>SP chính</th>
                                    <th>Chiều dài</th>
                                    <th>Chiều rộng</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Tskt1</th>
                                    <th>Tskt2</th>
                                    <th>Tskt3</th>
                                    <th>Tskt4</th>
                                    <th>Tskt5</th>
                                    <th>Tskt6</th>
                                    <th>Tskt7</th>
                                    <th>Tskt8</th>
                                    <th>Băng thiếu / đủ</th>
                                    <th>Hỏi giá</th>
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
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","phptutorials");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM chitietsanpham WHERE CONCAT(tennhamay,vitrilamviec,soluong, hangxuatsu, spchinh,maiq,tskt1,tskt2, tskt3) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['tennhamay']; ?></td>
                                                    <td><?= $items['vitrilamviec']; ?></td>
                                                    <td><?= $items['soluong']; ?></td>
                                                    <td><?= $items['namthay']; ?></td>
                                                    <td><?= $items['thangthay']; ?></td>
                                                    <td><?= $items['hangxuatsu']; ?></td>
                                                    <td><?= $items['thoigiansp']; ?></td>
                                                    <td><?= $items['thoidiemthaytieptheo']; ?></td>
                                                    <td><?= $items['spchinh']; ?></td>
                                                    <td><?= $items['chieudai']; ?></td>
                                                    <td><?= $items['chieurong']; ?></td>
                                                    <td><?= $items['tensanpham']; ?></td>
                                                    <td><?= $items['tskt1']; ?></td>
                                                    <td><?= $items['tskt2']; ?></td>
                                                    <td><?= $items['tskt3']; ?></td>
                                                    <td><?= $items['tskt4']; ?></td>
                                                    <td><?= $items['tskt5']; ?></td>
                                                    <td><?= $items['tskt6']; ?></td>
                                                    <td><?= $items['tskt7']; ?></td>
                                                    <td><?= $items['tskt8']; ?></td>
                                                    <td><?= $items['thieudu']; ?></td>
                                                    <td><?= $items['hoigia']; ?></td>
                                                    <td><?= $items['nguoiphutrach']; ?></td>
                                                    <td><?= $items['maiq']; ?></td>
                                                    <td><?= $items['linkbg']; ?></td>
                                                    <td><?= $items['ncc1']; ?></td>
                                                    <td><?= $items['baogia1']; ?></td>
                                                    <td><?= $items['ncc2']; ?></td>
                                                    <td><?= $items['baogia2']; ?></td>
                                                    <td><?= $items['ncc3']; ?></td>
                                                    <td><?= $items['baogia3']; ?></td>
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