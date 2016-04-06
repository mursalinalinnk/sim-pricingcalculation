<?PHP include "../include/config.php";?>
<html>
	<head><title>selamat datang di  <?php  echo $site ['judul'];?></title>
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"><!--font awesome-->
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"><!--bootstrap-->
		<link rel="stylesheet" type="text/css" href="../css/main.css">
		<!--<link rel="stylesheet" type="text/css" href="css/cerulean-bootstrap.min.css">bootstrap tema -->
		<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>

        <style>
        	.login-panel {
  				margin-top: 20%;
			}
			.panel-default {
  				border-color: #ddd;
			}
			.form-control {
			  display: block;
			  width: 100%;
			  height: 24px;
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
		<div class="col-md-4 col-md-offset-4">
			<div class="login-panel panel">
				<div class="panel-body">
				<fieldset>
					<form action="../include/proseslogin.php" method="POST" role="form">
						<div class="form-group">
							<input class="form-control" type="text" id="username" name="username" placeholder="username">
						</div>
						<div class="form-group">
							<input class="form-control" type="text" id="password" name="password" placeholder="*****">
						</div>
						<input type="submit" class="btn btn-lg btn-primary btn-block" value="login" name="login">
					</form>
				</fieldset>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>