<?PHP include "include/config.php";?>
<html>
	<head><title>selamat datang di  <?php  echo $site ['judul'];?></title>
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"><!--font awesome-->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"><!--bootstrap-->
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<!--<link rel="stylesheet" type="text/css" href="css/cerulean-bootstrap.min.css">bootstrap tema -->
		<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>

        <style>
        	.login-panel {
  				margin-top: 25%;
			}
			.panel-default {
  				border-color: #ddd;
			}
			.form-control {
			  display: block;
			  width: 100%;
			  height: 34px;
			  padding: 6px 12px;
			  font-size: 14px;
			  line-height: 1.42857143;
			  color: #555;
			  background-color: #fff;
			  background-image: none;
			  border: 1px solid #ccc;
			  border-radius: 4px;
			  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
			  box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
			  -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
			  -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
			  transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
			}
        </style>
	</head>
	<body>
	<div class="container">
		<div class="col-md-6" style="margin-top: 10%" >
			<h2><a href="admin/login.php">Login</a></h2>
		</div>	

		<div class="col-md-6 ">
			<div class="login-panel panel panel-default">
				<div class="panel-body">
				<div class="col-md-6"><h3> cek desain yang anda inginkan di sini !</h3></div>
				<div class="col-md-6"><img src="user/user_image/tatsuya.jpg" class="img-responsive img-rounded img-responsive img-circle" alt="Responsive image"></div>
				<a href="user/index.php" ><button type="submit" class="btn btn-primary btn-lg">Lanjutkan</button></a>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>