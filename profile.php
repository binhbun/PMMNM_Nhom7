<?php
require "config/constants.php";
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Han Store</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
                <link href='//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only"> navigation toggle</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Han Store</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				
				<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
				<li style="top:10px;left:20px;"><button class="btn btn-warning" id="search_btn" style="background-color: #c69a39">Search</button></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3 col-xs-3">STT</div>
									<div class="col-md-3 col-xs-3">Ảnh</div>
									<div class="col-md-3 col-xs-3">Tên</div>
									<div class="col-md-3 col-xs-3">Giá </div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>-->
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION["name"]; ?></a>
					<ul class="dropdown-menu">
						<li><a href="cart.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
						
						<li class="divider"></li>
						<li><a href="logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
					</ul>
				</li>
				
			</ul>
		</div>
	</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<div id="get_category">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
				<div id="get_brand">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-8">	
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info" id="scroll" style="border-color: #c69a39">
					<div class="panel-heading" style="background-color: #c69a39; color: white; font-weight: bold">Sản phẩm</div>
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">$.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>
					<div class="panel-footer">&copy; 2023</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<center>
					<ul class="pagination" id="pageno">
						<li><a href="#">1</a></li>
					</ul>
				</center>
			</div>
		</div>
	</div>
</body>
<footer id="footer" class="footer-1" style="background: #252525; color: white;">
<div class="main-footer widgets-dark typo-light">
<div class="container">
<div class="row">

  <div class="col-xs-12 col-sm-6 col-md-3">
<div class="" style="">
    <h5 class="" style="font-weight: bold; font-size: 20px; padding-top: 10px">Quy định - Chính sách<span></span></h5>
    <hr style="width: 50px; margin-left: 0">
<ul>
    <li  style="padding-bottom: 5px"><a style="color: white;">Chính sách bảo hành</a></li>
    <li style="padding-bottom: 5px"><a style="color: white;">Chính sách vận chuyển</a></li>
    <li style="padding-bottom: 5px"><a style="color: white;">Chính sách đổi trả hàng</a></li>
    <li style="padding-bottom: 5px"><a style="color: white;">Chính sách bảo mật</a></li>
    <li style="padding-bottom: 5px"><a style="color: white;">Hướng dẫn thanh toán</a></li>
    
</ul>
</div>
</div>

  
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box">
<h5 class="widget-title" style="font-weight: bold; font-size: 20px; padding-top: 10px">Hệ thống cửa hàng<span></span></h5>
<hr style="width: 50px; margin-left: 0">
<div class="thumb-content"><span>Trường Đại Học Công Nghiệp Hà Nội, quận Nam Từ Liêm, Tp.Hà Nội</span><br><a href="https://goo.gl/maps/kpyCJCtCAxj1oAXX8" target="_blank">Xem bản đồ</a></div><br> 
<div class="thumb-content" ><span>120 Thái Hà, Q. Đống Đa, Hà Nội Điện thoại: 0969.120.120 - 037.437.9999 </span><br><a href="https://goo.gl/maps/ASXnH8XtpHsBaYf97" target="_blank">Xem bản đồ</a></div><br>
</div>
</div>

  

      <div class="col-xs-12 col-sm-6 col-md-3" >
<div class="widget no-box">
<h5 class="widget-title" style="font-weight: bold; font-size: 20px; padding-top: 10px">Theo dõi<span></span></h5>
<hr style="width: 50px; margin-left: 0">
<p><a href="#">tuananh@gmail.com</a></p>
<a href="#"> <i class="fa fa-facebook" style="display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    background-color: #3e3e3e;
    color: #fff;
    padding: 9px;
    border-radius: 5px;"> </i> </a>
    <a href="#"> <i class="fa fa-twitter" style="display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    background-color: #3e3e3e;
    color: #fff;
    padding: 9px;
    border-radius: 5px;"> </i> </a>
    <a href="#"> <i class="fa fa-youtube" style="display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    background-color: #3e3e3e;
    color: #fff;
    padding: 9px;
    border-radius: 5px;"> </i> </a>
</div>
</div>


<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box">
<h5 class="widget-title" style="font-weight: bold; font-size: 20px; padding-top: 10px">Liên hệ<span></span></h5>
<hr style="width: 50px; margin-left: 0">
            <p>Vui lòng nhập email của bạn vào đây để liên hệ với chúng tôi!</p>
  <div class="emailfield">
      <input type="text" name="email" placeholder="Email" style="background: rgba(255,255,255,0.075);
    padding: 10px 15px;
    color: #aaa;
    border: 3px solid rgba(0,0,0,0.1);
    font-size: 14px;
    margin-bottom: 16px;
    border-radius: 5px;
    transition: all 0.2s cubic-bezier(0.4,0,0.2,1);
    transition-delay: 0.2s;
    text-align: center;
    width: 100%;">
<input name="uri" type="hidden" value="arabiantheme">
<input name="loc" type="hidden" value="en_US">
<input class="submitbutton ripplelink" type="submit" value="Đăng ký" style="background: #e67e22; border: 3px solid rgba(0,0,0,0.1);
    color: #fff;
    border-color: #e67e22;
    box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2);
    transition-delay: 0s;
    width: 100%;
    font-size: 14px;
    /* font-weight: 700; */
    border: 0px solid;
    transition: all 0.2s cubic-bezier(0.4,0,0.2,1);
    padding: 10px 15px;
    margin-bottom: 16px;
    border-radius: 5px;">
</form>  
</div>
</div>

</div>
</div>
</div>
  
    <div class="footer-copyright" style="">
<div class="container">
<div class="row">
<div class="col-md-12 text-center" style="margin: 20px">
<p>Copyright TunaHan © 2023. Thank you.</p>
</div>
</div>
</div>
</div>
</footer>
</html>
















































