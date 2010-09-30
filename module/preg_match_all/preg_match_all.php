<?php

//$h = haystack, $n = needle
function strstrb($h,$n){
    return array_shift(explode($n,$h,2));
}
  $input = stripslashes(utf8_decode($_POST['input']));
  $regexp = stripslashes(utf8_decode($_POST['input-regexp']));

  $matches = array();

  /**
   * when error_reporting is setting to E_ALL or to E_WARNING
   * Avoid showing errors with the path of the file when the regexp is not valid
   * ob_get_contents() get the output error
   * ob_end_clean() delete all output and avoid stopping script when warning occured
   * finally, if $res is false, display the error without the part "found in __FILE__ on line __LINE__"
   *
   * it provide a support for the preg_match_all function and help user to found error in his regexp
   */
  ob_start();
    $res = preg_match_all($regexp, $input, $matches);
    $error = ob_get_contents();
  ob_end_clean();
  if ($res === false) {
    die(strstrb($error, 'found in'));
  }
  ?>
  <table>
  <?php foreach($matches as $key => $matche): ?>
    <tr>
      <td><?php echo $key ?></td>
    <?php foreach ($matche as $key2=>$serie): ?>
      <td><?php echo $serie ?></td>
    <?php endforeach; ?>
    </tr>
  <?php endforeach; ?>