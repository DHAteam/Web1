

<div id="logo" ><a href="#"><img src="../Web1/img/logo.jpg" width="20%"> </a><br><b><span style="color:blue">PET NYNN</span></b> </div>
	
<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION["current_user"])) { ?>
	<div id="logside">
	<a href = "login.php">Login</a>
	/
	<a href = "reg.php">Sign up</a>
	</div> <?php ;
}
else { ?>
	<div id="logside">
	<div class="log">Xin chào! <?php echo $_SESSION["current_user"]->userName; ?></div>
	<a href = "logout.php"><div class="log">Thoát</div></a>
	</div> <?php ;
}
?>
