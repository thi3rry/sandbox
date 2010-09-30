Sandbox.modules.preg_match_all = {
  infos: {
    title: "Module preg_match_all"
  },
  init: function(jqueryObject) {
    var resultContainer = $('<div class="result"></div>')
                            .click(function(){
                              this.focus();
                              this.select();
                            });
    var inputRegexp = $('<input class="input regexp-preg_match_all" name="input-regexp-preg_match_all" value=".?"/>')
                                .keyup(function(){
                                  resultContainer.load('index.php?action=get_module_php&moduleName=preg_match_all', {'input-regexp': inputRegexp.val(), 'input': input.val() })
                                });
    var input = $('<textarea class="result output" name="input-preg_match_all" cols="20" rows="5"></textarea>')
                              .keyup(function(){
                                resultContainer.load('index.php?action=get_module_php&moduleName=preg_match_all', {'input-regexp': inputRegexp.val(), 'input': input.val() })
                              });

    var itemTitle = $('<h3><a href="http://php.net/preg_match_all" title="Expression rationnelle globale">preg_match_all</a>:</h3>');
    var inputRegexpDecorator = $('<div class="input-regexp"></div>')
      .append('<label for="input-preg_match_all">Input Regexp</label>')
      .append(inputRegexp)
    ;
    var inputDecorator = $('<div class="input"></div>')
      .append('<label for="input-preg_match_all">Input</label>')
      .append(input)
    ;
    var outputDecorator = $('<div class="output"></div>')
      .append('<label for="output-preg_match_all">Output</label>')
      .append(resultContainer)
    ;
    jqueryObject.append(itemTitle)
                .append(inputRegexpDecorator)
                .append(inputDecorator)
                .append(outputDecorator);
  }
}
