<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="fr-FR">
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

  <title>#title#</title>
  <meta name="description" content="#description#" />

  <?php include(get_filepath('_head.php', 'template')) ?>


  <script type="text/javascript">
    $(document).ready (function () {
      Sandbox.init()
      Sandbox.loading();
      Sandbox.loadModules(['phpfunctions', 'regexp', 'htmlpreview', 'feedburner', 'pagerank'], true);
      Sandbox.stopLoading();
    });
  </script>
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
    <div class="sandbox-modules-regexp"></div>
  </section>
  <footer>
    &copy; <?php echo date('Y') ?> <a href="http://thi3rry.fr/">thi3rry.fr</a>
  </footer>

</body>
</html>
