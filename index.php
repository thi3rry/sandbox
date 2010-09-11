<?php

require_once('prepend.php');

if (_get('action') == 'get_module_js'){
  require_once('actions/module.php');
  get_module_js(_get('moduleName'));
}
else if (_get('action') == 'get_module_css'){
  require_once('actions/module.php');
  get_module_css(_get('moduleName'));
}
else if (_get('action') == 'get_module_php'){
  require_once('actions/module.php');
  get_module_php(_get('moduleName'));
}
else if (_get('action') == 'get_module_file'){
  /** @todo */
//    require_once('actions/module.php');
//    get_module_file(_get('moduleName'), NULL, 'file');
}


$TPL = array (
  'title' => "Sandbox",
  'description' => "Bac à sable, page de test, outils divers...",
);
$homepage = new Template('homepage.php', $TPL, true);
$homepage->include_tpl(TRUE);
?>