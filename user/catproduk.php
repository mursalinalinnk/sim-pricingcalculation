<?php

session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum login");//jika belum login jangan lanjut..
}

include "../function/fungsi_user.php";
//cek apakah user sudah login

$sql_ngambil_user = mysql_query( "SELECT * FROM tb_user WHERE uname_user = '$_SESSION[username]' ");
$user=mysql_fetch_object($sql_ngambil_user);
//cek level user
// if($_SESSION['sebagai']!="mahasiswa"){ die("Anda bukan mahasiswa");}//jika bukan admin jangan lanjut


?>
<html>
<head>
	<title><?php  echo $site ['judul'];?></title>
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"><!--font awesome-->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"><!--bootstrap-->
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<!--<link rel="stylesheet" type="text/css" href="css/cerulean-bootstrap.min.css">bootstrap tema -->
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <style >
    		.navbar-right {
  				margin-top: 5px;
			}

			.panel-red {
  				border-color: #d9534f;
			}

			.panel-yellow {
  				border-color: #f0ad4e;
			}

			.panel-yellow .panel-heading {
  				border-color: #f0ad4e;
  				color: #fff;
  				background-color: #f0ad4e;
			}

			.panel-red .panel-heading {
			  border-color: #d9534f;
			  color: #fff;
			  background-color: #d9534f;
			}

			.panel-green {
			  border-color: #5cb85c;
			}

			.panel-green .panel-heading {
			  border-color: #5cb85c;
			  color: #fff;
			  background-color: #5cb85c;
			}
    </style>
</head>
<body>

<?php include"../template/nav.php";?>
<!-- mulai -->
<div class="container">
	<div class="row" style="margin-top:100px">

	    <div class="col-lg-6">
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                <h3>Tambah kategori</h3>
	            </div>
	           	
	            <div class="panel-body">
	                <div class="dataTable_wrapper">
	                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                        <thead>
	                            <tr>
	                             <th style="border: 1px solid black"; >#</th>
								 <th style="border: 1px solid black";>kategori baru</th>
	                            </tr>
	                        </thead>
	                        <?php
							tampilkategori();
							?>
	                    </table>
	                </div>
	        	</div>
	    	</div>
		</div>

		<!-- start -->
		<div class="col-md-6">
	        <form action="../include/prosescrudcatproduk.php" method="POST">
			<table>
				<div class="form-group">
					<!-- <label>#kode</label> -->
					<input type="hidden" class="form-control" name="kode_catproduk" placeholder="hanya untuk hapus/update">
				</div>
				
					
				<div class="form-group">
					<label>tambah kota baru</label>
					<input type="text" class="form-control"  name="nama_catproduk" placeholder="kertas A4 golden">
				</div>
			</table>
					<input type="submit" class="btn btn-outline btn-success" name="tambahkatkeb" value="tambah">
					<input type="submit" class="btn btn-outline btn-success" name="hapuskatkeb" value="hapus">
			</form>
		</div>
	</div>
</div>
</body>
</html>