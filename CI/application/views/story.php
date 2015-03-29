<!DOCTYPE HTML>
<html>
	<head>
		<title>RM. Prambanan Gudeg Jogja</title>
		<meta name="viewport" content="width=1120,user-scalable=no" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400" rel="stylesheet" type="text/css" />
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.poptrox.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
	</head>
	<body>
	<div id="wrapper">
		<nav>
		<ul id="top_nav">
				<li><a href="index" style="text-decoration:none ; color:white">HOME</a></li>
				<li><a href="story" style="text-decoration:none ; color:white">OUR STORY</a></li>
				<li><a href="cabang" style="text-decoration:none ; color:white">BRANCH</a></li>
				<li><a href="kontak" style="text-decoration:none ; color:white">CONTACT US</a></li>
		</ul>
		</nav>
	<div id="wrapper1">

			<div id="main1">
				<div id="reel1">
					<div id="logo1">
						<a href="index2.html"><img src="images/rm2.png" style="border-radius:400px"></a>
					</div>
					<article class="item thumb1" data-width="282">
						<h2><?php               
                     foreach ($listData->result() as $row) { ?>
                     <?= $row->deskripsi ?>
                     <?php } ?>
                     </h2>
					</article>
				</div>
			</div>
		
			<div id="footer">
				<div class="left">
					<p>buka setiap hari jam <strong>10.00 pagi - 21.00 malam</strong><br>
					Jl Raya Pekayon No 6A Pekayon Jaya, Bekasi Selatan 17148 / 021-82415762</p>
				</div>
				<div class="right">
					<ul class="contact">
						<li><a href="https://twitter.com/rmpgudegjogja" class="fa fa-twitter solo"><span>Twitter</span></a></li>
						<li><a href="https://www.facebook.com/pages/Rumah-Makan-Prambanan-Gudeg-Jogja-1/166721496691402?fref=ts" class="fa fa-facebook solo"><span>Facebook</span></a></li>
						<li><a href="https://foursquare.com/v/rumah-makan-prambanan-gudeg-jogja/4ebb348829c239ccef316af3" class="fa fa-envelope solo"><span>Email</span></a></li>
						<div id="copyright">
						&copy; RM. Prambanan Gudeg Jogja
					</div>
					</ul>
				</div>
			</div>

			</div>
		</div>
	</body>
</html>