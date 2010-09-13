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
  else if($function == 'crc32') {
    echo crc32(stripslashes(utf8_decode($_POST['text'])));
  }
  else if($function == 'crypt') {
    echo crypt(stripslashes(utf8_decode($_POST['text'])));
  }
  else if($function == 'unserialize') {
    echo var_dump(unserialize(stripslashes(utf8_decode($_POST['text']))));
  }
  else if($function == 'uniqid') {
    echo uniqid(stripslashes(utf8_decode($_POST['text'])));
  }
