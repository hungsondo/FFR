<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dr.Giòn quán - Vua đồ ăn vặt</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link h ref="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="product-detail.js"></script>
	<script type="text/javascript">js.bootstrap.min.css</script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Bootstrap core CSS -->
	
	


</head>
<body>
	
	<!-- Header -->

		<!-- <div class="container1">
				<div class="navbar">
				<div class="logo">
					<a href="index.php"><img src="images/logo.jpg" width="auto" height="125px"></a>
				</div>
				<nav>
					<ul>
						<li><a href="index.php">Trang chủ</a></li>
						<li><a href="food.php">Đồ ăn</a></li>
						<li><a href="drinks.php">Đồ uống</a></li>
						<li><a href="">Về chúng tôi</a></li>
						<li><a href="">Liên hệ</a></li>
						<li><a href="account.php">Tài khoản</a></li>
						<li><a href="viewCart.php"><img src="images/cart.png" width="30px" height="30px"></a></li>
						 <li><a href="viewCart.php" title="View Cart"><i class="icart"></i> (<?php echo ($cart->total_items() > 0)?$cart->total_items().' Items':'Empty'; ?>)</a></li> 
						<li><a href="viewCart.php" title="xem giỏ hàng"><i class="icart"></i> (<?php echo $cart->total_items().' Sản phẩm'; ?>)</a></li>
					</ul>
				</nav>
			</div>	
		</div> -->

		
		<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    	<a class="navbar-brand" href="index.php">
          	<img src="images/logo.jpg" width="auto" height="125px">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Trang chủ
                <span class="sr-only">(current)</span>
              </a>
        </li>
	    <li class="nav-item active dropdown  main-menu">
                <a class="nav-link dropdown-toggle" href="#" >Thực đơn</a>
                <div class="dropdown-menu main-menubox" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="food.php">Đồ ăn</a>
                  <a class="dropdown-item" href="drinks.php">Đồ uống</a>
                </div>
        </li>

       	<li class="nav-item active">
          		<a class="nav-link" href="#">Đăng nhập/Đăng kí</a>
       	</li>
       	<li class="nav-item active">
         	 	<a class="nav-link" href="viewCart.php"><img src="images/download.png" width="30px" height="30px"></a>
       	</li>  
       	<li class="nav-item active">
         	 	<a class="nav-link" href="viewCart.php" title="xem giỏ hàng"> (<?php echo $cart->total_items().' Sản phẩm'; ?>)</a>
       	</li>     
	 
        
      </ul>
    </div>
  </div>
</nav>

