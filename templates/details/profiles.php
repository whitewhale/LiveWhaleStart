<?php require $_SERVER['DOCUMENT_ROOT'].'/livewhale/frontend.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]-->
  <head>
    <title>
      <xphp var="profiles_name"/> | <xphp var="group_title"/>
    </title>
    <widget type="file"><arg id="path">/includes/head.html</arg></widget>

    <widget type="profiles_details" priority="high">
      <arg id="image_width">250</arg>
      <arg id="image_height">250</arg>
    </widget>
  </head>
  <body class="template details profile">
    <widget type="file">
        <arg id="path">/includes/header.php</arg>
    </widget>

    <div class="content container cf">
		<div class="row">
			<div class="col-sm-3">
				<div class="profiles_image">
					<xphp var="profiles_image"/>
				</div>

				<xphp content="true">
					<if var="profiles_contact_info"/>
					<content>
					  <div class="profiles_contact_info">
						<h3>Contact:</h3>
						<xphp var="profiles_contact_info" inner="true"/>
					  </div>
					</content>
				</xphp>
				<div class="saveandshare">
					<h3>Share:</h3>
					<xphp var="profiles_share"/>
				</div>

				<xphp content="true">
					<if var="profiles_related_content"/>
					<content>
						<h3>Related:</h3>
						<xphp var="profiles_related_content" inner="true"/>
					</content>
				</xphp>

				<xphp var="profiles_sidebar"/>

			</div>
			<div class="col-sm-9">
				<header class="title">
					<h1><xphp var="profiles_name"/></h1>
				</header>

				<div id="main">
					<div class="profiles_description">
						<xphp var="profiles_description"/>
					</div>

					<xphp var="profiles_body"/>

					<div class="profiles_last_modified" style="display:none;">
					  Last modified on <xphp var="profiles_last_modified"/> by <xphp var="profiles_last_editor"/>.
					</div>
				</div>

				<div class="details_map"></div>
			</div>
		</div>
	</div>
    <widget type="file">
        <arg id="path">/includes/footer.php</arg>
     </widget>
  </body>
</html>