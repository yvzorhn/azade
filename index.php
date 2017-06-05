<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>jQuery Mobile Web App</title>
<link href="css/jquery.mobile-1.0a3.min.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery-1.5.min.js" type="text/javascript"></script>
<script src="js/jquery.mobile-1.0a3.min.js" type="text/javascript"></script>
<!-- This reference to phonegap.js will allow for code hints as long as the current site has been configured as a mobile application. 
	 To configure the site as a mobile application, go to Site -> Mobile Applications -> Configure Application Framework... -->
<script src="/phonegap.js" type="text/javascript"></script>
</head> 
<body> 
<?php
include("../includes/baglan.php");?>

<div data-role="page" id="page">
	<div data-role="header">
		 <img src="images/azadelogo.png" />
	</div>
	<div data-role="content">	
		<ul data-role="listview">
			<li><a href="#page2">Anasayfa</a></li>
            <li><a href="#page3">Hakkımızda</a></li>
			<li><a href="#page4">Hizmetlerimiz</a></li>
            <li><a href="#page5">Galeri</a></li>
            <li><a href="#page6">İletişim</a></li>
		</ul>		
	</div>
	<div data-role="footer">
		     
        
	</div>
</div>

<div data-role="page" id="page2">
	 	<div data-role="header">
        <img src="images/azadelogo.png" value="transparent"/>
        
	</div>
	<div data-role="content">	
		
		<ul>
                    <?php 
	mysql_query("SET NAMES 'utf8'");
	$as=mysql_query("SELECT * FROM anasayfa ORDER BY ana_id ASC"); 
	while ($ac=mysql_fetch_array($as)){?>
	<li>
                        	
                            <div class="label_text">
                            	<p><?php echo($ac[ana_baslik]);?></p>
                           		<p> <?php echo ($ac[ana_metin]);?>
</p>
<img src="../<?php echo ($ac[ana_resim]);?>" alt="" />
                                
                            </div>
                        </li>
	<?php }?>
                     
                    </ul>	
	</div>
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div>
</div>

<div data-role="page" id="page3">
	<div data-role="header">
		<h1>Page Three</h1>
	</div>
	<div data-role="content">	
		Content		
	</div>
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div>
</div>

<div data-role="page" id="page4">
	<div data-role="header">
		<h1>Page Four</h1>
	</div>
	<div data-role="content">	
		Content		
	</div>
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div>
</div>


<div data-role="page" id="page5">
	<div data-role="header">
		<h1>Page Two</h1>
	</div>
	<div data-role="content">	
		Content		
	</div>
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div>
</div>

<div data-role="page" id="page6">
	<div data-role="header">
		<h1>Page Two</h1>
	</div>
	<div data-role="content">	
		Content		
	</div>
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div>
</div>
</body>
</html>