<?php
if(!isset($_SESSION)){
    session_start();
    require_once 'classes/Dashboard.php';
    $obj = new Dashboard();

    $product = $obj->getProducts();
    $bestselling = $obj->getBestSelling();
    $featured = $obj->getFeatured();
    $categories = $obj->getCategories();
    $subcat = $obj->getSubcategories();
    $a = count($featured);    
    $b = count($bestselling);
     
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>The Laser Gift Shop</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="big-deal">
    <meta name="keywords" content="big-deal">
    <meta name="author" content="big-deal">
    <link rel="icon" href="assets/images/favicon/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon/favicon.ico" type="image/x-icon">

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

    <!--icon css-->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/themify.css">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

    <!--Animate css-->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="assets/css/color1.css" media="screen" id="color">
    <style>
    .bacgr{
        background-color:white !important;
    }
    .textColo{
        color:black !important;
    }
    .cardList p{
        color:black
    }
    .cardList{
        background-color:white !important;
        border-radius:10px;
    }
    body{
        background-color:white !important;
    }
    .rounded-category {
        background-color:#f8f9fa !important;
        border-radius: 30px;
        margin :30px;
       
    }
    .testimonial {
        background-color:#f8f9fa !important;
        border-radius: 30px;
        margin :30px;
       
    }
   .rounded-category .btn-rounded {
        background-color: #ff76af !important;
        color:#1d3361 !important;
    
   }
   .slider-banner {
    border-radius: 30px !important;
        margin :30px !important;
   }
    /* .sliderses{
        background-color:#f8f9fa !important;

    } */
    </style>
  </head>
  <body>

    <!-- loader start -->
    <div class="loader-wrapper">
        <div>
            <img src="assets/images/loader.gif" alt="loader">
        </div>
    </div>
    <!-- loader end -->

    <!--header start-->
    <?php include_once "navs.php"; ?>
    <!--header end-->

    <!--slider start-->
    <section class="theme-slider section-pt-space ">
        <div class="container-fluid ">
            <div class="row ">
                <div class="col-12 p-0 ">
                    <div class="slide-1 no-arrow ">
                        <div class="slid"> 
                            <div class="slider-banner slide-banner-4">
                                <div class="slider-img ">
                                    <ul class="layout5-slide-1">
                                        <li id="img-1"><img src="assets/images/layout-5/slider/1.1.png" class="img-fluid" alt="slider"></li>
                                    </ul>
                                </div>
                                <div class="slider-banner-contain">
                                    <div>
                                        <h3>100'<small>s</small> of </h3>
                                        <h1>Gift Items</h1>
                                        <h2>Personalized for free</h2>
                                        <a href="#categor" class="btn btn-normal">
                                            shop now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slid">
                            <div class="slider-banner slide-banner-4">
                                <div class="slider-img">
                                    <ul class="layout5-slide-2">
                                        <li id="img-2"><img src="assets/images/layout-5/slider/1.2.png" class="img-fluid" alt="slider"></li>
                                    </ul>
                                </div>
                                <div class="slider-banner-contain">
                                    <div>
                                        <h3>We stock various</h3>
                                        <h1>gifts suitable for all ocassions</h1>
                                        <h2>Browse Our Categories to be inspired</h2>
                                        <a href="#categor" class="btn btn-normal">
                                            shop now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slid">
                            <div class="slider-banner slide-banner-4">
                                <div class="slider-img">
                                    <ul class="layout5-slide-3">
                                        <li id="img-3"><img src="assets/images/layout-5/slider/1.3.png" class="img-fluid" alt="slider"></li>
                                    </ul>
                                </div>
                                <div class="slider-banner-contain">
                                    <div>
                                        <h3>Free Gift</h3>
                                        <h1>with every order</h1>
                                        <h2>enjoy a free gift from us with every purchase</h2>
                                        <a href="#categor" class="btn btn-normal">
                                            shop now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider end-->

    <!--services start-->
    <section class="services services-inverse bacgr" >
        <div class="container">
            <div class="row service-block">
                <div class="col-lg-4 col-md-6  col-sm-12">
                    <div class="media">
                        <svg height="679pt" viewBox="0 -117 679.99892 679" width="679pt" xmlns="http://www.w3.org/2000/svg"><path fill="black" d="m12.347656 378.382812h37.390625c4.371094 37.714844 36.316407 66.164063 74.277344 66.164063 37.96875 0 69.90625-28.449219 74.28125-66.164063h241.789063c4.382812 37.714844 36.316406 66.164063 74.277343 66.164063 37.96875 0 69.902344-28.449219 74.285157-66.164063h78.890624c6.882813 0 12.460938-5.578124 12.460938-12.460937v-352.957031c0-6.882813-5.578125-12.464844-12.460938-12.464844h-432.476562c-6.875 0-12.457031 5.582031-12.457031 12.464844v69.914062h-105.570313c-4.074218.011719-7.890625 2.007813-10.21875 5.363282l-68.171875 97.582031-26.667969 37.390625-9.722656 13.835937c-1.457031 2.082031-2.2421872 4.558594-2.24999975 7.101563v121.398437c-.09765625 3.34375 1.15624975 6.589844 3.47656275 9.003907 2.320312 2.417968 5.519531 3.796874 8.867187 3.828124zm111.417969 37.386719c-27.527344 0-49.851563-22.320312-49.851563-49.847656 0-27.535156 22.324219-49.855469 49.851563-49.855469 27.535156 0 49.855469 22.320313 49.855469 49.855469 0 27.632813-22.21875 50.132813-49.855469 50.472656zm390.347656 0c-27.53125 0-49.855469-22.320312-49.855469-49.847656 0-27.535156 22.324219-49.855469 49.855469-49.855469 27.539063 0 49.855469 22.320313 49.855469 49.855469.003906 27.632813-22.21875 50.132813-49.855469 50.472656zm140.710938-390.34375v223.34375h-338.375c-6.882813 0-12.464844 5.578125-12.464844 12.460938 0 6.882812 5.582031 12.464843 12.464844 12.464843h338.375v79.761719h-66.421875c-4.382813-37.710937-36.320313-66.15625-74.289063-66.15625-37.960937 0-69.898437 28.445313-74.277343 66.15625h-192.308594v-271.324219h89.980468c6.882813 0 12.464844-5.582031 12.464844-12.464843 0-6.882813-5.582031-12.464844-12.464844-12.464844h-89.980468v-31.777344zm-531.304688 82.382813h99.703125v245.648437h-24.925781c-4.375-37.710937-36.3125-66.15625-74.28125-66.15625-37.960937 0-69.90625 28.445313-74.277344 66.15625h-24.929687v-105.316406l3.738281-5.359375h152.054687c6.882813 0 12.460938-5.574219 12.460938-12.457031v-92.226563c0-6.882812-5.578125-12.464844-12.460938-12.464844h-69.796874zm-30.160156 43h74.777344v67.296875h-122.265625zm0 0"/></svg>
                        <div class="media-body ">
                            <h5 class="textColo">free shipping</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  col-sm-12">
                    <div class="media">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    	 viewBox="0 0 417.12 417.12" style="enable-background:new 0 0 417.12 417.12;" xml:space="preserve">
    <g>
    	<g>
    		<path fill="black" d="M409.12,200.741c-4.418,0-8,3.582-8,8c-0.06,106.525-86.464,192.831-192.988,192.772
    			C101.607,401.453,15.3,315.049,15.36,208.524C15.42,102,101.824,15.693,208.348,15.753c51.36,0.029,100.587,20.54,136.772,56.988
    			l-17.84-0.72c-4.418,0-8,3.582-8,8s3.582,8,8,8l36.72,1.52c1.013,0.003,2.018-0.188,2.96-0.56l0.88-0.56
    			c1.381-0.859,2.534-2.039,3.36-3.44c0.034-0.426,0.034-0.854,0-1.28c0.183-0.492,0.317-1.001,0.4-1.52l3.2-36.72
    			c0.376-4.418-2.902-8.304-7.32-8.68s-8.304,2.902-8.68,7.32l-1.6,18.16c-80.799-82.092-212.848-83.14-294.939-2.341
    			s-83.14,212.848-2.341,294.939s212.848,83.14,294.939,2.341c39.786-39.159,62.212-92.635,62.261-148.459
    			C417.12,204.323,413.538,200.741,409.12,200.741z"/>
    	</g>
    </g>
    <g>
    	<g>
    		<path fill="black" d="M200.4,256.341c-3.716-2.516-8.162-3.726-12.64-3.44h-56c1.564-2.442,3.302-4.768,5.2-6.96
    			c6.727-7.402,14.088-14.201,22-20.32c10.667-8.747,18.293-15.147,22.88-19.2c5.252-4.976,9.752-10.689,13.36-16.96
    			c4.377-7.234,6.649-15.545,6.56-24c-0.009-11.177-4.27-21.931-11.92-30.08c-3.725-3.941-8.181-7.12-13.12-9.36
    			c-8.709-3.645-18.08-5.443-27.52-5.28c-8.048-0.163-16.055,1.194-23.6,4c-6.2,2.328-11.862,5.894-16.64,10.48
    			c-4.219,4.117-7.565,9.042-9.84,14.48c-2.098,4.853-3.213,10.074-3.28,15.36c-0.192,3.547,1.081,7.018,3.52,9.6
    			c2.345,2.352,5.56,3.626,8.88,3.52c3.499,0.231,6.903-1.19,9.2-3.84c2.503-3.303,4.424-7.01,5.68-10.96
    			c0.939-3.008,2.144-5.926,3.6-8.72c4.562-7.738,12.94-12.416,21.92-12.24c4.114,0.077,8.149,1.147,11.76,3.12
    			c3.625,1.82,6.693,4.583,8.88,8c2.194,3.673,3.329,7.882,3.28,12.16c-0.067,4.437-1.105,8.806-3.04,12.8
    			c-2.129,4.829-5.019,9.286-8.56,13.2c-4.419,4.617-9.298,8.772-14.56,12.4c-5.616,4.247-10.96,8.843-16,13.76
    			c-7.787,7.04-16.453,15.467-26,25.28c-2.638,2.966-4.773,6.344-6.32,10c-1.632,3.159-2.612,6.614-2.88,10.16
    			c-0.018,3.939,1.605,7.707,4.48,10.4c3.393,3.096,7.896,4.684,12.48,4.4h78.4c3.842,0.312,7.641-0.993,10.48-3.6
    			c2.291-2.379,3.53-5.579,3.44-8.88C204.691,262.051,203.173,258.598,200.4,256.341z"/>
    	</g>
    </g>
    <g>
    	<g>
    		<path fill="black" d="M333.76,222.901c-4.254-1.637-8.809-2.346-13.36-2.08h-4.56v-82.48c0-12.373-5.333-18.56-16-18.56
    			c-3.185-0.052-6.261,1.155-8.56,3.36c-3.331,3.343-6.382,6.956-9.12,10.8l-56.48,75.6l-3.92,5.2c-1.067,1.44-2.107,2.907-3.12,4.4
    			c-0.916,1.374-1.668,2.851-2.24,4.4c-0.475,1.308-0.718,2.689-0.72,4.08c-0.237,4.699,1.607,9.263,5.04,12.48
    			c4.323,3.358,9.742,4.984,15.2,4.56h53.52v20.08c-0.273,4.252,1.006,8.459,3.6,11.84c5.276,5.346,13.887,5.403,19.233,0.127
    			c0.043-0.042,0.085-0.084,0.127-0.127c2.587-3.384,3.866-7.589,3.6-11.84v-20h6.48c4.242,0.298,8.476-0.677,12.16-2.8
    			c2.877-2.141,4.425-5.63,4.08-9.2C339.301,228.744,337.319,224.811,333.76,222.901z M289.36,220.581h-45.84l45.84-61.92V220.581z"
    			/>
    	</g>
    </g>
    </svg>
                        <div class="media-body">
                            <h5 class="textColo">24X7 SERVICE</h5>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6  col-sm-12 ">
                    <div class="media">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 295.82 295.82" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 295.82 295.82">
                            <g>
                                <g>
                                    <path d="m269.719,43.503h-243.617c-13.921,0-26.102,12.181-26.102,26.102v156.611c0,13.921 12.181,26.102 26.102,26.102h243.617c13.921,0 26.102-12.181 26.102-26.102v-156.611c-0.001-13.921-12.182-26.102-26.102-26.102zm-243.617,17.401h243.617c5.22,0 8.701,3.48 8.701,8.701v13.921h-261.019v-13.921c-1.06581e-14-5.22 3.481-8.701 8.701-8.701zm252.317,40.023v13.921h-261.018v-13.921h261.018zm-8.7,133.989h-243.617c-5.22,0-8.701-3.48-8.701-8.701v-93.966h261.018v93.966c0,5.221-3.48,8.701-8.7,8.701z"/>
                                    <path d="m45.243,172.272h45.243c5.22,0 8.701-3.48 8.701-8.701 0-5.22-3.48-8.701-8.701-8.701h-45.243c-5.22,0-8.701,3.48-8.701,8.701 0.001,5.221 3.481,8.701 8.701,8.701z"/>
                                    <path d="m151.391,191.413h-106.148c-5.22,0-8.701,3.48-8.701,8.701s3.48,8.701 8.701,8.701h106.147c3.48,0 8.701-3.48 8.701-8.701s-3.48-8.701-8.7-8.701z"/>
                                </g>
                            </g>
                        </svg>
                        <div class="media-body">
                            <h5>EASY RETURN</h5>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-4 col-md-6  col-sm-12 ">
                    <div class="media">
                        <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    	                    viewBox="0 0 448 448" style="enable-background:new 0 0 448 448;" xml:space="preserve">
        <g>
            <g>
                <g>
                    <path fill="black" d="M384,172.4C384,83.6,312.4,12,224,12S64,83.6,64,172c0,0,0,0,0,0.4C28.4,174.4,0,204,0,240v8c0,37.6,30.4,68,68,68h3.6
                        l28.4,45.2c20,32,54,50.8,91.6,50.8h5.6c3.6,13.6,16,24,30.8,24c17.6,0,32-14.4,32-32c0-17.6-14.4-32-32-32
                        c-14.8,0-27.2,10.4-30.8,24h-5.6c-32,0-61.2-16.4-78-43.6L90.4,316H96c8.8,0,16-7.2,16-16V188c0-8.8-7.2-16-16-16H80
                        c0-79.6,64.4-144,144-144s144,64.4,144,144h-16c-8.8,0-16,7.2-16,16v112c0,8.8,7.2,16,16,16h28c37.6,0,68-30.4,68-68v-8
                        C448,204,419.6,174.4,384,172.4z M228,388c8.8,0,16,7.2,16,16s-7.2,16-16,16s-16-7.2-16-16S219.2,388,228,388z M96,188v112H68
                        c-28.8,0-52-23.2-52-52v-8c0-28.8,23.2-52,52-52H96z M432,248c0,28.8-23.2,52-52,52h-28V188h28c28.8,0,52,23.2,52,52V248z"/>
                    <path d="M290.4,72.4c-0.8-0.4-2-1.2-3.2-2c-1.2-0.8-2.4-1.6-3.2-2c-3.6-2.4-8.8-1.2-10.8,2.8S272,79.6,276,82
                        c0.8,0.4,2,1.2,3.2,2s2.4,1.6,3.6,2c1.2,0.8,2.8,1.2,4,1.2c2.8,0,5.2-1.2,6.8-4C295.6,79.6,294.4,74.8,290.4,72.4z"/>
                    <path d="M224,52c-34,0-66,14.8-88,40.4c-2.8,3.2-2.4,8.4,0.8,11.2c1.6,1.2,3.2,2,5.2,2c2.4,0,4.4-0.8,6-2.8
                        c19.2-22,46.8-34.8,76-34.8c7.2,0,14.4,0.8,21.6,2.4c4.4,0.8,8.4-2,9.6-6s-2-8.4-6-9.6C240.8,52.8,232.4,52,224,52z"/>
                </g>
            </g>
        </g>
    </svg>
                        <div class="media-body">
                            <h5 class="textColo">ONLINE PAYMENT</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services end-->

    <!-- media banner tab start-->
    <section class=" ratio_square section-big-pt-space">
        <div class="custom-container b-g-white section-pb-space">
            <div class="row">

                <div class="col p-0">
                    <div class="theme-tab product layout-5">
                        <ul class="tabs tab-title media-tab">
                            <li class="current"><a href="tab-7">new product</a></li>
                            <li class=""><a href="tab-8">Feature Products</a></li>
                            <li class=""><a href="tab-9">best Sellers</a></li>
                            <!-- <li class=""><a href="tab-10">On Sale</a></li> -->
                        </ul>
                        <div class="tab-content-cls">
                            <div id="tab-7" class="tab-content active default">
                            
                                    <div class="slide-5 product-m no-arrow">
                                        <div>
                                            <div class="media-banner media-banner-1 border-0 cardList shadow mt-4 mb-4">
                                                        <div class="media-banner-box">
                                                            <div class="media">
                                                                <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $product[0]['image']; ?>" class="img-fluid " alt="banner">
                                                                <div class="media-body">
                                                                    <div class="media-contant">
                                                                        <div>
                                                                            <!-- <div class="rating">
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                            </div> -->
                                                                             <p>
                                                                           <a href="product?id=<?php echo $product[0]['name']; ?>"> <?php echo $product[0]["name"]; ?>
                                                                        </a></p>
                                                                            <h6> &pound; <?php echo $product[0]["price"]; ?></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media-banner-box">
                                                            <div class="media">
                                                                <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $product[1]['image']; ?>" class="img-fluid " alt="banner">
                                                                <div class="media-body">
                                                                    <div class="media-contant">
                                                                        <div>
                                                                            <!-- <div class="rating">
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                            </div> -->
                                                                             <p>
                                                                           <a href="product?id=<?php echo $product[1]['name']; ?>"> <?php echo $product[1]["name"]; ?>
                                                                        </a></p>
                                                                            <h6> &pound; <?php echo $product[1]["price"]; ?></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media-banner-box">
                                                            <div class="media">
                                                                <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $product[2]['image']; ?>" class="img-fluid " alt="banner">
                                                                <div class="media-body">
                                                                    <div class="media-contant">
                                                                        <div>
                                                                            <!-- <div class="rating">
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                            </div> -->
                                                                             <p>
                                                                           <a href="product?id=<?php echo $product[2]['name']; ?>"> <?php echo $product[2]["name"]; ?>
                                                                        </a></p>
                                                                            <h6> &pound; <?php echo $product[2]["price"]; ?></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="media-banner media-banner-1 border-0 cardList shadow mt-4 mb-4">
                                            <div class="media-banner-box">
                                                        <div class="media">
                                                            <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $product[3]['image']; ?>" class="img-fluid " alt="banner">
                                                            <div class="media-body">
                                                                <div class="media-contant">
                                                                    <div>
                                                                        <!-- <div class="rating">
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                        </div> -->
                                                                        <p>
                                                                           <a href="product?id=<?php echo $product[3]['name']; ?>"> <?php echo $product[3]["name"]; ?>
                                                                        </a></p>
                                                                        <h6> &pound; <?php echo $product[3]["price"]; ?></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><div class="media-banner-box">
                                                        <div class="media">
                                                            <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $product[4]['image']; ?>" class="img-fluid " alt="banner">
                                                            <div class="media-body">
                                                                <div class="media-contant">
                                                                    <div>
                                                                        <!-- <div class="rating">
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                        </div> -->
                                                                        <p>
                                                                           <a href="product?id=<?php echo $product[4]['name']; ?>"> <?php echo $product[4]["name"]; ?>
                                                                        </a></p>
                                                                        <h6> &pound; <?php echo $product[4]["price"]; ?></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><div class="media-banner-box">
                                                        <div class="media">
                                                            <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $product[5]['image']; ?>" class="img-fluid " alt="banner">
                                                            <div class="media-body">
                                                                <div class="media-contant">
                                                                    <div>
                                                                        <!-- <div class="rating">
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                        </div> -->
                                                                        <p>
                                                                           <a href="product?id=<?php echo $product[5]['name']; ?>"> <?php echo $product[5]["name"]; ?>
                                                                        </a></p>
                                                                        <h6> &pound; <?php echo $product[5]["price"]; ?></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="media-banner media-banner-1 border-0 cardList shadow mt-4 mb-4">
                                            <div class="media-banner-box">
                                                        <div class="media">
                                                            <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $product[6]['image']; ?>" class="img-fluid " alt="banner">
                                                            <div class="media-body">
                                                                <div class="media-contant">
                                                                    <div>
                                                                        <!-- <div class="rating">
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                        </div> -->
                                                                        <p>
                                                                           <a href="product?id=<?php echo $product[6]['name']; ?>"> <?php echo $product[6]["name"]; ?>
                                                                        </a></p>
                                                                        <h6> &pound; <?php echo $product[6]["price"]; ?></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media-banner-box">
                                                        <div class="media">
                                                            <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $product[7]['image']; ?>" class="img-fluid " alt="banner">
                                                            <div class="media-body">
                                                                <div class="media-contant">
                                                                    <div>
                                                                        <!-- <div class="rating">
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                        </div> -->
                                                                        <p>
                                                                           <a href="product?id=<?php echo $product[7]['name']; ?>"> <?php echo $product[7]["name"]; ?>
                                                                        </a></p>
                                                                        <h6> &pound; <?php echo $product[7]["price"]; ?></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media-banner-box">
                                                        <div class="media">
                                                            <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $product[8]['image']; ?>" class="img-fluid " alt="banner">
                                                            <div class="media-body">
                                                                <div class="media-contant">
                                                                    <div>
                                                                        <!-- <div class="rating">
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                        </div> -->
                                                                        <p>
                                                                           <a href="product?id=<?php echo $product[8]['name']; ?>"> <?php echo $product[8]["name"]; ?>
                                                                        </a></p>
                                                                        <h6> &pound; <?php echo $product[8]["price"]; ?></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div>
                                        <div class="media-banner media-banner-1 border-0 cardList shadow mt-4 mb-4">
                                        <div class="media-banner-box">
                                                        <div class="media">
                                                            <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $product[9]['image']; ?>" class="img-fluid " alt="banner">
                                                            <div class="media-body">
                                                                <div class="media-contant">
                                                                    <div>
                                                                        <!-- <div class="rating">
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                        </div> -->
                                                                        <p>
                                                                           <a href="product?id=<?php echo $product[9]['name']; ?>"> <?php echo $product[9]["name"]; ?>
                                                                        </a></p>
                                                                        <h6> &pound; <?php echo $product[9]["price"]; ?></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><div class="media-banner-box">
                                                        <div class="media">
                                                            <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $product[10]['image']; ?>" class="img-fluid " alt="banner">
                                                            <div class="media-body">
                                                                <div class="media-contant">
                                                                    <div>
                                                                        <!-- <div class="rating">
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                        </div> -->
                                                                        <p>
                                                                           <a href="product?id=<?php echo $product[10]['name']; ?>"> <?php echo $product[10]["name"]; ?>
                                                                        </a></p>
                                                                        <h6> &pound; <?php echo $product[10]["price"]; ?></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><div class="media-banner-box">
                                                        <div class="media">
                                                            <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $product[11]['image']; ?>" class="img-fluid " alt="banner">
                                                            <div class="media-body">
                                                                <div class="media-contant">
                                                                    <div>
                                                                        <!-- <div class="rating">
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                        </div> -->
                                                                        <p>
                                                                           <a href="product?id=<?php echo $product[11]['name']; ?>"> <?php echo $product[11]["name"]; ?>
                                                                        </a></p>
                                                                        <h6> &pound; <?php echo $product[11]["price"]; ?></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>
                                     </div>
                                        <div>
                                            <div class="media-banner media-banner-1 border-0 cardList shadow mt-4 mb-4">
                                            <div class="media-banner-box">
                                                        <div class="media">
                                                            <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $product[12]['image']; ?>" class="img-fluid " alt="banner">
                                                            <div class="media-body">
                                                                <div class="media-contant">
                                                                    <div>
                                                                        <!-- <div class="rating">
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                        </div> -->
                                                                        <p>
                                                                           <a href="product?id=<?php echo $product[12]['name']; ?>"> <?php echo $product[12]["name"]; ?>
                                                                        </a></p>
                                                                        <h6> &pound; <?php echo $product[12]["price"]; ?></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><div class="media-banner-box">
                                                        <div class="media">
                                                            <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $product[13]['image']; ?>" class="img-fluid " alt="banner">
                                                            <div class="media-body">
                                                                <div class="media-contant">
                                                                    <div>
                                                                        <!-- <div class="rating">
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                        </div> -->
                                                                        <p>
                                                                           <a href="product?id=<?php echo $product[13]['name']; ?>"> <?php echo $product[13]["name"]; ?>
                                                                        </a></p>
                                                                        <h6> &pound; <?php echo $product[13]["price"]; ?></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><div class="media-banner-box">
                                                        <div class="media">
                                                            <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $product[14]['image']; ?>" class="img-fluid " alt="banner">
                                                            <div class="media-body">
                                                                <div class="media-contant">
                                                                    <div>
                                                                        <!-- <div class="rating">
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                        </div> -->
                                                                        <p>
                                                                           <a href="product?id=<?php echo $product[14]['name']; ?>"> <?php echo $product[14]["name"]; ?>
                                                                        </a></p>
                                                                        <h6> &pound; <?php echo $product[14]["price"]; ?></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>
                                        </div>
                                    </div>  
                            </div>
                            <div id="tab-8" class="tab-content">
                                <?php if($a > 0){ ?>
                                
                                    <div class="slide-5 product-m no-arrow">
                                        <div>
                                            <div class="media-banner media-banner-1 border-0 cardList shadow mt-4 mb-4">
                                            <div class="media-banner-box">
                                                            <div class="media">
                                                                <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $featured[0]['image']; ?>" class="img-fluid " alt="banner">
                                                                <div class="media-body">
                                                                    <div class="media-contant">
                                                                        <div>
                                                                            <!-- <div class="rating">
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                            </div> -->
                                                                             <p>
                                                                           <a href="product?id=<?php echo $featured[0]['name']; ?>"> <?php echo $featured[0]["name"]; ?>
                                                                        </a></p>
                                                                            <h6> &pound; <?php echo $featured[0]["price"]; ?></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><div class="media-banner-box">
                                                            <div class="media">
                                                                <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $featured[1]['image']; ?>" class="img-fluid " alt="banner">
                                                                <div class="media-body">
                                                                    <div class="media-contant">
                                                                        <div>
                                                                            <!-- <div class="rating">
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                            </div> -->
                                                                             <p>
                                                                           <a href="product?id=<?php echo $featured[1]['name']; ?>"> <?php echo $featured[1]["name"]; ?>
                                                                        </a></p>
                                                                            <h6> &pound; <?php echo $featured[1]["price"]; ?></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><div class="media-banner-box">
                                                            <div class="media">
                                                                <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $featured[2]['image']; ?>" class="img-fluid " alt="banner">
                                                                <div class="media-body">
                                                                    <div class="media-contant">
                                                                        <div>
                                                                            <!-- <div class="rating">
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                            </div> -->
                                                                             <p>
                                                                           <a href="product?id=<?php echo $featured[2]['name']; ?>"> <?php echo $featured[2]["name"]; ?>
                                                                        </a></p>
                                                                            <h6> &pound; <?php echo $featured[2]["price"]; ?></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="media-banner media-banner-1 border-0 cardList shadow mt-4 mb-4">
                                            <div class="media-banner-box">
                                                        <div class="media">
                                                            <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $featured[3]['image']; ?>" class="img-fluid " alt="banner">
                                                            <div class="media-body">
                                                                <div class="media-contant">
                                                                    <div>
                                                                        <!-- <div class="rating">
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                        </div> -->
                                                                        <p>
                                                                           <a href="product?id=<?php echo $featured[3]['name']; ?>"> <?php echo $featured[3]["name"]; ?>
                                                                        </a></p>
                                                                        <h6> &pound; <?php echo $featured[3]["price"]; ?></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><div class="media-banner-box">
                                                        <div class="media">
                                                            <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $featured[4]['image']; ?>" class="img-fluid " alt="banner">
                                                            <div class="media-body">
                                                                <div class="media-contant">
                                                                    <div>
                                                                        <!-- <div class="rating">
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                        </div> -->
                                                                        <p>
                                                                           <a href="product?id=<?php echo $featured[4]['name']; ?>"> <?php echo $featured[4]["name"]; ?>
                                                                        </a></p>
                                                                        <h6> &pound; <?php echo $featured[4]["price"]; ?></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><div class="media-banner-box">
                                                        <div class="media">
                                                            <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $featured[5]['image']; ?>" class="img-fluid " alt="banner">
                                                            <div class="media-body">
                                                                <div class="media-contant">
                                                                    <div>
                                                                        <!-- <div class="rating">
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                        </div> -->
                                                                        <p>
                                                                           <a href="product?id=<?php echo $featured[5]['name']; ?>"> <?php echo $featured[5]["name"]; ?>
                                                                        </a></p>
                                                                        <h6> &pound; <?php echo $featured[5]["price"]; ?></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="media-banner media-banner-1 border-0 cardList shadow mt-4 mb-4">
                                            <div class="media-banner-box">
                                                        <div class="media">
                                                            <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $featured[6]['image']; ?>" class="img-fluid " alt="banner">
                                                            <div class="media-body">
                                                                <div class="media-contant">
                                                                    <div>
                                                                        <!-- <div class="rating">
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                        </div> -->
                                                                        <p>
                                                                           <a href="product?id=<?php echo $featured[6]['name']; ?>"> <?php echo $featured[6]["name"]; ?>
                                                                        </a></p>
                                                                        <h6> &pound; <?php echo $featured[6]["price"]; ?></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><div class="media-banner-box">
                                                        <div class="media">
                                                            <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $featured[7]['image']; ?>" class="img-fluid " alt="banner">
                                                            <div class="media-body">
                                                                <div class="media-contant">
                                                                    <div>
                                                                        <!-- <div class="rating">
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                        </div> -->
                                                                        <p>
                                                                           <a href="product?id=<?php echo $featured[7]['name']; ?>"> <?php echo $featured[7]["name"]; ?>
                                                                        </a></p>
                                                                        <h6> &pound; <?php echo $featured[7]["price"]; ?></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><div class="media-banner-box">
                                                        <div class="media">
                                                            <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $featured[8]['image']; ?>" class="img-fluid " alt="banner">
                                                            <div class="media-body">
                                                                <div class="media-contant">
                                                                    <div>
                                                                        <!-- <div class="rating">
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                        </div> -->
                                                                        <p>
                                                                           <a href="product?id=<?php echo $featured[8]['name']; ?>"> <?php echo $featured[8]["name"]; ?>
                                                                        </a></p>
                                                                        <h6> &pound; <?php echo $featured[8]["price"]; ?></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div>
                                        <div class="media-banner media-banner-1 border-0 cardList shadow mt-4 mb-4">
                                        <div class="media-banner-box">
                                                        <div class="media">
                                                            <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $featured[9]['image']; ?>" class="img-fluid " alt="banner">
                                                            <div class="media-body">
                                                                <div class="media-contant">
                                                                    <div>
                                                                        <!-- <div class="rating">
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                        </div> -->
                                                                        <p>
                                                                           <a href="product?id=<?php echo $featured[9]['name']; ?>"> <?php echo $featured[9]["name"]; ?>
                                                                        </a></p>
                                                                        <h6> &pound; <?php echo $featured[9]["price"]; ?></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><div class="media-banner-box">
                                                        <div class="media">
                                                            <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $featured[10]['image']; ?>" class="img-fluid " alt="banner">
                                                            <div class="media-body">
                                                                <div class="media-contant">
                                                                    <div>
                                                                        <!-- <div class="rating">
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                        </div> -->
                                                                        <p>
                                                                           <a href="product?id=<?php echo $featured[10]['name']; ?>"> <?php echo $featured[10]["name"]; ?>
                                                                        </a></p>
                                                                        <h6> &pound; <?php echo $featured[10]["price"]; ?></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><div class="media-banner-box">
                                                        <div class="media">
                                                            <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $featured[11]['image']; ?>" class="img-fluid " alt="banner">
                                                            <div class="media-body">
                                                                <div class="media-contant">
                                                                    <div>
                                                                        <!-- <div class="rating">
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                        </div> -->
                                                                        <p>
                                                                           <a href="product?id=<?php echo $featured[11]['name']; ?>"> <?php echo $featured[11]["name"]; ?>
                                                                        </a></p>
                                                                        <h6> &pound; <?php echo $featured[11]["price"]; ?></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>
                                     </div>
                                        <div>
                                            <div class="media-banner media-banner-1 border-0 cardList shadow mt-4 mt-4">
                                            <div class="media-banner-box">
                                                        <div class="media">
                                                            <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $featured[12]['image']; ?>" class="img-fluid " alt="banner">
                                                            <div class="media-body">
                                                                <div class="media-contant">
                                                                    <div>
                                                                        <!-- <div class="rating">
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                        </div> -->
                                                                        <p>
                                                                           <a href="product?id=<?php echo $featured[12]['name']; ?>"> <?php echo $featured[12]["name"]; ?>
                                                                        </a></p>
                                                                        <h6> &pound; <?php echo $featured[12]["price"]; ?></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><div class="media-banner-box">
                                                        <div class="media">
                                                            <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $featured[13]['image']; ?>" class="img-fluid " alt="banner">
                                                            <div class="media-body">
                                                                <div class="media-contant">
                                                                    <div>
                                                                        <!-- <div class="rating">
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                        </div> -->
                                                                        <p>
                                                                           <a href="product?id=<?php echo $featured[13]['name']; ?>"> <?php echo $featured[13]["name"]; ?>
                                                                        </a></p>
                                                                        <h6> &pound; <?php echo $featured[13]["price"]; ?></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><div class="media-banner-box">
                                                        <div class="media">
                                                            <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $featured[14]['image']; ?>" class="img-fluid " alt="banner">
                                                            <div class="media-body">
                                                                <div class="media-contant">
                                                                    <div>
                                                                        <!-- <div class="rating">
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                            <i class="fa fa-star" ></i>
                                                                        </div> -->
                                                                        <p>
                                                                           <a href="product?id=<?php echo $featured[14]['name']; ?>"> <?php echo $featured[14]["name"]; ?>
                                                                        </a></p>
                                                                        <h6> &pound; <?php echo $featured[14]["price"]; ?></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>
                                        </div>
                                    </div>
                            
                                <?php } else {?>
                                    <div class="slide-5 product-m no-arrow">
                                </div>
                                    <?php }?>
                            </div>
                            <div id="tab-9" class="tab-content">
                            <?php if($b > 0){ ?>
                                <div class="slide-5 product-m no-arrow">
                                            <div>
                                                <div class="media-banner media-banner-1 border-0 cardList shadow mt-4 mb-4">
                                                <div class="media-banner-box">
                                                                <div class="media">
                                                                    <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $bestselling[0]['image']; ?>" class="img-fluid " alt="banner">
                                                                    <div class="media-body">
                                                                        <div class="media-contant">
                                                                            <div>
                                                                                <!-- <div class="rating">
                                                                                    <i class="fa fa-star" ></i>
                                                                                    <i class="fa fa-star" ></i>
                                                                                    <i class="fa fa-star" ></i>
                                                                                    <i class="fa fa-star" ></i>
                                                                                    <i class="fa fa-star" ></i>
                                                                                </div> -->
                                                                                <p>
                                                                            <a href="product?id=<?php echo $bestselling[0]['name']; ?>"> <?php echo $bestselling[0]["name"]; ?>
                                                                            </a></p>
                                                                                <h6> &pound; <?php echo $bestselling[0]["price"]; ?></h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><div class="media-banner-box">
                                                                <div class="media">
                                                                    <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $bestselling[1]['image']; ?>" class="img-fluid " alt="banner">
                                                                    <div class="media-body">
                                                                        <div class="media-contant">
                                                                            <div>
                                                                                <!-- <div class="rating">
                                                                                    <i class="fa fa-star" ></i>
                                                                                    <i class="fa fa-star" ></i>
                                                                                    <i class="fa fa-star" ></i>
                                                                                    <i class="fa fa-star" ></i>
                                                                                    <i class="fa fa-star" ></i>
                                                                                </div> -->
                                                                                <p>
                                                                            <a href="product?id=<?php echo $bestselling[1]['name']; ?>"> <?php echo $bestselling[1]["name"]; ?>
                                                                            </a></p>
                                                                                <h6> &pound; <?php echo $bestselling[1]["price"]; ?></h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><div class="media-banner-box">
                                                                <div class="media">
                                                                    <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $bestselling[2]['image']; ?>" class="img-fluid " alt="banner">
                                                                    <div class="media-body">
                                                                        <div class="media-contant">
                                                                            <div>
                                                                                <!-- <div class="rating">
                                                                                    <i class="fa fa-star" ></i>
                                                                                    <i class="fa fa-star" ></i>
                                                                                    <i class="fa fa-star" ></i>
                                                                                    <i class="fa fa-star" ></i>
                                                                                    <i class="fa fa-star" ></i>
                                                                                </div> -->
                                                                                <p>
                                                                            <a href="product?id=<?php echo $bestselling[2]['name']; ?>"> <?php echo $bestselling[2]["name"]; ?>
                                                                            </a></p>
                                                                                <h6> &pound; <?php echo $bestselling[2]["price"]; ?></h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="media-banner media-banner-1 border-0 cardList shadow mt-4 mb-4">
                                                <div class="media-banner-box">
                                                            <div class="media">
                                                                <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $bestselling[3]['image']; ?>" class="img-fluid " alt="banner">
                                                                <div class="media-body">
                                                                    <div class="media-contant">
                                                                        <div>
                                                                            <!-- <div class="rating">
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                            </div> -->
                                                                            <p>
                                                                            <a href="product?id=<?php echo $bestselling[3]['name']; ?>"> <?php echo $bestselling[3]["name"]; ?>
                                                                            </a></p>
                                                                            <h6> &pound; <?php echo $bestselling[3]["price"]; ?></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><div class="media-banner-box">
                                                            <div class="media">
                                                                <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $bestselling[4]['image']; ?>" class="img-fluid " alt="banner">
                                                                <div class="media-body">
                                                                    <div class="media-contant">
                                                                        <div>
                                                                            <!-- <div class="rating">
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                            </div> -->
                                                                            <p>
                                                                            <a href="product?id=<?php echo $bestselling[4]['name']; ?>"> <?php echo $bestselling[4]["name"]; ?>
                                                                            </a></p>
                                                                            <h6> &pound; <?php echo $bestselling[4]["price"]; ?></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><div class="media-banner-box">
                                                            <div class="media">
                                                                <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $bestselling[5]['image']; ?>" class="img-fluid " alt="banner">
                                                                <div class="media-body">
                                                                    <div class="media-contant">
                                                                        <div>
                                                                            <!-- <div class="rating">
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                            </div> -->
                                                                            <p>
                                                                            <a href="product?id=<?php echo $bestselling[5]['name']; ?>"> <?php echo $bestselling[5]["name"]; ?>
                                                                            </a></p>
                                                                            <h6> &pound; <?php echo $bestselling[5]["price"]; ?></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="media-banner media-banner-1 border-0 cardList shadow mt-4 mb-4">
                                                <div class="media-banner-box">
                                                            <div class="media">
                                                                <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $bestselling[6]['image']; ?>" class="img-fluid " alt="banner">
                                                                <div class="media-body">
                                                                    <div class="media-contant">
                                                                        <div>
                                                                            <!-- <div class="rating">
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                            </div> -->
                                                                            <p>
                                                                            <a href="product?id=<?php echo $bestselling[6]['name']; ?>"> <?php echo $bestselling[6]["name"]; ?>
                                                                            </a></p>
                                                                            <h6> &pound; <?php echo $bestselling[6]["price"]; ?></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><div class="media-banner-box">
                                                            <div class="media">
                                                                <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $bestselling[7]['image']; ?>" class="img-fluid " alt="banner">
                                                                <div class="media-body">
                                                                    <div class="media-contant">
                                                                        <div>
                                                                            <!-- <div class="rating">
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                            </div> -->
                                                                            <p>
                                                                            <a href="product?id=<?php echo $bestselling[7]['name']; ?>"> <?php echo $bestselling[7]["name"]; ?>
                                                                            </a></p>
                                                                            <h6> &pound; <?php echo $bestselling[7]["price"]; ?></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><div class="media-banner-box">
                                                            <div class="media">
                                                                <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $bestselling[8]['image']; ?>" class="img-fluid " alt="banner">
                                                                <div class="media-body">
                                                                    <div class="media-contant">
                                                                        <div>
                                                                            <!-- <div class="rating">
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                            </div> -->
                                                                            <p>
                                                                            <a href="product?id=<?php echo $bestselling[8]['name']; ?>"> <?php echo $bestselling[8]["name"]; ?>
                                                                            </a></p>
                                                                            <h6> &pound; <?php echo $bestselling[8]["price"]; ?></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <div>
                                            <div class="media-banner media-banner-1 border-0 cardList shadow mt-4 mb-4">
                                            <div class="media-banner-box">
                                                            <div class="media">
                                                                <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $bestselling[9]['image']; ?>" class="img-fluid " alt="banner">
                                                                <div class="media-body">
                                                                    <div class="media-contant">
                                                                        <div>
                                                                            <!-- <div class="rating">
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                            </div> -->
                                                                            <p>
                                                                            <a href="product?id=<?php echo $bestselling[9]['name']; ?>"> <?php echo $bestselling[9]["name"]; ?>
                                                                            </a></p>
                                                                            <h6> &pound; <?php echo $bestselling[9]["price"]; ?></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><div class="media-banner-box">
                                                            <div class="media">
                                                                <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $bestselling[10]['image']; ?>" class="img-fluid " alt="banner">
                                                                <div class="media-body">
                                                                    <div class="media-contant">
                                                                        <div>
                                                                            <!-- <div class="rating">
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                            </div> -->
                                                                            <p>
                                                                            <a href="product?id=<?php echo $bestselling[10]['name']; ?>"> <?php echo $bestselling[10]["name"]; ?>
                                                                            </a></p>
                                                                            <h6> &pound; <?php echo $bestselling[10]["price"]; ?></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><div class="media-banner-box">
                                                            <div class="media">
                                                                <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $bestselling[11]['image']; ?>" class="img-fluid " alt="banner">
                                                                <div class="media-body">
                                                                    <div class="media-contant">
                                                                        <div>
                                                                            <!-- <div class="rating">
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                            </div> -->
                                                                            <p>
                                                                            <a href="product?id=<?php echo $bestselling[11]['name']; ?>"> <?php echo $bestselling[11]["name"]; ?>
                                                                            </a></p>
                                                                            <h6> &pound; <?php echo $bestselling[11]["price"]; ?></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                            </div>
                                        </div>
                                            <div>
                                                <div class="media-banner media-banner-1 border-0 cardList shadow mt-4 mb-4">
                                                <div class="media-banner-box">
                                                            <div class="media">
                                                                <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $bestselling[12]['image']; ?>" class="img-fluid " alt="banner">
                                                                <div class="media-body">
                                                                    <div class="media-contant">
                                                                        <div>
                                                                            <!-- <div class="rating">
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                            </div> -->
                                                                            <p>
                                                                            <a href="product?id=<?php echo $bestselling[12]['name']; ?>"> <?php echo $bestselling[12]["name"]; ?>
                                                                            </a></p>
                                                                            <h6> &pound; <?php echo $bestselling[12]["price"]; ?></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><div class="media-banner-box">
                                                            <div class="media">
                                                                <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $bestselling[13]['image']; ?>" class="img-fluid " alt="banner">
                                                                <div class="media-body">
                                                                    <div class="media-contant">
                                                                        <div>
                                                                            <!-- <div class="rating">
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                            </div> -->
                                                                            <p>
                                                                            <a href="product?id=<?php echo $bestselling[13]['name']; ?>"> <?php echo $bestselling[13]["name"]; ?>
                                                                            </a></p>
                                                                            <h6> &pound; <?php echo $bestselling[13]["price"]; ?></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><div class="media-banner-box">
                                                            <div class="media">
                                                                <img style = "width:100px; height:100px;" src="assets/images/products/<?php echo $bestselling[14]['image']; ?>" class="img-fluid " alt="banner">
                                                                <div class="media-body">
                                                                    <div class="media-contant">
                                                                        <div>
                                                                            <!-- <div class="rating">
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                                <i class="fa fa-star" ></i>
                                                                            </div> -->
                                                                            <p>
                                                                            <a href="product?id=<?php echo $bestselling[14]['name']; ?>"> <?php echo $bestselling[14]["name"]; ?>
                                                                            </a></p>
                                                                            <h6> &pound; <?php echo $bestselling[14]["price"]; ?></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                            </div>
                                            </div>
                                        </div>
                                </div>
                                <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- media banner tab end -->


    <!--rounded category start-->
    <section class="rounded-category" id="categor">
        <div class="container" >
            <div class="row">
                <div class="col">
                    <div class="slide-6 no-arrow" >
                    <?php
                                        foreach($categories as $c){    
                                    ?>
                        <div>
                            <div class="category-contain">
                               <a href="#">
                                   <div class="img-wrapper">
                                       <img src="../assets/images/category/<?php echo $c["image"] ?>" alt="category" class="img-fluid  bordered">
                                   </div>
                                   <div>
                                       <a href="category?id=<?php echo $c["cat_id"]; ?>">
                                        <div class="btn-rounded">
                                        <?php echo $c["name"]; ?>
                                        </div>
                                        </a>
                                   </div>
                               </a>
                            </div>
                        </div>
                        <?php  } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--rounded category end-->

    <!--tab product-->
    <?php
     echo "";
    ?>

    <!--tab product-->

    <!-- slider tab  -->
    <section class="section-py-space ratio_square product ">
       
    </section>
    <!-- slider tab end -->

 
       <!--testimonial start-->
       <section class="testimonial section-mb-space sliderses">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="slide-1 no-arrow">
                            <div>
                                <div class="testimonial-contain">
                                    <div class="media">
                                        <div class="testimonial-img">
                                            <img src="assets/images/testimonial/1.jpg" class="img-fluid rounded-circle  " alt="testimonial">
                                        </div>
                                        <div class="media-body">
                                            <h5></h5>
                                            <p style="color:#1d3361;">Excellent Product. Item exactly has advertised.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-contain">
                                    <div class="media">
                                        <div class="testimonial-img">
                                            <img src="assets/images/testimonial/2.jpg" class="img-fluid rounded-circle  " alt="testimonial">
                                        </div>
                                        <div class="media-body">
                                            <h5></h5>
                                           <p style="color:#1d3361;"> The Cake Topper was Perfect. I was a bit worried about get the write thing, but it wasn’t a problem at all. I love using cake toppers from The Laser Gift shop when I need one.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-contain">
                                    <div class="media">
                                        <div class="testimonial-img">
                                            <img src="assets/images/testimonial/3.jpg" class="img-fluid rounded-circle  " alt="testimonial">
                                        </div>
                                        <div class="media-body">
                                            <h5></h5>
                                            <p style="color:#1d3361;">Excellent Product. Item exactly has advertised.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--testimonial end-->

    <!--newsleatter start-->
    <section >
        <div class="newsletter bg-transparent newsletter-inverse">
            <div class="news-leble">
                <svg  viewBox="-28 0 480 480"  xmlns="http://www.w3.org/2000/svg"><path d="m320.007812 64v-16h40c4.417969 0 8-3.582031 8-8v-32c0-4.417969-3.582031-8-8-8h-80c-4.417968 0-8 3.582031-8 8v56h-152c-39.746093.042969-71.957031 32.253906-72 72v8h-40c-.976562.015625-1.941406.210938-2.847656.574219-.273437.125-.542968.261719-.800781.417969-.574219.292968-1.109375.652343-1.597656 1.070312-.257813.21875-.496094.457031-.714844.714844-.402344.46875-.746094.984375-1.03125 1.535156-.171875.292969-.324219.597656-.457031.910156-.046875.136719-.152344.25-.191406.394532-.179688.644531-.2773442 1.3125-.289063 1.984374 0 .132813-.078125.253907-.078125.398438v160c0 4.417969 3.582031 8 8 8h160.007812v152c0 4.417969 3.582032 8 8 8h80c4.417969 0 8-3.582031 8-8v-152h152c4.417969 0 8-3.582031 8-8v-240c0-4.417969-3.582031-8-8-8zm0-48h32v16h-32zm-36 139.351562c2.46875-1.425781 3.996094-4.058593 4-6.910156v-132.441406h16v132.441406c.007813 2.851563 1.53125 5.484375 4 6.910156 7.421876 4.222657 12.003907 12.109376 12 20.648438 0 13.253906-10.746093 24-24 24-13.253906 0-24-10.746094-24-24-.003906-8.539062 4.578126-16.425781 12-20.648438zm-220-19.351562c.035157-30.914062 25.085938-55.964844 56-56h16c30.914063.035156 55.964844 25.085938 56 56v8h-128zm126.398438 24-35.917969 24.863281c-.503906-.605469-.945312-1.261719-1.511719-1.832031-4.488281-4.515625-10.601562-7.050781-16.96875-7.03125h-2.742187c-6.371094-.011719-12.480469 2.519531-16.976563 7.03125l-5.65625 5.65625-5.65625-5.65625c-4.488281-4.515625-10.601562-7.050781-16.96875-7.03125h-2.742187c-6.371094-.011719-12.480469 2.519531-16.976563 7.03125-.191406.191406-.320312.425781-.503906.617188l-34.175781-23.648438zm-46.398438 40c.007813 2.121094-.839843 4.160156-2.34375 5.65625l-31.03125 31.03125-31.03125-31.03125c-2.289062-2.289062-2.972656-5.730469-1.734374-8.722656 1.242187-2.988282 4.160156-4.9375 7.398437-4.933594h2.742187c2.121094.007812 4.152344.847656 5.65625 2.34375l11.3125 11.3125c3.125 3.121094 8.1875 3.121094 11.3125 0l11.304688-11.304688c1.5-1.507812 3.542969-2.351562 5.671875-2.351562h2.742187c2.121094.007812 4.152344.847656 5.65625 2.34375 1.503907 1.496094 2.351563 3.535156 2.34375 5.65625zm-128-32.726562 45.390626 31.421874c-.417969 6.796876 2.089843 13.445313 6.890624 18.273438l36.6875 36.6875c3.125 3.121094 8.1875 3.121094 11.3125 0l36.6875-36.6875c4.367188-4.367188 6.871094-10.257812 6.976563-16.433594l32.054687-22.183594v93.648438h-176zm0 136.726562v-16h176v16zm200 160h-32v-144h32zm32 0h-16v-144h16zm160-160h-200v-16h200zm0-32h-200v-136c-.003906-21.769531-9.878906-42.363281-26.847656-56h90.847656v64.167969c-13.773437 10.332031-19.390624 28.316406-13.945312 44.648437 5.441406 16.335938 20.726562 27.351563 37.945312 27.351563s32.503907-11.015625 37.949219-27.351563c5.441407-16.332031-.175781-34.316406-13.949219-44.648437v-64.167969h88zm0 0"/><path d="m289 231.566406c-7.398438-.914062-14.535156-3.3125-20.984375-7.054687-3.808594-2.050781-8.554687-.703125-10.71875 3.042969-2.164063 3.746093-.957031 8.53125 2.71875 10.804687 8.304687 4.8125 17.492187 7.902344 27.015625 9.082031.332031.042969.667969.066406 1 .0625 4.21875-.011718 7.699219-3.296875 7.960938-7.507812.257812-4.207032-2.792969-7.894532-6.976563-8.429688zm0 0"/><path d="m352.007812 176c.0625 22.84375-13.804687 43.417969-35 51.9375-2.738281 1.007812-4.707031 3.429688-5.140624 6.3125-.4375 2.886719.734374 5.777344 3.054687 7.550781 2.316406 1.769531 5.417969 2.136719 8.085937.960938 21.660157-8.757813 37.726563-27.476563 43.09375-50.21875 5.367188-22.738281-.632812-46.667969-16.09375-64.183594-2.925781-3.3125-7.980468-3.628906-11.296874-.703125-3.3125 2.925781-3.628907 7.980469-.703126 11.296875 9.035157 10.222656 14.015626 23.402344 14 37.046875zm0 0"/></svg>
                <span class="news-text">
                    our
                   <span>newsletter</span>
                </span>
            </div>
            <div class="subscribe-block">
                <div class="input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-email"></i></span>
                    </div>
                    <input type="text" placeholder="ENTER YOUR EMAIL...." >
                </div>
                <a class="btn-normal">subscribe</a>
            </div>
        </div>
    </section>
    <!--newsleatter end-->

    <!--contact banner start-->
    <!--<section class="contact-banner">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col">-->
    <!--                <div class="contact-banner-contain">-->
    <!--                    <div class="contact-banner-img"><img src="assets/images/layout-1/call-img.png" alt="call-banner"></div>-->
    <!--                    <div> <h3>if you have any question please call us</h3></div>-->
    <!--                    <div><h2>123-456-7890</h2></div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--contact banner end-->
    <!--footer start-->
    <?php include_once "footer.php" ?>
    <!--footer end-->


    <!-- tap to top -->
    <div class="tap-top">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top End -->



    <!--Newsletter modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="news-latter">
                        <div class="modal-bg">
                            <div class="offer-content">
                                <div>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <h2>newsletter</h2>
                                    <p>Subscribe to our website mailling list <br> and get a Offer, Just for you!</p>
                                    <form action="https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;id=082f74cbda" class="auth-form needs-validation" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                                        <div class="form-group mx-sm-3">
                                            <input type="email" class="form-control" name="EMAIL" id="mce-EMAIL" placeholder="Enter your email" required="required">
                                            <button type="submit" class="btn btn-theme btn-normal btn-sm " id="mc-submit">subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Newsletter Modal popup end-->





 
 <!-- notification product -->
  <!-- <div class="product-notification" id="dismiss">
    <span  onclick="dismiss();" class="close" aria-hidden="true">×</span>
    <div class="media">
      <img class="mr-2" src="assets/images/layout-1/product/5.jpg" alt="Generic placeholder image">
      <div class="media-body">
        <h5 class="mt-0 mb-1">Latest trending</h5>
        Cras sit amet nibh libero, in gravida nulla.
      </div>
    </div>
  </div> -->
  <!-- notification product -->

    <!-- latest jquery-->
    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <!-- slick js-->
    <script src="assets/js/slick.js"></script>

    <!-- popper js-->
    <script src="assets/js/popper.min.js" ></script>

    <!-- Timer js-->
    <script src="assets/js/menu.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap-notify.min.js"></script>

    <!-- Theme js-->
    <script src="assets/js/slider-animat-three.js"></script>
    <script src="assets/js/script.js"></script>
    <!-- <script src="assets/js/timer.js"></script> -->
    <script src="assets/js/modal.js"></script>
    <script>
        $(document).ready(function(){

            $('#btn').click(function(){
                email = $('#email').val();
                password = $('#password').val();
                $.post('handler.php',{email,password,request:'login'},function(data){
                    data = JSON.parse(data);
                    if(data.success){
                        alert("login Successfully");
                    } else {
                        alert("Incorrect Email or Passsword");
                    }
                })
        // var formData = new FormData($('#login')[0]);
                
        //                         let uploadsucess;
        //                                   $.ajax({
        //                                       type: 'POST',
        //                                       url: 'handler.php',
        //                                       data: formData,
        //                                       data: formData,
        //                                       processData: false,
        //                                       contentType: false,
        //                                       success: function (data) {
        //                                         console.log(data);
        //                                       }
        //                               });
                                    
    })
                              
            // let category, subcat;
            // $.get('handler.php',function(data){
            //     data = JSON.parse(data);
            //     category = data[0];
            //     cat="";
            //     for(c in category){
            //     cat += "";
            //     // cate +="<div><div class='category-contain'><a href='#'><div class='img-wrapper'><img src='assets/images/category/"+category[c].image+"' alt='category' class='img-fluid '></div><div><div class='btn-rounded'>"+category[c].name+"</div></div></a></div></div>";
            //     }
            //     $('#cat').html(cat);
        //         $('#cate').html(cate);
        //         scat="";
        //         for(s in subcat){
        //         scat += "<li> <a href='tab-1'>"+ subcat[s].name+"</a></li>";
        //         }
        //         $('#scat').html(scat);
        //     })
        })
    </script>
  </body>
</html>
<?php 
}
?>