<?php
  function _get_global_var($var, &$globalVar, $default = false){
    if (isset($globalVar[$var])) {
      $return = $globalVar[$var];
    }
    else {
      $return = $default;
    }

    return $return;
  }
  function _get($var, $default = NULL) {
    return _get_global_var($var, $_GET, $default);
  }
  function _post($var, $default = NULL) {
    return _get_global_var($var, $_POST, $default);
  }
  function _server($var, $default = NULL) {
    return _get_global_var($var, $_SERVER, $default);
  }

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


  require_once('lib/template.class.php');
  $TPL = array (
    'title' => "Sandbox",
    'description' => "Bac à sable, page de test, outils divers...",
  );
  $homepage = new Template('homepage.php', $TPL, true);
  $homepage->include_tpl(TRUE);
?>