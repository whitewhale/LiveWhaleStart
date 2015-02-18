<?php require $_SERVER['DOCUMENT_ROOT'].'/livewhale/frontend.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <widget type="file"><arg id="path">/includes/head_top.html</arg></widget>
	<meta name="description" content="">
	<meta name="author" content="">

	<title>
		<xphp var="events_title"/> - <xphp var="group_title"/>
    </title>
	
	<widget type="file"><arg id="path">/includes/head_bottom.html</arg></widget>

    <widget type="events_details" priority="high"/>
</head>
<body>
  	<widget type="file">
		<arg id="path">/includes/header.php</arg>
	</widget>

	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-2">
				<h1><xphp var="events_title"/></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2 blog-sidebar">
				<xphp var="group_navigation"/>
			</div>
			<div id="body" class="col-sm-7">
				<div id="main">
		            <h2 class="date_title"><xphp var="events_date"/></h2>
		                    
		            <div class="events_summary">
		                <xphp var="events_summary"/>
		            </div>
		
		            <div class="events_description">
		                <xphp var="events_description"/>
		            </div>
		
					<div class="events_cost">
		                <xphp var="events_cost"/>
		            </div>
		                
		            <xphp content="true">
		                <if var="events_url"/>
		                <content>
		                    <div class="events_url">
		                        Link: <xphp var="events_url" inner="true"/>
		                    </div>
		                </content>
		            </xphp>					
		                            
		            <div class="events_registration">
		                <xphp var="events_registration"/>
		            </div>
		
		            <xphp var="events_comments_form"/>
		
		            <xphp var="events_comments"/>
					
					<xphp var="events_save_to_calendar"/>

		            <div class="saveandshare">
		                <xphp var="events_share"/>
		            </div>		
				</div>
			</div>
			<div id="sidebar" class="col-sm-3 editable">
	            <xphp content="true">
	                <if var="events_location"/>
	                <content>
	                    <h4>Location: <xphp var="events_location" inner="true"/></h4>
	                </content>
	            </xphp>									
	            
	            <div class="details_map"></div>
	
	            <xphp content="true">
	                <if var="events_image"/>	
	                <content>				
	                    <section class="image_bordered">
	                        <xphp var="events_image" inner="true"/>
	                    </section>	
	                </content>
	            </xphp>									
	
	
	            <xphp content="true">
	                <if var="events_contact_info"/>	
	                <content>					
	                    <section class="contact_location">
	                        <h3>Event Contact</h3>
	                        <xphp var="events_contact_info" inner="true"/>
	                    </section>	
	                </content>	
	            </xphp>					
	
	            <xphp content="true">
	                <if var="events_related_content"/>
	                <content>
	                    <section class="related_content">
	                        <h3>Related:</h3>
	                        <xphp var="events_related_content" inner="true">
	                            <arg id="image_width">300</arg>
	                        </xphp>										
	                    </section>	
	                </content>
	            </xphp>	
			</div>
		</div>
	</div>

  	<widget type="file">
		<arg id="path">/includes/footer.php</arg>
	</widget>
</body>
</html>