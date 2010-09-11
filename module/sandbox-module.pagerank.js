Sandbox.modules.pagerank = {
  infos: {
    title: "Module PageRank.fr"
  },
  init: function(jqueryObject) {
    var input = $('<input class="input" type="text value=""/>');
    var resultContainer = $('<div class="result"></div>');
    jqueryObject.append(input).append(resultContainer);
    input.keyup(function(){
      resultContainer.html('<img src="img/ajaxload.gif"/>');
      resultContainer.html('<a href="http://www.pagerank.fr/"><img src="http://www.pagerank.fr/pagerank-actuel.gif?uri='+input.attr('value')+'" style="border: none;" alt="PageRank Actuel"/></a>');
    });
  }
}