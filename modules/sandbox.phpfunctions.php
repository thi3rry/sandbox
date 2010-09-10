<?php
  $function = $_GET['function'];
  if($function == 'htmlentities') {
    echo htmlentities(htmlentities(stripslashes(utf8_decode($_POST['text']))));
  }
  else if($function == 'rawurlencode') {
    echo rawurlencode(stripslashes(utf8_decode($_POST['text'])));
  }
  else if($function == 'md5') {
    echo md5(stripslashes(utf8_decode($_POST['text'])));
  }
  else if($function == 'sha1') {
    echo sha1(stripslashes(utf8_decode($_POST['text'])));
  }
