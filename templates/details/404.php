<?php require $_SERVER['DOCUMENT_ROOT'].'/livewhale/index.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html xmlns="http://www.w3.org/1999/xhtml">
  <!--<![endif]-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
      <xphp var="page_title"/> : <xphp var="group_title"/>
    </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <widget type="file"><arg id="path">/includes/head.html</arg></widget>
  </head>
  <body>
    <widget type="file">
		<arg id="path">/includes/header.php</arg>
	</widget>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<header class="title">
				  <h1>Page Not Found</h1>
				</header>
				<div id="main" class="editable">
			</div>
		</div>
	</div>

	<widget>
        <arg id="path">/includes/footer.php</arg>
     </widget>
  </body>
</html>