<?php require $_SERVER['DOCUMENT_ROOT'].'/livewhale/frontend.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <widget type="file"><arg id="path">/includes/head.html</arg></widget>
<meta name="pagename" content="Basic Page"/>
</head>
 <body>
  	<widget type="file"><arg id="path">/includes/header.php</arg></widget>

	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-3">
				<h1><xphp var="page_title"/></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3 nav-sidebar">
				<xphp var="group_navigation"/>
			</div>
			<div id="body" class="col-sm-6">
				<div id="main" class="editable">
				</div>
			</div>
			<div id="sidebar" class="col-sm-3 editable optional">
			</div>
		</div>
	</div>

  	<widget type="file">
		<arg id="path">/includes/footer.php</arg>
	</widget>
</body>
</html>