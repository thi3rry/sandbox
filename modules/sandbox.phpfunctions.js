Sandbox.modules.phpfunctions = {
  infos: {
    title: "Module phpfunctions"
  },
  init: function(jqueryObject) {
    var availableFunctions = {htmlentities:'', rawurlencode:'', md5:'', sha1:''};
    var resultContainers = new Array();
    var inputs = new Array();
    for (functionName in availableFunctions) {
      resultContainers[functionName] = $('<textarea class="input" cols="20" rows="5"></textarea>')
                            .click(function(){
                              this.focus();
                              this.select();
                            });
      inputs[functionName] = $('<textarea class="result output" cols="20" rows="5" rel="'+functionName+'"></textarea>')
                              .keyup(function(){
                                this.functionName = $(this).attr('rel');
                                resultContainers[this.functionName].load('modules/sandbox.phpfunctions.php?function='+this.functionName, {text: inputs[this.functionName].val() })
                              });
      jqueryObject
        .append('<span>Input '+functionName+': </span>')
        .append(inputs[functionName])
        .append('<span>Output '+functionName+': </span>')
        .append(resultContainers[functionName])
      ;
    }
  }
}
