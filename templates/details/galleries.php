<?php require $_SERVER['DOCUMENT_ROOT'].'/livewhale/frontend.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <widget type="file"><arg id="path">/includes/head_top.html</arg></widget>
	<meta name="description" content="">
	<meta name="author" content="">

    <title>
      <xphp var="page_title"/> : <xphp var="galleries_title"/>
    </title>
	
	<widget type="file"><arg id="path">/includes/head_bottom.html</arg></widget>
	<widget type="galleries_details" priority="high"></widget>	
</head>
 <body>
  	<widget type="file">
		<arg id="path">/includes/header.php</arg>
	</widget>

	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-2">
				<h1><xphp var="galleries_title"/></h1>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-2 blog-sidebar">
				<xphp var="group_navigation"/>

				<xphp content="true">
					<if var="galleries_related_content"/>
					<content>
						<h3>Related Content</h3>

						<xphp var="galleries_related_content" inner="true"/>
					</content>
				</xphp>

				<widget type="galleries">
					<arg id="header">My Galleries</arg>
					<arg id="max">3</arg>
				</widget>			
			</div>
			<div id="body" class="col-sm-10">
				<h2 class="date_title"><xphp var="galleries_date"/></h2>

				<div class="galleries_description">
					<xphp var="galleries_description"/>
				</div>

				<div class="detail_gallery">
					<xphp var="galleries_image"/>
					<xphp var="galleries_thumbnails"/>
				</div>							
						
				<xphp var="galleries_comments_form"/>

				<xphp var="galleries_comments"/>

				<xphp content="true">
					<if var="galleries_location"/>	
					<content>	
						<div class="galleries_location">
							<xphp var="galleries_location"/>
						</div>
						<div class="details_map"></div>
					</content>
				</xphp>						

				<div class="saveandshare">
					<xphp var="galleries_share"/>
				</div>	
				<div class="galleries_last_modified" style="display:none;">
					Last modified on <xphp var="galleries_last_modified"/> by <xphp var="galleries_last_editor"/>.
				</div>											
			</div>
		</div>
	</div>

  	<widget type="file">
		<arg id="path">/includes/footer.php</arg>
	</widget>
	<script>
		$('.detail_gallery').lwGallery();
	</script>
</body>
</html>