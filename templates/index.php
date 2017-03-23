<?php require $_SERVER['DOCUMENT_ROOT'].'/livewhale/frontend.php';?>
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
    <widget type="file"><arg id="path">/_ingredients/includes/head.html</arg></widget>
  </head>
  <body>
    <widget type="file">
	         <arg id="path">/_ingredients/includes/header.php</arg>
	    </widget>
    <div class="content container cf">
      <nav>
        <xphp var="group_navigation"/>
      </nav>
      <article>
        <header class="title">
          <h1>
            <xphp var="page_title"/>
          </h1>
        </header>
        <div id="main" class="editable">
          <p class="intro">
            In LiveWhale, any page can be marked to be a template from which you can create pages. (But that doesn’t mean you need a lot of them.)
          </p>
          <p>
            All LiveWhale templates (and their pages) are group-aware, so you can create an entire site from just a handful of templates. <em>We’d say that you could create an entire site from just <strong>one</strong> template, but doing so would negate other benefits of LiveWhale.</em>
          </p>
          <p>
            Typically, you would have templates for the main segments of your site that have repeating designs, such as:
          </p>
          <ul>
            <li>academic sites
            </li>
            <li>offices
            </li>
            <li>centers
            </li>
            <li>major landing pages
            </li>
          </ul>
          <p>
            While you can alter page layout and design simply based on the group while maintaining the same template, using a different template can facilitate additional changes to the markup of the page— the presence and order of page content— such as the addition of a built in widget.
          </p>
          <p>
            It is important to note that LiveWhale users may only create pages with templates to which they have access.
          </p>
        </div>
      </article>
      <aside id="sidebar" class="editable optional">
        <header>
          <h1>
            Does the home page need a template?
          </h1>
          <p>
            No. Templates are for series of pages that should have a consistent look-and-feel or consistent experience.
          </p>
          <p>
            As home pages are tend to be completely custom single instances, they are often built singly via FTP.
          </p>
        </header>
      </aside>
    </div><widget type="file">
        <arg id="path">/_ingredients/includes/footer.php</arg>
     </widget>
  </body>
</html>