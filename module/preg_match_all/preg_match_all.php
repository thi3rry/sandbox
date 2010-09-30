<?php
  $input = stripslashes(utf8_decode($_POST['input']));
  $regexp = stripslashes(utf8_decode($_POST['input-regexp']));

  $matches = array();
  preg_match_all($regexp, $input, $matches);
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