<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Home</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/cart.css">
<link rel="stylesheet" href="css/category.css">
<link rel="stylesheet" href="css/product.css">
<link rel="stylesheet" href="css/search.css">
<link rel="stylesheet" href="css/success.css">
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>

<!--	Header	-->
<div id="header">
	<div class="container">
    	<div class="row">
        	<div id="logo" class="col-lg-3 col-md-3 col-sm-12">
            	<h1><a href="#"><img class="img-fluid" src="images/logo.png"></a></h1>
            </div>
            <div id="search" class="col-lg-6 col-md-6 col-sm-12">
                <form class="form-inline">
                    <input class="form-control mt-3" type="search" placeholder="Tìm kiếm" aria-label="Search">
                    <button class="btn btn-danger mt-3" type="submit">Tìm kiếm</button>
                </form>
            </div>
            <div id="cart" class="col-lg-3 col-md-3 col-sm-12">
            	<a class="mt-4 mr-2" href="#">giỏ hàng</a><span class="mt-3">8</span>
            </div>
        </div>
    </div>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#menu">
    	<span class="navbar-toggler-icon"></span>
    </button>
</div>
<!--	End Header	-->

<!--	Body	-->
<div id="body">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
            	<nav>
                	<div id="menu" class="collapse navbar-collapse">
                        <ul>
                            <li class="menu-item"><a href="#">Sneaker</a></li>
                            <li class="menu-item"><a href="#">Boot</a></li>
                            <li class="menu-item"><a href="#">Jordan</a></li>
                            <li class="menu-item"><a href="#">Converse</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
        	<div id="main" class="col-lg-8 col-md-12 col-sm-12">
            	<!--	Slider	-->
                <div id="slide" class="carousel slide" data-ride="carousel">

                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                    <li data-target="#slide" data-slide-to="0" class="active"></li>
                    <li data-target="#slide" data-slide-to="1"></li>
                    <li data-target="#slide" data-slide-to="2"></li>
                    <li data-target="#slide" data-slide-to="3"></li>
                  </ul>
                
                  <!-- The slideshow -->
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="" alt="TrungNam Shoes">
                    </div>
                    <div class="carousel-item">
                      <img src="" alt="TrungNam Shoes">
                    </div>
                     <div class="carousel-item">
                      <img src="" alt="TrungNam Shoes">
                    </div>
					<div class="carousel-item">
                      <img src="" alt="TrungNam Shoes">
                    </div>
                  </div>
                
                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#slide" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#slide" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
                
                </div>
                <!--	End Slider	-->
                
				<?php
                if(isset($_GET['page_layout'])){
					switch($_GET['page_layout']){
						case 'category': include_once('category.php'); break;
						case 'search': include_once('search.php'); break;
						case 'product': include_once('product.php'); break;
						case 'cart': include_once('cart.php'); break;
						case 'success': include_once('success.php'); break;
					}
				}
				else{
					include_once('featured.php');
					include_once('latest.php');
				}
				?>
                
            </div>
            
            <div id="sidebar" class="col-lg-4 col-md-12 col-sm-12">
            	<div id="banner">
                	<div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="images/banner-1.png"></a>
                    </div>
                    <div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="images/banner-2.png"></a>
                    </div>
                    <div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="images/banner-3.png"></a>
                    </div>
                    <div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="images/banner-4.png"></a>
                    </div>
                    <div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="images/banner-5.png"></a>
                    </div>
                    <div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="images/banner-6.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--	End Body	-->

<div id="footer-top">
	<div class="container">
    	<div class="row">
        	<div id="logo-2" class="col-lg-3 col-md-6 col-sm-12">
            	<h2><a href="#"><img src="images/logo-footer.png"></a></h2>
                <p>
                	TrungNamShoes thành lập năm 2019. Chúng tôi chuyên bán giày cao cấp đủ mẫu mã thể loại, phù hợp giá tiền.
                </p>
            </div>
            <div id="address" class="col-lg-3 col-md-6 col-sm-12">
            	<h3>Địa chỉ</h3>
                <p>583 Vũ Tông Phan - Khương Đình - Thanh Xuân - Hà Nội</p>
                <p>Số 25 Ngõ 178/71 - Tây Sơn Đống Đa - Hà Nội</p>
            </div>
            <div id="service" class="col-lg-3 col-md-6 col-sm-12">
            	<h3>Dịch vụ</h3>
            	<p>Bảo hành, giặt, sấy khô, Custom</p>
            	<p>Bảo hành giày cũ, đổi giày cũ lấy giày mới</p>
            </div>
            <div id="hotline" class="col-lg-3 col-md-6 col-sm-12">
            	<h3>Hotline</h3>
            	<p>Phone Sale: (+84) 0988 550 553</p>
                <p>Email: Trungnamshoes@gmail.com</p>
            </div>
        </div>
    </div>
</div>

<!--	Footer	-->
<div id="footer-bottom">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
            	<p>
                    2018 © TrungNam Shoes. All rights reserved. Developed by Nguyễn Trung Nam.
                </p>
            </div>
        </div>
    </div>
</div>
<!--	End Footer	-->













</body>
</html>
