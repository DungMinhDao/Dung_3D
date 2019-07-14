<?php 
    include 'database.php' ;
    require 'optimize.php' ;
?>
<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<head>
    <title>Thêm Sản Phẩm</title>
    <?php include_once 'head_adm.php' ?>
</head>

<body>
    <div class="wrapper">
        <?php include_once 'sidebar_adm.php' ?>
        <main class="main--container">
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2 class="page--title h5">Sản Phẩm</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="ecommerce.html">Giao Thương</a></li>
                                <li class="breadcrumb-item active"><span>Sản Phẩm</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="summary--widget">
                                <div class="summary--item">
                                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#009378">2,9,7,9,11,9,7,5,7,7,9,11</p>
                                    <p class="summary--title">Tháng Này</p>
                                    <p class="summary--stats text-green">2,371,527</p>
                                </div>
                                <div class="summary--item">
                                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#e16123">2,3,7,7,9,11,9,7,9,11,9,7</p>
                                    <p class="summary--title">Tháng Trước</p>
                                    <p class="summary--stats text-orange">2,527,371</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="main--content">
                <div class="panel">
                    <form method="POST" enctype="multipart/form-data">
                            <div class="panel-heading">
                                <h3 class="panel-title">Thông Tin Sản Phẩm</h3>
                            </div>
                            <div class="panel-content">
                                <div class="form-group row"> <span class="label-text col-md-2 col-form-label text-md-right">Tên Sản Phẩm</span>
                                    <div class="col-md-10"> <input type="text" name="tensp" class="form-control form-control-rounded"></div>
                                </div>
                                <hr>
                                <div class="form-group row"> <span class="label-text col-md-2 col-form-label text-md-right">Giới Thiệu Chung</span>
                                    <div class="col-md-10"> <input type="text" name="gioithieu" class="form-control">  </div>
                                </div>
                                <hr>
                                <div class="form-group row"> <span class="label-text col-md-2 col-form-label text-md-right">Disabled</span>
                                    <div class="col-md-10"> <input type="text" name="text" class="form-control" disabled=""> </div>
                                </div>
                                <hr>
                                <div class="form-group row"> <span class="label-text col-md-2 col-form-label text-md-right">Đăng Ảnh</span>
                                    <div class="col-md-10"> <label class="custom-file"> <input type="file" class="custom-file-input" name="avt"> <span class="custom-file-label">Chọn Ảnh</span> </label> </div>
                                </div>
                                <hr>
                                <div class="form-group row"> <span class="label-text col-md-2 col-form-label text-md-right">Thông tin</span>
                                    <div class="col-md-10"> <textarea name="info" class="form-control" placeholder="Text input area"></textarea> </div>
                                </div>
                                <hr>
                                <div class="form-group row"> <span class="label-text col-md-2 col-form-label text-md-right">Static Content</span>
                                    <div class="col-md-10"> <input type="text" class="form-control-plaintext" value="email@example.com" readonly=""> </div>
                                </div>
                                <hr>
                                <div class="form-group row"> <span class="label-text col-md-2 col-form-label text-md-right py-0">Hàng Có FREE Không?</span>
                                    <div class="col-md-10"> <label class="form-check"> <input type="checkbox" name="checkbox" value="1" class="form-check-input" checked=""> <span class="form-check-label">Mày Đang Nằm Mơ À ?</span> </label> <label class="form-check"> <input type="checkbox" name="checkbox" value="2" class="form-check-input"> <span class="form-check-label">Thức Tỉnh Đi !</span> </label> </div>
                                </div>
                                <hr>
                                <div class="form-group row"> <span class="label-text col-md-2 col-form-label text-md-right py-0">Xuất Xứ</span>
                                    <div class="col-md-10 form-inline"> <label class="form-radio mr-3"> <input type="radio" name="radio02" value="1" class="form-radio-input" checked=""> <span class="form-radio-label">Hàng Nội Địa</span> </label> <label class="form-radio"> <input type="radio" name="radio02" value="2" class="form-radio-input"> <span class="form-radio-label">Hàng Nhập Ngoại </span> </label> </div>
                                </div>
                                <hr>
                                <div class="form-group row"> <span class="label-text col-md-2 col-form-label text-md-right">Nếu Là Hàng Nhập Ngoại</span>
                                    <div class="col-md-10"> <select name="select" class="form-control">
                                            <option value="1">Trung Quốc</option>
                                            <option value="2">China</option>
                                            <option value="3">Republic of China</option>
                                            <option value="4">Công hòa Trung Hoa</option>
                                        </select> </div>
                                </div>
                                <hr>
                                <div class="form-group row"> <span class="label-text col-md-2 col-form-label text-md-right">Thông Tin Sản Phẩm</span>
                                    <div class="col-md-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend" name="adr"> <span class="input-group-text">Liên Hệ Tại</span> </div><input type="text" name="text" class="form-control">
                                        </div>
                                        <div class="input-group"> <input type="text" name="price" class="form-control">
                                            <div class="input-group-append"> <span class="input-group-text">VND</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row"> <span class="label-text col-md-2 col-form-label text-md-right">Chú Thích Thêm</span>
                                    <div class="col-md-10">
                                        <div class="input-group"> <input type="text" name="text" class="form-control">
                                            <div class="input-group-append">  <button type="submit" class="btn btn-rounded btn-info" name="ok">ĐĂNG</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                               
                            </div>
                        </div>
                    </form>
                <div class="panel">
                    <div class="records--list" data-title="Product Listing">
                        <table id="recordsListView">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th class="not-sortable">Ảnh</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Danh Mục</th>
                                    <th>Giá</th>
                                    <th>Số Lượng</th>
                                    <th>Ngày Tạo</th>
                                    <th>Trạng Thái</th>
                                    <th class="not-sortable">Cài Đặt</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <a href="#" class="btn-link">#315321</a> </td>
                                    <td> <a href="#" class="btn-link"> <img src="assets/img/products/thumb-80x60.jpg" alt=""> </a> </td>
                                    <td> <a href="#" class="btn-link">Baby Dress</a> </td>
                                    <td> <a href="#" class="btn-link">Baby Products</a> </td>
                                    <td>$12.00</td>
                                    <td>1</td>
                                    <td>12 June 2017</td>
                                    <td> <span class="label label-success">Approved</span> </td>
                                    <td>
                                        <div class="dropleft"> <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a href="#" class="dropdown-item">Edit</a> <a href="#" class="dropdown-item">Delete</a> </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <a href="#" class="btn-link">#315321</a> </td>
                                    <td> <a href="#" class="btn-link"> <img src="assets/img/products/thumb-80x60.jpg" alt=""> </a> </td>
                                    <td> <a href="#" class="btn-link">Baby Dress</a> </td>
                                    <td> <a href="#" class="btn-link">Baby Products</a> </td>
                                    <td>$12.00</td>
                                    <td>1</td>
                                    <td>12 June 2017</td>
                                    <td> <span class="label label-warning">Not Published</span> </td>
                                    <td>
                                        <div class="dropleft"> <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a href="#" class="dropdown-item">Edit</a> <a href="#" class="dropdown-item">Delete</a> </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <a href="#" class="btn-link">#315321</a> </td>
                                    <td> <a href="#" class="btn-link"> <img src="assets/img/products/thumb-80x60.jpg" alt=""> </a> </td>
                                    <td> <a href="#" class="btn-link">Baby Dress</a> </td>
                                    <td> <a href="#" class="btn-link">Baby Products</a> </td>
                                    <td>$12.00</td>
                                    <td>1</td>
                                    <td>12 June 2017</td>
                                    <td> <span class="label label-danger">Deleted</span> </td>
                                    <td>
                                        <div class="dropleft"> <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a href="#" class="dropdown-item">Edit</a> <a href="#" class="dropdown-item">Delete</a> </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <a href="#" class="btn-link">#315321</a> </td>
                                    <td> <a href="#" class="btn-link"> <img src="assets/img/products/thumb-80x60.jpg" alt=""> </a> </td>
                                    <td> <a href="#" class="btn-link">Baby Dress</a> </td>
                                    <td> <a href="#" class="btn-link">Baby Products</a> </td>
                                    <td>$12.00</td>
                                    <td>1</td>
                                    <td>12 June 2017</td>
                                    <td> <span class="label label-info">Available</span> </td>
                                    <td>
                                        <div class="dropleft"> <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a href="#" class="dropdown-item">Edit</a> <a href="#" class="dropdown-item">Delete</a> </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <a href="#" class="btn-link">#315321</a> </td>
                                    <td> <a href="#" class="btn-link"> <img src="assets/img/products/thumb-80x60.jpg" alt=""> </a> </td>
                                    <td> <a href="#" class="btn-link">Baby Dress</a> </td>
                                    <td> <a href="#" class="btn-link">Baby Products</a> </td>
                                    <td>$12.00</td>
                                    <td>1</td>
                                    <td>12 June 2017</td>
                                    <td> <span class="label label-success">Approved</span> </td>
                                    <td>
                                        <div class="dropleft"> <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a href="#" class="dropdown-item">Edit</a> <a href="#" class="dropdown-item">Delete</a> </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <a href="#" class="btn-link">#315321</a> </td>
                                    <td> <a href="#" class="btn-link"> <img src="assets/img/products/thumb-80x60.jpg" alt=""> </a> </td>
                                    <td> <a href="#" class="btn-link">Baby Dress</a> </td>
                                    <td> <a href="#" class="btn-link">Baby Products</a> </td>
                                    <td>$12.00</td>
                                    <td>1</td>
                                    <td>12 June 2017</td>
                                    <td> <span class="label label-success">Approved</span> </td>
                                    <td>
                                        <div class="dropleft"> <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a href="#" class="dropdown-item">Edit</a> <a href="#" class="dropdown-item">Delete</a> </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <a href="#" class="btn-link">#315321</a> </td>
                                    <td> <a href="#" class="btn-link"> <img src="assets/img/products/thumb-80x60.jpg" alt=""> </a> </td>
                                    <td> <a href="#" class="btn-link">Baby Dress</a> </td>
                                    <td> <a href="#" class="btn-link">Baby Products</a> </td>
                                    <td>$12.00</td>
                                    <td>1</td>
                                    <td>12 June 2017</td>
                                    <td> <span class="label label-warning">Not Published</span> </td>
                                    <td>
                                        <div class="dropleft"> <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a href="#" class="dropdown-item">Edit</a> <a href="#" class="dropdown-item">Delete</a> </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <a href="#" class="btn-link">#315321</a> </td>
                                    <td> <a href="#" class="btn-link"> <img src="assets/img/products/thumb-80x60.jpg" alt=""> </a> </td>
                                    <td> <a href="#" class="btn-link">Baby Dress</a> </td>
                                    <td> <a href="#" class="btn-link">Baby Products</a> </td>
                                    <td>$12.00</td>
                                    <td>1</td>
                                    <td>12 June 2017</td>
                                    <td> <span class="label label-danger">Deleted</span> </td>
                                    <td>
                                        <div class="dropleft"> <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a href="#" class="dropdown-item">Edit</a> <a href="#" class="dropdown-item">Delete</a> </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <a href="#" class="btn-link">#315321</a> </td>
                                    <td> <a href="#" class="btn-link"> <img src="assets/img/products/thumb-80x60.jpg" alt=""> </a> </td>
                                    <td> <a href="#" class="btn-link">Baby Dress</a> </td>
                                    <td> <a href="#" class="btn-link">Baby Products</a> </td>
                                    <td>$12.00</td>
                                    <td>1</td>
                                    <td>12 June 2017</td>
                                    <td> <span class="label label-info">Available</span> </td>
                                    <td>
                                        <div class="dropleft"> <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a href="#" class="dropdown-item">Edit</a> <a href="#" class="dropdown-item">Delete</a> </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <a href="#" class="btn-link">#315321</a> </td>
                                    <td> <a href="#" class="btn-link"> <img src="assets/img/products/thumb-80x60.jpg" alt=""> </a> </td>
                                    <td> <a href="#" class="btn-link">Baby Dress</a> </td>
                                    <td> <a href="#" class="btn-link">Baby Products</a> </td>
                                    <td>$12.00</td>
                                    <td>1</td>
                                    <td>12 June 2017</td>
                                    <td> <span class="label label-success">Approved</span> </td>
                                    <td>
                                        <div class="dropleft"> <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a href="#" class="dropdown-item">Edit</a> <a href="#" class="dropdown-item">Delete</a> </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <a href="#" class="btn-link">#315321</a> </td>
                                    <td> <a href="#" class="btn-link"> <img src="assets/img/products/thumb-80x60.jpg" alt=""> </a> </td>
                                    <td> <a href="#" class="btn-link">Baby Dress</a> </td>
                                    <td> <a href="#" class="btn-link">Baby Products</a> </td>
                                    <td>$12.00</td>
                                    <td>1</td>
                                    <td>12 June 2017</td>
                                    <td> <span class="label label-success">Approved</span> </td>
                                    <td>
                                        <div class="dropleft"> <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a href="#" class="dropdown-item">Edit</a> <a href="#" class="dropdown-item">Delete</a> </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <a href="#" class="btn-link">#315321</a> </td>
                                    <td> <a href="#" class="btn-link"> <img src="assets/img/products/thumb-80x60.jpg" alt=""> </a> </td>
                                    <td> <a href="#" class="btn-link">Baby Dress</a> </td>
                                    <td> <a href="#" class="btn-link">Baby Products</a> </td>
                                    <td>$12.00</td>
                                    <td>1</td>
                                    <td>12 June 2017</td>
                                    <td> <span class="label label-success">Approved</span> </td>
                                    <td>
                                        <div class="dropleft"> <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a href="#" class="dropdown-item">Edit</a> <a href="#" class="dropdown-item">Delete</a> </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <a href="#" class="btn-link">#315321</a> </td>
                                    <td> <a href="#" class="btn-link"> <img src="assets/img/products/thumb-80x60.jpg" alt=""> </a> </td>
                                    <td> <a href="#" class="btn-link">Baby Dress</a> </td>
                                    <td> <a href="#" class="btn-link">Baby Products</a> </td>
                                    <td>$12.00</td>
                                    <td>1</td>
                                    <td>12 June 2017</td>
                                    <td> <span class="label label-success">Approved</span> </td>
                                    <td>
                                        <div class="dropleft"> <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a href="#" class="dropdown-item">Edit</a> <a href="#" class="dropdown-item">Delete</a> </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <a href="#" class="btn-link">#315321</a> </td>
                                    <td> <a href="#" class="btn-link"> <img src="assets/img/products/thumb-80x60.jpg" alt=""> </a> </td>
                                    <td> <a href="#" class="btn-link">Baby Dress</a> </td>
                                    <td> <a href="#" class="btn-link">Baby Products</a> </td>
                                    <td>$12.00</td>
                                    <td>1</td>
                                    <td>12 June 2017</td>
                                    <td> <span class="label label-success">Approved</span> </td>
                                    <td>
                                        <div class="dropleft"> <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a href="#" class="dropdown-item">Edit</a> <a href="#" class="dropdown-item">Delete</a> </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <footer class="main--footer main--footer-light">
                <p>Copyright &copy; <a href="#">DAdmin</a>. All Rights Reserved.</p>
            </footer>
        </main>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/perfect-scrollbar.min.js"></script>
    <script src="assets/js/jquery.sparkline.min.js"></script>
    <script src="assets/js/raphael.min.js"></script>
    <script src="assets/js/morris.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/jquery-jvectormap.min.js"></script>
    <script src="assets/js/jquery-jvectormap-world-mill.min.js"></script>
    <script src="assets/js/horizontal-timeline.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/jquery.steps.min.js"></script>
    <script src="assets/js/dropzone.min.js"></script>
    <script src="assets/js/ion.rangeSlider.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
<?php 
    if (isset($_POST['ok'])) { 
        $tensp = $_POST['tensp'];
        $gioithieu = $_POST['gioithieu'];
        $date = date('Y-m-d');
        $image = new SimpleImage();
        $image->load($_FILES['avt']['tmp_name']);
        $image->resizeToWidth(500);
        $info = $_POST['info'];
        $random = date('YmdHis');
        $image->save($random.".jpg");
        $link_avatar = $random.".jpg";
        $adr = $_POST['adr'];
        $price = $_POST['price'];
        $query = "INSERT INTO `sp3d`(`sp_ten`,`avt`,`time`,`price`,`address`,`info`) VALUES ('{$tensp}','{$link_avatar}','{$date}','{$price}','{$adr}','{$info}')";
        mysqli_query($connection, $query);
}
 ?>