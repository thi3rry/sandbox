Sandbox.modules.htmlpreview = {
  infos: {
    title: "Module HTMLPreview"
  },
  init: function(jqueryObject) {
    var input = $('<textarea class="input" cols="20" rows="5"></textarea>');
    var resultContainer = $('<div class="result"></div>');
    jqueryObject.append(input).append(resultContainer);
    input.keyup(function(){
      resultContainer.html(input.val());
    });
  }
}