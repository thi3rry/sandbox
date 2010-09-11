<?php

/**
 * get a the file path of a file
 * @param <type> $filePath
 * @param <type> $type
 * @return <type>
 */
function get_filepath($filePath, $type) {
  $pathinfo = pathinfo($filePath);
  $dirname = $pathinfo['dirname'];
  $basename = $pathinfo['basename'];
  $extension = $pathinfo['extension'];
  $filename = $pathinfo['filename'];
  $paths = array(
    build_filepath('custom', $type, $dirname, $filename, "sandbox-$type.$basename"),
    build_filepath('custom', $type, $dirname, $filename, $basename),
    build_filepath('custom', $type, $dirname, "sandbox-$type.$basename"),
    build_filepath('custom', $type, $dirname, $basename),
    build_filepath('custom', $type, "sandbox-$type.$basename"),
    build_filepath('custom', $dirname, "sandbox-$type.$basename"),
    build_filepath('custom', $dirname, $basename),
    build_filepath('custom', "sandbox-$type.$basename"),
    build_filepath('custom', $basename),

    build_filepath($type, $dirname, $filename, "sandbox-$type.$basename"),
    build_filepath($type, $dirname, $filename, $basename),
    build_filepath($type, $dirname, "sandbox-$type.$basename"),
    build_filepath($type, $dirname, $basename),
    build_filepath($type, "sandbox-$type.$basename"),
    build_filepath($dirname, "sandbox-$type.$basename"),
    build_filepath($dirname, $basename),
    build_filepath("sandbox-$type.$basename"),
    build_filepath($basename),
  );
  foreach($paths as $path) {
    if (file_exists($path)) {
      return $path;
    }
  }
}

/**
 * build a file path with all the args
 * @return <type>
 */
function build_filepath() {
  $args = func_get_args();
  $result = '';
  foreach ($args as $elem) {
    $result .= $elem . DIRECTORY_SEPARATOR;
  }
  $result = substr($result, 0, strlen($result)-1); // remove the last /
  return $result;
}
