<?php
if(!isset($_SESSION)){
    session_start();
    require_once '../classes/Dashboard.php';
    $obj = new Dashboard();

  $orders = $obj->getOrders();

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

    <!-- Datatables css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/datatables.css">

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
                                <h3>Orders
                                    <small>The Laser Gift Shop Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Sales</li>
                                <li class="breadcrumb-item active">Orders</li>
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
                                <h5>Manage Order</h5>
                            </div>
                            <div class="card-body order-datatable">
                                <table class="display" id="basic-1">
                                    <thead>
                                    <tr>
                                        <th>Order Id</th>
                                        <th>Product</th>
                                        <th>Payment Status</th>
                                        <th>Payment Method</th>
                                        <th>Order Status</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>#51240</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/25.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/13.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/16.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-secondary">Cash On Delivery</span></td>
                                        <td>Paypal</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Dec 10,18</td>
                                        <td>$54671</td>
                                    </tr>
                                    <tr>
                                        <td>#51241</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/12.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/3.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Master Card</td>
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Feb 15,18</td>
                                        <td>$2136</td>
                                    </tr>
                                    <tr>
                                        <td>#51242</td>
                                        <td><img src="../assets/images/electronics/product/14.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded"></td>
                                        <td><span class="badge badge-warning">Awaiting Authentication</span></td>
                                        <td>Debit Card</td>
                                        <td><span class="badge badge-warning">Processing</span></td>
                                        <td>Mar 27,18</td>
                                        <td>$8791</td>
                                    </tr>
                                    <tr>
                                        <td>#51243</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/6.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/furniture/8.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger">Payment Failed</span></td>
                                        <td>Master Card</td>
                                        <td><span class="badge badge-danger">Cancelled</span></td>
                                        <td>Sep 1,18</td>
                                        <td>$139</td>
                                    </tr>
                                    <tr>
                                        <td>#51244</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/jewellery/pro/18.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/fashion/pro/06.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Paypal</td>
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>May 18,18</td>
                                        <td>$4678</td>
                                    </tr>
                                    <tr>
                                        <td>#51245</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/20.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/23.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Visa</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Jan 14,18</td>
                                        <td>$6791</td>
                                    </tr>
                                    <tr>
                                        <td>#51246</td>
                                        <td><img src="../assets/images/electronics/product/24.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded"></td>
                                        <td><span class="badge badge-warning">Awaiting Authentication</span></td>
                                        <td>Credit Card</td>
                                        <td><span class="badge badge-warning">Processing</span></td>
                                        <td>Apr 22,18</td>
                                        <td>$976</td>
                                    </tr>
                                    <tr>
                                        <td>#51247</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/21.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/8.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger">Payment Failed</span></td>
                                        <td>Master Card</td>
                                        <td><span class="badge badge-danger">Cancelled</span></td>
                                        <td>Mar 26,18</td>
                                        <td>$3212</td>
                                    </tr>
                                    <tr>
                                        <td>#51248</td>
                                        <td><img src="../assets/images/electronics/product/18.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded"></td>
                                        <td><span class="badge badge-secondary">Cash On Delivery</span></td>
                                        <td>Paypal</td>
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Feb 29,18</td>
                                        <td>$6719</td>
                                    </tr>
                                    <tr>
                                        <td>#51249</td>
                                        <td><img src="../assets/images/electronics/product/17.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded"></td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Master Card</td>
                                        <td><span class="badge badge-secondary">Processing</span></td>
                                        <td>Sep 2,18</td>
                                        <td>$9765</td>
                                    </tr>
                                    <tr>
                                        <td>#51250</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/7.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/4.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Credit Card</td>
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Dec 10,18</td>
                                        <td>$9706</td>
                                    </tr>
                                    <tr>
                                        <td>#51251</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/22.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/20.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-secondary">Cash On Delivered</span></td>
                                        <td>Paypal</td>
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Feb 15,18</td>
                                        <td>$1500</td>
                                    </tr>
                                    <tr>
                                        <td>#51252</td>
                                        <td>
                                            <img src="../assets/images/electronics/product/3.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                        </td>
                                        <td><span class="badge badge-danger">Payment Failed</span></td>
                                        <td>Credit Card</td>
                                        <td><span class="badge badge-danger">Cancelled</span></td>
                                        <td>Mar 27,18</td>
                                        <td>$18.97</td>
                                    </tr>
                                    <tr>
                                        <td>#51253</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/11.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/2.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/9.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Visa</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Mar 30,18</td>
                                        <td>$3478</td>
                                    </tr>
                                    <tr>
                                        <td>#51254</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/pro/4.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/pro/5.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-warning">Awaiting Authentication</span></td>
                                        <td>0.80 %</td>
                                        <td><span class="badge badge-warning">Processing</span></td>
                                        <td>Apr 5,18</td>
                                        <td>$9672</td>
                                    </tr>
                                    <tr>
                                        <td>#51255</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/fashion/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/fashion/product/14.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-secondary">Cash On Delivered</span></td>
                                        <td>0.70 %</td>
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Apr 8,18</td>
                                        <td>$59.76</td>
                                    </tr>
                                    <tr>
                                        <td>#51256</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/furniture/6.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/furniture/product/4.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/furniture/7.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger">Payment Failed</span></td>
                                        <td>Paypal</td>
                                        <td><span class="badge badge-danger">Cancelled</span></td>
                                        <td>Apr 12,18</td>
                                        <td>$37.60</td>
                                    </tr>
                                    <tr>
                                        <td>#51257</td>
                                        <td>
                                            <img src="../assets/images/furniture/product/16.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                        </td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Credit Card</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Apr 15,18</td>
                                        <td>$86.53</td>
                                    </tr>
                                    <tr>
                                        <td>#51258</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/furniture/product/6.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/furniture/product/19.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Master Card</td>
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Apr 20,18</td>
                                        <td>$97.06</td>
                                    </tr>
                                    <tr>
                                        <td>#51259</td>
                                        <td><img src="../assets/images/flower/blog/insta/8.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded"></td>
                                        <td><span class="badge badge-warning">Awaiting Authentication</span></td>
                                        <td>Credit Card</td>
                                        <td><span class="badge badge-warning">processing</span></td>
                                        <td>Apr 24,18</td>
                                        <td>$16.78</td>
                                    </tr>
                                    <tr>
                                        <td>#51260</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/22.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/20.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-secondary">Cash On Delivery</span></td>
                                        <td>Paypal</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Apr 27,18</td>
                                        <td>$86.00</td>
                                    </tr>
                                    <tr>
                                        <td>#51261</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/20.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/23.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Credit Card</td>
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>May 1,18</td>
                                        <td>$17.84</td>
                                    </tr>
                                    <tr>
                                        <td>#51262</td>
                                        <td><img src="../assets/images/electronics/product/24.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded"></td>
                                        <td><span class="badge badge-danger">Payment Failed</span></td>
                                        <td>Master Card</td>
                                        <td><span class="badge badge-danger">Cancelled</span></td>
                                        <td>May 8,18</td>
                                        <td>$35.07</td>
                                    </tr>
                                    <tr>
                                        <td>#51263</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/furniture/product/6.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/furniture/product/19.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Paypal</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Jun 4,18</td>
                                        <td>$5.67</td>
                                    </tr>
                                    <tr>
                                        <td>#51264</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/pro/4.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/pro/5.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-warning">Awaiting Authentication</span></td>
                                        <td>Master Card</td>
                                        <td><span class="badge badge-warning">processing</span></td>
                                        <td>Apr 30,18</td>
                                        <td>$6.134</td>
                                    </tr>
                                    <tr>
                                        <td>#51265</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/furniture/6.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/furniture/product/4.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/furniture/7.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Credit Card</td>
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Jul 16,18</td>
                                        <td>$74.12</td>
                                    </tr>
                                    <tr>
                                        <td>#51266</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/7.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/4.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-secondary">Cash On Delivery</span></td>
                                        <td>Paypal</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Aug 25,18</td>
                                        <td>$16.70</td>
                                    </tr>
                                    <tr>
                                        <td>#51267</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/20.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/23.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">paid</span></td>
                                        <td>Paypal</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Sep 7,18</td>
                                        <td>$9.706</td>
                                    </tr>
                                    <tr>
                                        <td>#51268</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/fashion/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/fashion/product/14.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger">Payment Failed</span></td>
                                        <td>Master Card</td>
                                        <td><span class="badge badge-danger">Cancelled</span></td>
                                        <td>Oct 19,18</td>
                                        <td>$67.04</td>
                                    </tr>
                                    <tr>
                                        <td>#51269</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/11.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/2.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/9.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Credit Card</td>
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Apr 12,18</td>
                                        <td>$867</td>
                                    </tr>
                                    <tr>
                                        <td>#51270</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/fashion/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/fashion/product/14.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Master Card</td>
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Sep 13,18</td>
                                        <td>$70.8</td>
                                    </tr>
                                    <tr>
                                        <td>#51271</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/20.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/23.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-warning">Awaiting Authentication</span></td>
                                        <td>Paypal</td>
                                        <td><span class="badge badge-warning">Processing</span></td>
                                        <td>Aug 24,18</td>
                                        <td>$70.41</td>
                                    </tr>
                                    <tr>
                                        <td>#51272</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/furniture/product/6.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/furniture/product/19.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger">Payment Failed</span></td>
                                        <td>Credit Card</td>
                                        <td><span class="badge badge-danger">Cancelled</span></td>
                                        <td>Nov, 6,18</td>
                                        <td>$86.7</td>
                                    </tr>
                                    <tr>
                                        <td>#51273</td>
                                        <td><img src="../assets/images/flower/blog/insta/8.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded"></td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Master Card</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Dec 17,18</td>
                                        <td>$19.47</td>
                                    </tr>
                                    <tr>
                                        <td>#51274</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/11.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/2.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/9.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Master Card</td>
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Nov 29,18</td>
                                        <td>$7.48</td>
                                    </tr>
                                    <tr>
                                        <td>#51275</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/20.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/23.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Master Card</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Jan 11,18</td>
                                        <td>$8.67</td>
                                    </tr>
                                    <tr>
                                        <td>#51276</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/pro/4.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/pro/5.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-warning">Awaiting Authentication</span></td>
                                        <td>Paypal</td>
                                        <td><span class="badge badge-warning">Processing</span></td>
                                        <td>Feb 12,18</td>
                                        <td>$8.607</td>
                                    </tr>
                                    <tr>
                                        <td>#51277</td>
                                        <td>
                                            <img src="../assets/images/electronics/product/24.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                        </td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Paypal</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Apr 2,18</td>
                                        <td>$347</td>
                                    </tr>
                                    <tr>
                                        <td>#51278</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/7.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/4.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger">Payment Failed</span></td>
                                        <td>Credit Card</td>
                                        <td><span class="badge badge-danger">Cancelled</span></td>
                                        <td>May 5,18</td>
                                        <td>$100</td>
                                    </tr>
                                    <tr>
                                        <td>#51279</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/20.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/23.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-warning">Awaiting Authentication</span></td>
                                        <td>Paypal</td>
                                        <td><span class="badge badge-warning">processing</span></td>
                                        <td>Jun 8,18</td>
                                        <td>$546.01</td>
                                    </tr>
                                    <tr>
                                        <td>#51280</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/fashion/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/fashion/product/14.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Credit Card</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Jan 19,18</td>
                                        <td>$7.154</td>
                                    </tr>
                                    <tr>
                                        <td>#51281</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/11.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/2.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/9.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Master Card</td>
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Apr 30,18</td>
                                        <td>$58.47</td>
                                    </tr>
                                    <tr>
                                        <td>#51282</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/furniture/product/6.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/furniture/product/19.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger">Payment Failed</span></td>
                                        <td>Paypal</td>
                                        <td><span class="badge badge-danger">Cancelled</span></td>
                                        <td>Jun 6,18</td>
                                        <td>$370.0</td>
                                    </tr>
                                    <tr>
                                        <td>#51283</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/20.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/23.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-warning">Awaiting Authentication</span></td>
                                        <td>Master Card</td>
                                        <td><span class="badge badge-warning">Processing</span></td>
                                        <td>Aug 10,18</td>
                                        <td>$9.76</td>
                                    </tr>
                                    <tr>
                                        <td>#51284</td>
                                        <td><img src="../assets/images/flower/blog/insta/8.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded"></td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Credit Card</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Sep 16,18</td>
                                        <td>$79.14</td>
                                    </tr>
                                    <tr>
                                        <td>#51285</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/furniture/product/6.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/furniture/product/19.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Master Card</td>
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Jun 7,18</td>
                                        <td>$15.00</td>
                                    </tr>
                                    <tr>
                                        <td>#51286</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/20.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/23.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger">Payment Failed</span></td>
                                        <td>Credit Card</td>
                                        <td><span class="badge badge-danger">Cancelled</span></td>
                                        <td>Apr 11,18</td>
                                        <td>$94.26</td>
                                    </tr>
                                    <tr>
                                        <td>#51287</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/furniture/product/6.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/furniture/product/19.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Paypal</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Mar 26,18</td>
                                        <td>$78.86</td>
                                    </tr>
                                    <tr>
                                        <td>#51288</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/pro/4.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/pro/5.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Credit Card</td>
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Jun 24,18</td>
                                        <td>$67.18</td>
                                    </tr>
                                    <tr>
                                        <td>#51289</td>
                                        <td>
                                            <img src="../assets/images/electronics/product/24.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                        </td>
                                        <td><span class="badge badge-warning">Awaiting Authentication</span></td>
                                        <td>Master Card</td>
                                        <td><span class="badge badge-warning">Processing</span></td>
                                        <td>Apr 12,18</td>
                                        <td>$96.71</td>
                                    </tr>
                                    <tr>
                                        <td>#51290</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/20.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/23.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-warning">Awaiting Authentication</span></td>
                                        <td>Paypal</td>
                                        <td><span class="badge badge-warning">Processing</span></td>
                                        <td>Jul 20,18</td>
                                        <td>$86.7</td>
                                    </tr>
                                    <tr>
                                        <td>#51291</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/7.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/4.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Credit Card</td>
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Aug 9,18</td>
                                        <td>$867</td>
                                    </tr>
                                    <tr>
                                        <td>#51292</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/furniture/product/6.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/furniture/product/19.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger">Payment Failed</span></td>
                                        <td>Master Card</td>
                                        <td><span class="badge badge-danger">Cancelled</span></td>
                                        <td>Jan 10,18</td>
                                        <td>$16.78</td>
                                    </tr>
                                    <tr>
                                        <td>#51293</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/25.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/13.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/16.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Paypal</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Sep 5,18</td>
                                        <td>$57.14</td>
                                    </tr>
                                    <tr>
                                        <td>#51294</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/11.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/9.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Credit Card</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Nov 16,18</td>
                                        <td>$74.45</td>
                                    </tr>
                                    <tr>
                                        <td>#51294</td>
                                        <td>
                                            <img src="../assets/images/flower/blog/insta/8.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                        </td>
                                        <td><span class="badge badge-danger">Payment Failed</span></td>
                                        <td>Master Card</td>
                                        <td><span class="badge badge-danger">Cancelled</span></td>
                                        <td>Apr 12,18</td>
                                        <td>$864</td>
                                    </tr>
                                    <tr>
                                        <td>#51295</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/fashion/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/fashion/product/14.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>Credit Card</td>
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Dec 19,18</td>
                                        <td>$19.78</td>
                                    </tr>
                                    </tbody>
                                </table>
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

<!-- Datatable js-->
<script src="../assets/js/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/js/datatables/custom-basic.js"></script>

<!--Customizer admin-->
<script src="../assets/js/admin-customizer.js"></script>

<!-- lazyload js-->
<script src="../assets/js/lazysizes.min.js"></script>

<!--right sidebar js-->
<script src="../assets/js/chat-menu.js"></script>

<!--script admin-->
<script src="../assets/js/admin-script.js"></script>

</body>
</html>
<?php } ?>