<?php require $_SERVER['DOCUMENT_ROOT'].'/livewhale/frontend.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <widget type="file"><arg id="path">/_ingredients/includes/head.html</arg></widget>
</head>
 <body>
  	<widget type="file"><arg id="path">/_ingredients/includes/header.php</arg></widget>
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-2">
				<h1><xphp var="page_title"/></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2 nav-sidebar">
				<xphp var="group_navigation"/>
				<div id="navbar-content" class="editable optional"></div>
			</div>
			<div id="body" class="col-sm-10">
				<div id="main" class="editable">
				</div>
			</div>
		</div>
	</div>
  	<widget type="file">
		<arg id="path">/_ingredients/includes/footer.php</arg>
	</widget>
</body>
</html>