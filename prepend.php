<?php
define('SANDBOX_LIB_DIR', realpath('lib'));

require_once(SANDBOX_LIB_DIR . DIRECTORY_SEPARATOR . 'variable.php');
require_once(SANDBOX_LIB_DIR . DIRECTORY_SEPARATOR . 'file.php');
require_once(SANDBOX_LIB_DIR . DIRECTORY_SEPARATOR . 'template.class.php');

ini_set('docref_root', 'http://php.net/');
set_error_handler("display_error");

function display_error($errno, $errstr, $errfile, $errline, $errcontext){
  $errtitle = array(
      E_ERROR => 'error',
      E_USER_ERROR => 'error',
      E_NOTICE => 'notice',
      E_USER_NOTICE => 'notice',
      E_PARSE => 'parse',
      E_WARNING => 'warning',
      E_USER_WARNING => 'warning',
  );

  if (!defined('CUSTOM_ERROR_DONT_SHOW_FILE')) {
    $pathinfo = pathinfo($errfile);
    $dirname = $pathinfo['dirname'];
    $basename = $pathinfo['basename'];
    $extension = $pathinfo['extension'];
    $filename = $pathinfo['filename'];

    $filestr = '';
    if (defined('CUSTOM_ERROR_SHOW_FULL_PATH_FILE')){
      $filestr .= " in <span style='font-weight: bold;'>$errfile</span>";
    }
    else {
      $filestr .= " in <span style='font-weight: bold;'>$basename</span>";
    }
    if (!defined('CUSTOM_ERROR_DONT_SHOW_LINE')) {
      $filestr .= " on line <span style='font-weight: bold;'>$errline</span>";
    }
  }
  $errtype = isset($errtitle[$errno]) ? $errtitle[$errno] : "error-$errno";
  
  echo "<div style='background: red; color: black;'>";
  switch ($errno) {
    case E_USER_ERROR:
    case E_USER_WARNING:
    case E_USER_NOTICE:
    case E_NOTICE:
    case E_WARNING:
    case E_ERROR:
    case E_PARSE:
      echo "<span class='{$errtitle[$errno]}' style='text-transform: capitalize; font-weight: bold;'>{$errtitle[$errno]}:</span> $errstr";
    break;
    default:
      echo "<span class='error-$errno' style='text-transform: capitalize; font-weight: bold;'>error n°$errno:</span> $errstr";
    break;
      
  }
  echo $filestr;
  echo "</div>";

  if($errno < E_NOTICE) {
    exit;
  }

  /* Ne pas exécuter le gestionnaire interne de PHP */
  return true;
}
