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
  $paths = array(
    dirname(__FILE__). "/../$moduleName.$type",
    dirname(__FILE__). "/../sandbox.$moduleName.$type",

    dirname(__FILE__). "/../custom/$moduleName.$type",
    dirname(__FILE__). "/../custom/sandbox.$moduleName.$type",
    dirname(__FILE__). "/../custom/modules/$moduleName.$type",
    dirname(__FILE__). "/../custom/modules/sandbox.$moduleName.$type",
    dirname(__FILE__). "/../custom/modules/$moduleName/$moduleName.$type",
    dirname(__FILE__). "/../custom/modules/$moduleName/sandbox.$moduleName.$type",

    dirname(__FILE__). "/../modules/$moduleName.$type",
    dirname(__FILE__). "/../modules/sandbox.$moduleName.$type",
    dirname(__FILE__). "/../modules/$moduleName/$moduleName.$type",
    dirname(__FILE__). "/../modules/$moduleName/sandbox.$moduleName.$type",
  );
  if ($fileName !== NULL) {
    $paths = array(
      dirname(__FILE__). "/../$fileName",
      dirname(__FILE__). "/../sandbox.$fileName",

      dirname(__FILE__). "/../custom/$fileName",
      dirname(__FILE__). "/../custom/sandbox.$fileName",
      dirname(__FILE__). "/../custom/modules/$fileName",
      dirname(__FILE__). "/../custom/modules/sandbox.$fileName",
      dirname(__FILE__). "/../custom/modules/$moduleName/$fileName",
      dirname(__FILE__). "/../custom/modules/$moduleName/sandbox.$fileName",

      dirname(__FILE__). "/../modules/$fileName",
      dirname(__FILE__). "/../modules/sandbox.$fileName",
      dirname(__FILE__). "/../modules/$moduleName/$fileName",
      dirname(__FILE__). "/../modules/$moduleName/sandbox.$fileName",
    );
  }
  foreach($paths as $path) {
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

