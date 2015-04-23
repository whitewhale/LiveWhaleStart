<?php require $_SERVER['DOCUMENT_ROOT'].'/livewhale/frontend.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <widget type="file"><arg id="path">/includes/head.html</arg></widget>
<meta name="pagename" content="Basic Page (no sidebar)"/>
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
			<div id="body" class="col-sm-9">
				<div id="main" class="editable">
<p>
The pilots of the Su-25 fighter aircraft ejected from the planes, the Ukrainian government said, but their whereabouts are unknown. The incidents occurred near the Russian border, in a part of the country where the government is waging a battle against pro-Russia separatists.
</p>
<p>
However, at an afternoon security briefing, a Ukraine defense spokesman said the military believes that the missiles that brought down the planes came not from separatists in Ukraine but from the Russian side of the border.
</p>
<p>
"They were downed not by terrorists," said Andriy Lysenko, spokesman for the National Security and Defense Council, using the government's term for the separatists. "‎According to our preliminary information it was done from across the border."
</p>
				</div>
			</div>
		</div>
	</div>

  	<widget type="file">
		<arg id="path">/includes/footer.php</arg>
	</widget>
</body>
</html>