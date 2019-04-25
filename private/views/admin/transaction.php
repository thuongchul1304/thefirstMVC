<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Quản Lý Transaction</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="http://localhost/web/public/css/admin.css">

    <!-- Font Awesome JS -->

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
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Quản Trị WEB</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="http://localhost/web/admin/index/index">Index</a>
                        </li>
                        <li>
                            <a href="http://localhost/web/admin/transaction/index">Manager Transactions</a>
                        </li>
                        <li>
                            <a href="ds-ung-tuyen.php">Manager Order Details</a>
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
                         <li> <a class="nav-link btn btn-danger" href="#">Administrator</a></li>&emsp;
                         <li> <a class="nav-link btn btn-success" href="../../index.php">HOME</a></li>&emsp;
                     </ul>

                 </div>
             </div>
         </nav>


         <h3>List</h3>
         <form action="" method="post">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Customer Name</th>
                        <th>Customer Email </th>
                        <th>Customer Phone</th>
                        <th>Amount</th>
                        <th>Message</th>
                        <th>Security</th>
                        <th>Status</th>
                        <th>Address</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($result as $key => $value): ?>
                        <tr>
                            <th>
                                <a href="detail/<?=$value['Id']?>" title="" style="color:red"><?=$value['user_name']?>                                    
                            </a>
                        </th>
                        <th><?=$value['user_email']?></th>
                        <th><?=$value['user_phone']?></th>
                        <th><?=$value['amount']?></th>
                        <th><?=$value['message']?></th>
                        <th><?=$value['security']?></th>
                        <th><?=$value['status']?></th>
                        <th><?=$value['Address']?></th>
                        <th><?=$value['created']?></th>

                        <?php if ($value['status']==0): ?>
                         <th>
                            <a href="?action=0&id=<?=$value['Id']?>" title="" class="btn btn-success">Accept</a>
                        </th>
                        <th> 
                            <a href="?action=1&id=<?=$value['Id']?>" title="" class="btn btn-danger">Refuse</a>
                        </th>
                        <?php else: ?>
                            <th>Đã xử lý</th>
                        <?php endif ?>



                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </form>


</div>
</div>

</body>
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

<script>
    function ConfirmDelete(msg)
    {
        var x = confirm(msg);
        if (x)
            return true;
        else
            return false;
    }
</script>
</html>