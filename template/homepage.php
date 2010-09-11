<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="fr-FR">
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

    <title>#title#</title>
    <meta name="description" content="#description#" />

    <link href="<?php echo get_filepath('css/reset.css', 'template') ?>" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?php echo get_filepath('css/smoothness/jquery-ui-1.8.2.custom.css', 'template') ?>" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?php echo get_filepath('css/Sandbox.css', 'template') ?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo get_filepath('css/main.css', 'template') ?>" rel="stylesheet" type="text/css" media="all"/>

    <script src="<?php echo get_filepath('js/jquery-1.4.2.min.js', 'template') ?>" type="text/javascript"></script>
    <script src="<?php echo get_filepath('js/jquery-ui-1.8.2.custom.min.js', 'template') ?>" type="text/javascript"></script>
    <script src="<?php echo get_filepath('js/Sandbox.js', 'template') ?>" type="text/javascript"></script>

    <script src="<?php echo get_filepath('js/main.js', 'template') ?>" type="text/javascript"></script>

    <script type="text/javascript">
      $(document).ready (function () {
        Sandbox.init()
        Sandbox.loading();
        Sandbox.loadModules(['phpfunctions', 'htmlpreview', 'feedburner', 'pagerank'], true);
        Sandbox.stopLoading();
      });
    </script>

    <!--[if IE]><link rel="stylesheet" type="text/css" href="css/ie.css"/><![endif]-->
  </head>
  <body>
    <header>
      <h1>#title#</h1>
      <p class="description">#description#</p>
    </header>
    <section id="content">
      <div class="sandbox-modules-phpfunctions"></div>
      <div class="sandbox-modules-feedburner"></div>
      <div class="sandbox-modules-pagerank"></div>
      <div class="sandbox-modules-htmlpreview"></div>
    </section>
    <footer>
      &copy; <?php echo date('Y') ?> <a href="http://thi3rry.fr/">thi3rry.fr</a>
    </footer>

  </body>
</html>
