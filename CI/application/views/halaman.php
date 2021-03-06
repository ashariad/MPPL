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
				<li><a href="story" style="text-decoration:none ; color:white">OUR STORY</a></li>
				<li><a href="cabang" style="text-decoration:none ; color:white">BRANCH</a></li>
				<li><a href="kontak" style="text-decoration:none ; color:white">CONTACT US</a></li>
		</ul>
		</nav>
				<div id="main">
					<div id="reel">
					
					<?php               
                     foreach ($listData->result() as $row) { ?>
              
						<article class="item thumb" data-width="300">
							<h2><?= $row->nama ?></h2>
							<a href="<?='foto/'.$row->img_name.$row->ext;?>"><img src="<?='foto/'.$row->img_name.$row->ext;?>" alt=""></a>
						</article>

						<?php } ?>
						

						<!--<article class="item thumb" data-width="384">
							<h2>sambal goreng krecek</h2>
							<a href="images/2.jpg"><img src="images/2.jpg" alt=""></a>
						</article>
						
						<article class="item thumb" data-width="274">
							<h2>ayam bakar kalasan</h2>
							<a href="images/3.jpg"><img src="images/3.jpg" alt=""></a>
						</article>
						
						<article class="item thumb" data-width="282">
							<h2>opor ayam</h2>
							<a href="images/4.jpg"><img src="images/4.jpg" alt=""></a>
						</article>
						
						<article class="item thumb" data-width="476">
							<h2>bebek kremes</h2>
							<a href="images/6.jpg"><img src="images/6.jpg" alt=""></a>
						</article>
						
						<article class="item thumb" data-width="232">
							<h2>gurame goreng</h2>
							<a href="images/5.jpg"><img src="images/5.jpg" alt=""></a>
						</article>
						
						<article class="item thumb" data-width="352">
							<h2>nasi gudeg krecek telor ayam</h2>
							<a href="images/7.jpg"><img src="images/7.jpg" alt=""></a>
						</article>
						
						<article class="item thumb" data-width="348">
							<h2>nasi timbel bebek kremes</h2>
							<a href="images/8.jpg"><img src="images/8.jpg" alt=""></a>
						</article>

						<article class="item thumb" data-width="476">
							<h2>nasi timbel ikan nila komplit</h2>
							<a href="images/9.jpg"><img src="images/9.jpg" alt=""></a>
						</article>

						<article class="item thumb" data-width="232">
							<h2>nasi timbel ayam komplit</h2>
							<a href="images/10.jpg"><img src="images/10.jpg" alt=""></a>
						</article>

						<article class="item thumb" data-width="352">
							<h2>soto ayam</h2>
							<a href="images/11.jpg"><img src="images/11.jpg" alt=""></a>
						</article>
						
						<article class="item thumb" data-width="348">
							<h2>sop tulang iga sapi</h2>
							<a href="images/12.jpg"><img src="images/12.jpg" alt=""></a>
						</article>
						
						<article class="item thumb" data-width="282">
							<h2>rawon</h2>
							<a href="images/13.jpg"><img src="images/13.jpg" alt=""></a>
						</article>
						
						<article class="item thumb" data-width="384">
							<h2>sayur asem</h2>
							<a href="images/14.jpg"><img src="images/14.jpg" alt=""></a>
						</article>
						
						<article class="item thumb" data-width="274">
							<h2>aneka pepes</h2>
							<a href="images/15.jpg"><img src="images/15.jpg" alt=""></a>
						</article>
						
						<article class="item thumb" data-width="282">
							<h2>orek tempe & tumis pare</h2>
							<a href="images/16.jpg"><img src="images/16.jpg" alt=""></a>
						</article>

						<article class="item thumb" data-width="384">
							<h2>aneka gorengan</h2>
							<a href="images/17.jpg"><img src="images/17.jpg" alt=""></a>
						</article>-->
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

	</body>
</html>