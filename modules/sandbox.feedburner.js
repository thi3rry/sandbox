Sandbox.modules.feedburner = {
  infos: {
    title: "Module FeedBurner"
  },
  init: function(jqueryObject) {
    var input = $('<input class="input" type="text" value=""/>');
    var resultContainer = $('<div class="result"></div>');
    jqueryObject.append(input).append(resultContainer);
    input.keyup(function(){
      resultContainer.html('<img src="img/ajaxload.gif"/>');
      Sandbox.loading();
      $.ajax({
        type:'GET',
        url:'modules/sandbox.feedburner.php',
        data:{
          feedburnerid:escape(input.attr('value')),
          nothing:'none'
        },
        dataType:'xml',
        success: function(xml){
          var err = $(xml).find('err').attr('msg');
          Sandbox.stopLoading();
          if (!err) {
            resultContainer.html($(xml).find('feed').attr('uri') + " : " + $(xml).find('entry').attr('circulation'));
          } else {
            resultContainer.html(err);
          }
        }
      });
    });
  }
}