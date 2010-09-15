Sandbox.modules.regexp = {
  infos: {
    title: "Module JSRegexp"
  },
  init: function(jqueryObject) {
    var resultContainer = $('<div class="matches true"></div>');
    var inputRegexp = $('Regexp pattern : <input class="input regexp" name="input-regexp" value=".?"/>')
                            .keyup(function(){
                              Sandbox.modules.regexp.result(resultContainer, inputRegexp.attr('value'), input.val(), resultContainer)
                            });
    var input = $('Input : <textarea class="input" name="input-regexp-content" cols="20" rows="5"></textarea>')
                            .keyup(function(){
                              Sandbox.modules.regexp.result(resultContainer, inputRegexp.attr('value'), input.val(), resultContainer)
                            });
    jqueryObject.append(inputRegexp);
    jqueryObject.append(input);
    jqueryObject.append(resultContainer);
  },
  result: function(container, pattern, subject){
    if(Sandbox.modules.regexp.preg_match(pattern, subject)) {
      container.removeClass('false');
      container.addClass('true');
      container.html('matche');
    } else {
      container.removeClass('true');
      container.addClass('false');
      container.html('no matche');
    }
  },
  preg_match: function(pattern, subject){
    var regexp = new RegExp(pattern);
    return regexp.test(subject);
  }
}
