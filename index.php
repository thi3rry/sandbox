<?php
  $title = "Sandbox";
  $description = "Bac à sable, page de test, outils divers...";
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="fr-FR">
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

    <title><?php echo $title ?></title>
    <meta name="description" content="<?php echo $description ?>" />

    <link href="css/reset.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/smoothness/jquery-ui-1.8.2.custom.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/Sandbox.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/main.css" rel="stylesheet" type="text/css" media="all"/>
    
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.2.custom.min.js"></script>
    <script type="text/javascript" src="js/Sandbox.js"></script>

    <script type="text/javascript" src="modules/sandbox.feedburner.js"></script>
    <script type="text/javascript" src="modules/sandbox.pagerank.js"></script>
    <script type="text/javascript" src="modules/sandbox.phpfunctions.js"></script>
    <script type="text/javascript" src="modules/sandbox.htmlpreview.js"></script>

    <script type="text/javascript" src="js/main.js"></script>
    
    <!--[if IE]><link rel="stylesheet" type="text/css" href="css/ie.css"/><![endif]-->
  </head>
  <body onload="Sandbox.init()">
    <header>
      <h1><?php echo $title ?></h1>
      <p class="description"><?php echo $description ?></p>
    </header>
    <section id="content">
      <div class="sandbox-modules-phpfunctions"></div>
      <div class="sandbox-modules-feedburner"></div>
      <div class="sandbox-modules-pagerank"></div>
      <div class="sandbox-modules-htmlpreview"></div>
    </section>
    <footer>
      &copy; 2010 <a href="http://thi3rry.fr/">thi3rry.fr</a>
    </footer>

  </body>
</html>
