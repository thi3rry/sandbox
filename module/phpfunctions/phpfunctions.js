Sandbox.modules.phpfunctions = {
  infos: {
    title: "Module phpfunctions"
  },
  init: function(jqueryObject) {
    var availableFunctions = {
      htmlentities:'Convert all applicable characters to HTML entities',
      rawurlencode:'URL-encode according to RFC 1738',
      md5:'Calculate the md5 hash of a string',
      sha1:'Calculate the sha1 hash of a string',
      crc32:'Calculates the crc32 polynomial of a string',
      crypt:'One-way string hashing',
      unserialize:'',
      uniqid:''
    };
    var resultContainers = new Array();
    var inputs = new Array();
    jqueryObject.append('<ul></ul>');

    for (functionName in availableFunctions) {
      resultContainers[functionName] = $('<textarea class="input" cols="20" rows="5"></textarea>')
                            .click(function(){
                              this.focus();
                              this.select();
                            });
      inputs[functionName] = $('<textarea class="result output" name="input-'+functionName+'" cols="20" rows="5" rel="'+functionName+'"></textarea>')
                              .keyup(function(){
                                this.functionName = $(this).attr('rel');
                                resultContainers[this.functionName].load('index.php?action=get_module_php&moduleName=phpfunctions&function='+this.functionName, {text: inputs[this.functionName].val() })
                              });

      var item = $('<li></li>')
        .append('<h3><a href="http://php.net/'+functionName+'" title="'+availableFunctions[functionName]+'">'+functionName+'</a>:</h3>')
      ;
      var input = $('<div class="input"></div>')
        .append('<label for="input-'+functionName+'">Input</label>')
        .append(inputs[functionName])
      ;
      var output = $('<div class="output"></div>')
        .append('<label for="output-'+functionName+'">Output</label>')
        .append(resultContainers[functionName])
      ;
      item.append(input).append(output);
      jqueryObject.children('ul').append(item);
    }
  }
}
