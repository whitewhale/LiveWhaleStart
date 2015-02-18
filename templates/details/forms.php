<?php require $_SERVER['DOCUMENT_ROOT'].'/livewhale/frontend.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]-->
<head>
    <title><xphp var="form_title"/>: <xphp var="group_title"/></title>
    <widget type="file"><arg id="path">/includes/head.html</arg></widget>
    <widget type="forms_details" priority="high"/>
</head>
<body class="details">
    <widget type="file">
        <arg id="path">/includes/header.php</arg>
    </widget>

    <div class="content container cf">
        <nav>
            <xphp var="group_navigation"/>
        </nav>

        <article>
	        <header class="title">
	          <h1>
	            <xphp var="form_title"/>
	          </h1>
	        </header>

			<div id="main">
				<xphp var="form"/>	
				
	            <div class="form_last_modified" style="display:none;">
	                Last modified on <xphp var="form_last_modified"/> by <xphp var="form_last_editor"/>.
	            </div>

			</div>
        </article>

        <aside id="sidebar" class="optional">
	            <widget type="forms">
	                <arg id="header">Related Forms</arg>
	                <arg id="related_to">true</arg>
	                <arg id="max">5</arg>
	                <arg id="group">me</arg>
	            </widget>
          </aside>
    </div>
    <widget type="file">
        <arg id="path">/includes/footer.php</arg>
     </widget>
  </body>
</html>

