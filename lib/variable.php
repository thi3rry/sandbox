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
