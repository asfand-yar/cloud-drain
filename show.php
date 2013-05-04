<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
	<title>Cloud Dran</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
	
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />    
	<meta name="keywords" content=""></meta>
	<meta name="description" content="Free form designs from CSS Globe"></meta>
	<meta http-equiv="imagetoolbar" content="no" />
	<link rel="stylesheet" href="css/screen.css" media="screen" />
	
	<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
</head>
<body>
	<!-- wrapper -->
	<div >
		<!-- header -->
		<header class="header">
			<div class="shell">
				<h1 id="logo"><a href="#">Cloud Drain</a></h1>
				
				<!-- navigation -->
				<nav id="navigation">
					<ul>
						<li class="active">
							<a href="home.html">Home</a>
						</li>
						<li>
							<a href="login.html">Sign In</a>
						</li>
						<li>
							<a href="#">Contact Us</a>
						</li>
					
					</ul>
					<div class="cl">&nbsp;</div>
				</nav>
				<!-- end of navigation -->
			</div>
		</header>
		<!-- end of header -->
		
	<?
		
		$username = $_POST["username"];
		$password = $_POST["password"];
	?>
	<center>
	<table width="800">
	
	
		<font size="2" color="blue"><b><?echo "Welcome ".$username;?></font>
	<?
		if ($handle = opendir($username)) {
			while (false !== ($entry = readdir($handle))) {
				if ($entry != "." && $entry != "..") {
					//echo "$entry<br>";
					
				}
			}
			closedir($handle);
		}
		$dir = opendir($username); 
		?>
		<ul>
		<?
		while ($read = readdir($dir)) 
		{

		if ($read!='.' && $read!='..') 
		{

		$info = pathinfo($read);
		$ext = $info['extension'];
		?>
		<tr><td><center>
		<?
		if($ext == "JPG" || $ext == "jpg" || $ext == "png" || $ext == "PNG" || $ext == "bmp" || $ext == "BMP"){
		?>
		<img src="images\picture.png">
		<?
		}
		
		elseif($ext == "PDF" || $ext == "pdf"){
		?>
		<img src="images\pdf.png">
		<?
		}
		
		elseif($ext == "MP3" || $ext == "mp3"){
		?>
		<img src="images\sound.png">
		<?
		}
		
		elseif($ext == "txt" || $ext == "TXT"){
		?>
		<img src="images\text.png">
		<?
		}
		
		elseif($ext == "DOC" || $ext == "doc" || $ext == "DOCX" || $ext == "docx"){
		?>
		<img src="images\word.png">
		<?
		}
		
		else{
		?>
		<img src="images\unknown.png">
		<?
		}
		
		?>
		<div class="imgText"><a href="<? echo $username/'.$read.'; ?>"><? echo $read; ?></a></div></center>
		</td>
		<td>
		<form action="delpro.php" method="POST">
		
		<input type="hidden" name='path' id='path' value="<? echo $username."/".$read; ?>">
		<input type="hidden" name='filename' id='filename' value="<? echo $read; ?>">
		<!-- -->
		<input type="hidden" name='username' id='username' value="<? echo $username; ?>">
		<input type="hidden" name='password' id='password' value="<? echo $password; ?>">
		<!--<input id="Submit1" type="submit" value="Delete" name="delete" />-->
		<INPUT TYPE="image" SRC="images\delete.png""  BORDER="0" ALT="SUBMIT!">
		
		</form>
		</td>
		<td>
		<form action="download.php" method="POST">
		<input type="hidden" name='path' id='path' value="<? echo $username."/".$read; ?>">
		<input type="hidden" name='filename' id='filename' value="<? echo $read; ?>">
		<!--<input id="Submit2" type="submit" value="Download" name="download" />-->
		<INPUT TYPE="image" SRC="images\download.png""  BORDER="0" ALT="SUBMIT!"> 
		
		</form>
		</td></tr>
		<? 
		}

		}
		?>
		</ul>
		<?

		closedir($dir);

		?> 
		</table>
		</center>
		<form enctype="multipart/form-data" action="uploader.php" method="POST">
		<input type="hidden" name='username' id='username' value="<? echo $username; ?>">
		<input type="hidden" name='password' id='password' value="<? echo $password; ?>">
		<input type="hidden" name="MAX_FILE_SIZE" value="1000000000000000000" />
		Choose a file to upload: <input name="uploadedfile" type="file" /> <br />
		<!--<input type="submit" value="Upload File" />-->
		<INPUT TYPE="image" SRC="images\upload.png""  BORDER="0" ALT="SUBMIT!"> 
		</form>

		<a href="Logout.php">
		Logout</a>
		
		
		<!-- <div id="footer-push"></div> -->
	</div>
	<!-- wrapper -->

	<!-- footer -->
	<div id="footer">
		<div class="shell">
			<!-- footer-cols -->
			<section class="footer-cols">
				<div class="col">
					<h3>MORE <strong>ABOUT US</strong></h3>
					<p>-----</p>
				</div>
				<div class="col">
					<h3>Be <strong>Informed</strong></h3>
					<p>Subscribe for our newsletters and latest news.</p>
					<form method="post">
						<input type="text" class="field" value="Your Email Here" title="Your Email Here" />
						<input type="submit" class="submit-btn" value="Submit" />
					</form>
				</div>
				<div class="col contact">
					<h3>CONTACT <strong>US</strong></h3>
					<h4>+92 332 5099104</h4>
					<a href="#">clouddrain@gmail.com</a>
				</div>
				<div class="cl">&nbsp;</div>
			</section>
			<!-- end of footer-cols -->
			
			<div class="cl">&nbsp;</div>
		</div>	
	</div>
	<!-- end of footer -->
</body>
</html>
