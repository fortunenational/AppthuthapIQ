<?php
    if (isset($_POST["submit1"])) {
        header('Location:details.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title></title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    
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
                                    <th>Ngày tạo</th>
                                    <th>Mã IQ</th>
                                    <th>Mã khách hàng</th>
                                    <th>Khách hàng</th>
                                    <th>Trạng thái</th>
                                    <th>Ngành</th>
                                    <th>Mã SP</th>
                                    <th>Nhóm SP</th>
                                    <th>Tên SP chi tiết</th>
                                    <th>Xuất xứ</th>
                                    <th>Báo giá 1</th>
                                    <th>Báo giá 2</th>
                                    <th>Báo giá 3</th>
                                    <th>Báo giá 4</th>
                                    <th>Báo giá 5</th>
                                    <th>Báo giá 6</th>
                                    <th>Báo giá 7</th>
                                    <th>Báo giá 8</th>
                                    <th>Báo giá 9</th>
                                    <th>Báo giá 10</th>
                                    <th>Báo giá 11</th>
                                    <th>Báo giá 12</th>
                                    <th>Báo giá 13</th>
                                    <th>Báo giá 14</th>
                                    <th>Chi tiết</th>
                                </tr>

                            
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","phptutorials");

                                    if(isset($_GET['search']))
                                                   {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM users WHERE CONCAT(id,ngaytao,maiq,makhachhang,khachhang,trangthai,tenspchitiet) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                echo'<tr>';
                                                echo'<tr>'.$row['id'].'</tr>';
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

    <form name="form1" action="" method="post">
        <input type="submit" name="submit1" value="details">
    </form>
</body>
</html>['makhachhang']; ?></td>
                                                    <td><?= $items['khachhang']; ?></td>
                                                    <td><?= $items['trangthai']; ?></td>
                                                    <td><?= $items['nganh']; ?></td>
                                                    <td><?= $items['masp']; ?></td>
                                                    <td><?= $items['nhomsp']; ?></td>
                                                    <td><?= $items['tenspchitiet']; ?></td>
                                                    <td><?= $items['xuatsu']; ?></td>
                                                    <td><?= $items['baogia1']; ?></td>
                                                    <td><?= $items['baogia2']; ?></td>
                                                    <td><?= $items['baogia3']; ?></td>
                                                    <td><?= $items['baogia4']; ?></td>
                                                    <td><?= $items['baogia5']; ?></td>
                                                    <td><?= $items['baogia6']; ?></td>
                                                    <td><?= $items['baogia7']; ?></td>
                                                    <td><?= $items['baogia8']; ?></td>
                                                    <td><?= $items['baogia9']; ?></td>
                                                    <td><?= $items['baogia10']; ?></td>
                                                    <td><?= $items['baogia11']; ?></td>
                                                    <td><?= $items['baogia12']; ?></td>
                                                    <td><?= $items['baogia13']; ?></td>
                                                    <td><?= $items['baogia14']; ?></td>
                                                    <td>
                                                        <a href="details.php?">Chitiet</a>
                                                    </td>
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

    <form name="form1" action="" method="post">
        <input type="submit" name="submit1" value="details">
    </form>
</body>
</html>