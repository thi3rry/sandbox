<?php
/**
 *
 * @param string $moduleName
 * @param string $type default 'js'
 * @param string $fileName default NULL
 * @param boolean $include default FALSE
 * @param boolean $echo default TRUE
 * @param boolean $exit default TRUE
 * @return <type> 
 */
function get_module_file($moduleName, $type = 'js', $fileName = NULL, $include = FALSE, $echo = TRUE, $exit = TRUE) {
  if ($moduleName === false) throw new Exception('moduleName arg must be a string');
  $result = NULL;
  $path = get_filepath("$moduleName.$type", 'module');
  if ($fileName !== NULL) {
    $path = get_filepath($filename, 'module');
  }
  if(file_exists($path)) {
    if($include) {
      require_once($path);
    }
    else {
      $result = file_get_contents($path);
      if ($echo) {
        echo $result;
      }
    }
    if ($exit) {
      exit;
    }
    return $result;
  }
}
function get_module_css($moduleName) {
  get_module_file($moduleName, 'css');
}
function get_module_js($moduleName) {
  get_module_file($moduleName, 'js');
}
function get_module_php($moduleName) {
  get_module_file($moduleName, 'php', NULL, TRUE, FALSE);
}

