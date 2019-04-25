<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="http://www.tctwest.net/wp-content/uploads/tct-logo1.png">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="http://localhost/web/public/css/admin.css">
    <script src="http://localhost/web/public/plugin/ckeditor.js"></script>
    <title>Thêm Tin</title>


</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><a href=""><img src="../../front/img/logo.png" alt=""></a></h3>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Quản Trị Thông Tin</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="index.php">Công Ty</a>
                        </li>
                        <li>
                            <a href="ds-ung-tuyen.php">DS Ứng tuyển</a>
                        </li>
                        <li>
                            <a href="addtincongviec.php">Đăng tin</a>
                        </li>
                        <li>
                            <a href="mn-tin.php">Quản lý tin</a>
                        </li>
                        <li>
                            <a href="../infouser.php">Thay đổi thông tin</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Liên Hệ</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="../../index.php">Trang Chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../../content/xuly/logout.php">Đăng Xuất</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


            <h3>Sửa thông tin</h3>
            <form action="" method="POST" enctype="multipart/form-data" id="addtin">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Tên</label>
                        <input name="name" class="form-control" value="<?=$edit['Name']?>">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Miêu tả</label>
                        <textarea name="detail" id="editor1">
                            <?=$edit['Detail']?>
                        </textarea>
                        <script>
                    // Replace the <textarea id="editor1"> with a CKEditor
                    // instance, using default configuration.
                    CKEDITOR.replace( 'editor1' );
                </script>
            </div>
            <div class="form-group col-sm-6">
                <label>Giá mới</label>
                <input type="number" name="pricenew" class="form-control" required value="<?=$edit['PriceNew']?>">
            </div>
            <div class="form-group col-sm-6">
                <label>Giá cũ</label>
                <input type="number" name="price" class="form-control" required value="<?=$edit['Price']?>">
            </div>
            <div class="form-group col-sm-6">
                <label>Số lượng</label>
                <input type="number" name="quantity" class="form-control" required value="<?=$edit['Quantity']?>">
            </div>
            <div class="form-group col-sm-6">
                <label>Loại giày</label>
                <select name="grproduct" class="form-control">
                  <option value="1">Nike</option>
                  <option value="2">Adidas</option>
                  <option value="3">Converse</option>
                  <option value="4">Jordan</option>
              </select>
          </div>
          <div class="form-group col-sm-6">
            <label>HÌNH ẢNH</label>
            <input  type="file" class="form-control" name="Image">
        </div>
        <div class="form-group col-sm-6">
            <label>HÌNH ẢNH 2 </label>
            <input  type="file" class="form-control" name="Image1">
        </div>
        <div class="form-group col-sm-6">
            <label>HÌNH ẢNH 3</label>
            <input  type="file" class="form-control" name="Image2">
        </div>
    </div>

    <div class="form-group col-sm-12">
        <input name="edit" type="submit" value="Sửa" class="btn btn-success">
        <input type="reset" type="submit" class="btn btn-danger" value="Nhập lại">
        <a href="" class="btn btn-primary">Danh sách</a>
    </div>
</div>
</form>
</div>
</div>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://localhost/web/public/js/admin.js" type="text/javascript"></script>
<script src="http://localhost/web/public/plugin/ckeditor.js"></script>
</body>

</html>