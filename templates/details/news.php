<?php require $_SERVER['DOCUMENT_ROOT'].'/livewhale/frontend.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]-->
<head>
    <title><xphp var="news_headline"/>: <xphp var="group_title"/></title>
    <widget type="file"><arg id="path">/includes/head.html</arg></widget>
    <widget type="news_details" priority="high"/>
</head>
<body class="news details">
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
	            <xphp var="news_headline"/>
	          </h1>
	        </header>
        	
			<div id="main">
			
	            <h2 class="date_title"><xphp var="news_date"/></h2>
					
	            <div class="news_summary">
	                <xphp var="news_summary"/>
	            </div>
	            <div class="news_body">
	                <xphp var="news_body"/>
	            </div>			
	
	            <xphp content="true">
	                <if var="news_url"/>
	                <content>
	                    <div class="news_url">Link: <xphp var="news_url" inner="true"/></div>
	                </content>
	            </xphp>
	            <xphp var="news_comments_form"/> <xphp var="news_comments" />			
	        
	            <div class="saveandshare">
	                <xphp var="news_share"/>
	            </div>
	                        
	            <div class="news_last_modified" style="display:none;">
	                Last modified on <xphp var="news_last_modified"/> by <xphp var="news_last_editor"/>.
	            </div>
	            
	        </div>
            
        </article>

        <aside id="sidebar" class="optional">
            <div class="news_image">
                <xphp content="true">
                    <if var="news_image"/>
                    <content>          
                        <div class="image_bordered lw_controls_top">
                          <xphp var="news_image" inner="true" />
                        </div>  
                    </content>
                </xphp>
            </div>  			
        
            <xphp content="true">
                <if var="news_location"/>
                <content>
                    <div class="news_location">
                    <h2>Location: <span><xphp var="news_location" inner="true"/></span></h2>
                    </div>  
                </content>
            </xphp>

            <div class="details_map"></div>

            <xphp content="true">
                <if var="news_contact_info"/>	
                <content>					
                    <div class="contact_location lw_widget">
                        <h3>News Contact</h3>
                        <xphp var="news_contact_info" inner="true"/>
                    </div>	
                </content>	
            </xphp>
            
            <xphp content="true">
                <if var="news_related_content"/>
                <content>
                    <div class="related_links">
                        <h2>Related Links</h2>
                        <xphp var="news_related_content" inner="true"/>
                    </div>
                </content>
            </xphp>

        </aside>
    </div>	

    <widget type="file">
        <arg id="path">/includes/footer.php</arg>
     </widget>
  </body>
</html>