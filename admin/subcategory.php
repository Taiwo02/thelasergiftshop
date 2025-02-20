<?php
if(!isset($_SESSION)){
        session_start();
if(isset($_SESSION['admin_id'])){
    require_once '../classes/Dashboard.php';
    $obj = new Dashboard();

  $subcats = $obj->getsubcategories();

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Laser Gift Shop admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, The Laser Gift Shop admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/favicon.ico" type="image/x-icon">
    <title>The Laser Gift Shop - Admin</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">

    <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/jsgrid.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
</head>
<body>


<!-- page-wrapper Start-->
<div class="page-wrapper">

    <!-- Page Header Start-->
    <?php include_once "navbar.php" ?>
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        <?php include_once "nav.php" ?>
        <!-- Page Sidebar Ends-->


        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Sub Category
                                    <small>The Laser Gift Shop Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="dashboard"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Sub Category</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Sub Category</h5>
                            </div>
                            <div class="card-body">
                                <div class="btn-popup pull-right">
                                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Add Sub Category</button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Sub Category</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="subcat" class="needs-validation" enctype="multipart/form-data">
                                                        <div class="form">
                                                            <div class="form-group">
                                                                <label for="validationCustom01" class="mb-1">Sub Category Name :</label>
                                                                <input class="form-control" name="name" id="validationCustom01" type="text">
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <label for="validationCustom02" class="mb-1">Sub Category Image :</label>
                                                                <input class="form-control" name="image" id="validationCustom02" type="file">
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <label class="col-form-label"><span>*</span> Categories</label>
                                                                <select class="custom-select" required="" name="category" id="cate">
                                                                   
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" value="addsubcategory" name="request">
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-primary" id="btn" type="button">Save</button>
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  
                        </div>
                       
                    </div>
                </div>
                <div class="row">
                    <div class = "col-md-12">
                        <div class="card">
                                                        <div class="card-header">
                                                        <h5>Subcategory Lists</h5>
                                                        </div>
                                                        <div class="card-body"> 
                                                            <div class="col-md-12 cart-table">
                                                                <table class="display" id="basic-1">
                                                                    <thead>
                                                                    <tr class="table-head">
                                                                        <th scope="col">Subcategory id</th>
                                                                        <th scope="col">Name</th>
                                                                        <th scope="col">Image</th>
                                                                        <th scope="col">Category</th>
                                                                    </tr>
                                                                    </thead>
                                                                        <?php foreach ($subcats as $subcat){ ?>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><?php echo $subcat['sub_cat_id'] ?></td>
                                                                    
                                                                        <td> <?php echo $subcat['name'];?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="#"><img src="../assets/images/products/<?php echo $subcat['image'];?>" alt="subcategory" class="img-thumbnail mx-auto d-block" style="width:100px; height:100px;"></a>
                                                                        </td>
                                                                        <td><?php echo $subcat['category']; ?></td>
                                                                        <!-- <td>
                                                                            <a href="edit?id=<?php echo $subcat['sub_cat_id']?>" class="icon"><i class="fa fa-pencil"></i></a>
                                                                            <a href="delete?id=<?php echo $subcat['sub_cat_id']?>" class="icon"><i class="fa fa-trash"></i></a>
                                                                    </td> -->
                                                                    </tr>
                                                                    
                                                                    </tbody>
                                                                    <?php } ?>
                                                                    
                                                                    
                                                                </table>
                                                            </div>
                                                        </div>
                                </div>
                        </div>
                    </div>
                </div>    
            <!-- Container-fluid Ends-->

            </div>

        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        <p class="mb-0">Copyright 2019 © The Laser Gift Shop All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end-->

    </div>

</div>

<!-- latest jquery-->
<script src="../assets/js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js-->
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.js"></script>

<!-- feather icon js-->
<script src="../assets/js/icons/feather-icon/feather.min.js"></script>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>

<!-- Sidebar jquery-->
<script src="../assets/js/sidebar-menu.js"></script>

<!-- Jsgrid js-->
<script src="../assets/js/jsgrid/jsgrid.min.js"></script>
<script src="../assets/js/jsgrid/griddata-digital-sub.js"></script>
<script src="../assets/js/jsgrid/jsgrid-digital-sub.js"></script>

<!--Customizer admin-->
<script src="../assets/js/admin-customizer.js"></script>

<!-- lazyload js-->
<script src="../assets/js/lazysizes.min.js"></script>

<!--right sidebar js-->
<script src="../assets/js/chat-menu.js"></script>

<!--script admin-->
<script src="../assets/js/admin-script.js"></script>
<script>
$(document).ready(function(){
    let categories;
    $.post('admin.php',{request:'getcategories'},function(data){
        categories = JSON.parse(data);
        cat ="<option value=''>--Select--</option>";
        for(c in categories){
            cat += "<option value='"+ categories[c].cat_id+"'>"+ categories[c].name+"</option>";
        }
        $('#cate').html(cat);
    })
    $('#btn').click(function(){
        var formData = new FormData($('#subcat')[0]);
   
                                let uploadsucess;
                                          $.ajax({
                                              type: 'POST',
                                              url: 'admin.php',
                                              data: formData,
                                              data: formData,
                                              processData: false,
                                              contentType: false,
                                              success: function (data) {
                              
                                              }
                                      });
                                    
    })
})
</script>
</body>
</html>
<?php }
} else {
    header("location: index.php");
}
?>
