<?php require $_SERVER['DOCUMENT_ROOT'].'/livewhale/frontend.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <widget type="file"><arg id="path">/_ingredients/includes/head.html</arg></widget>
    <meta name="pagename" content="Basic Page (no sidebar)" />
    <title></title>
  </head>
  <body>
    <widget type="file"><arg id="path">/_ingredients/includes/header.php</arg></widget>
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-3">
          <h1>
            <xphp var="page_title"/>
          </h1>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3 nav-sidebar">
          <xphp var="group_navigation"/>
        </div>
        <div id="body" class="col-sm-9">
          <div id="main" class="editable">
            <p>
              &#160;
            </p>
            <p>
              Main content area
            </p>
          </div>
        </div>
      </div>
    </div><widget type="file">
		<arg id="path">/_ingredients/includes/footer.php</arg>
	</widget>
  </body>
</html>