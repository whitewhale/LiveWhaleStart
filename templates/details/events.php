<?php require $_SERVER['DOCUMENT_ROOT'].'/livewhale/frontend.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]-->
<head>
    <title><xphp var="events_title"/>: <xphp var="group_title"/></title>
    <widget type="file"><arg id="path">/_ingredients/includes/head.html</arg></widget>
    <widget type="events_details" priority="high"/>
</head>
<body class="details events">
  	<widget type="file">
		<arg id="path">/_ingredients/includes/header.php</arg>
	</widget>
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-2">
				<h1><xphp var="events_title"/></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3 sidebar">
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
			<div id="body" class="col-sm-9">
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
		</div>
	</div>

  	<widget type="file">
		<arg id="path">/_ingredients/includes/footer.php</arg>
	</widget>
</body>
</html>