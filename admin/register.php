<?php include "./templates/top.php"; ?>
<link href='//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/>
<?php include "./templates/navbar.php"; ?>

<div class="container">
	<div class="row justify-content-center" style="margin:100px 0;">
		<div class="col-md-4">
			<h4 style="font-weight: bold">Đăng ký Admin</h4>
			<p class="message"></p>
			<form id="admin-register-form">
			  <div class="form-group">
                              <label for="name" style="font-weight: bold">Tên</label>
			    <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên">
			  </div>
			  <div class="form-group">
			    <label for="email" style="font-weight: bold">Email</label>
			    <input type="email" class="form-control" name="email" id="email" placeholder="Nhập email">
			    <small id="emailHelp" class="form-text text-muted">Chúng tôi sẽ không chia sẻ email của bạn cho người khác.</small>
			  </div>
			  <div class="form-group">
			    <label for="password" style="font-weight: bold">Mật khẩu</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
			  </div>
			  <div class="form-group">
			    <label for="cpassword" style="font-weight: bold">Nhập lại mật khẩu</label>
			    <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Password">
			  </div>
			  <input type="hidden" name="admin_register" value="1">
			  <button type="button" class="btn btn-success register-btn">Đăng ký</button>
			</form>
		</div>
	</div>
</div>


<footer id="footer" class="footer-1" style="background: #252525; color: white; position: fixed; bottom: 0; width: 100%;">
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



<?php include "./templates/footer.php"; ?>

<script type="text/javascript" src="./js/main.js"></script>
