<?php
class Template {
  private $template;
  private $tmpFilePath;
  private $file;
  private $vars;

  private $templateInitialized = false;

  function Template($file, $vars = array(), $forceCache = false) {
    $this->file = $file;
    $this->tmpFilepath = 'tmp/template/'. $this->file;
    $this->vars = $vars;
    
    $this->create_temp_dir();

    if ($forceCache) {
      $this->init_template();
    }
  }

  function create_temp_dir() {
    if (!file_exists('tmp')) {
      mkdir('tmp');
    }
    if (!file_exists('tmp/template')) {
      mkdir('tmp/template');
    }
  }

  /**
   * static replacement var
   * @param <type> $vars
   */
  function replace_vars($vars = array()) {
    foreach($vars as $key => $value) {
      $this->replace($key, $value);
    }
  }
  function replace($var) {
    $this->template = str_replace("#$var#", $content, $this->template);
  }

  /**
   * dynamic replacement var
   */
  function parse_vars(){
    foreach($this->vars as $var => $value) {
      $this->parse_var($var);
    }
  }
  function parse_var($var) {
    $this->template = str_replace("#$var#", '<?php echo $this->vars["'.$var.'"] ?>', $this->template);
  }

  function init_template() {
    if(($this->template = file_get_contents(get_filepath($this->file, 'template'))) != 0) {
      $this->templateInitialized = true;
    }
  }

  function include_tpl($exit = false) {
    if (!$this->templateInitialized) {
      $this->init_template();
    }
    $this->parse_vars();
    if(($handle = fopen($this->tmpFilepath, 'w+')) !=0) {
      fwrite($handle, $this->template);
      fclose($handle);
    }
    if (file_exists($this->tmpFilepath)) {
      include_once($this->tmpFilepath);
    }
    else {
      throw new Exception("The template file '{$this->file}' could not be found.", $code, $previous);
    }
    if ($exit) {
      exit;
    }
  }

}