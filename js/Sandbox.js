(function($){
  Sandbox = {
    errors: new Array(),
    modules: {},
    stateContainer : $('<div id="sandbox-state"></div>'),

    init: function() {
      $('body').prepend(Sandbox.stateContainer);
      $('body').append(Sandbox.console.htmlContainer);
      Sandbox.loadAllModules();
    },
    loadAllModules: function(){
      for(key in Sandbox.modules){
        $('.sandbox-modules-'+key).each(function(){
          var module = Sandbox.modules[key];
          $(this).append('<h2>'+module.infos.title+'</h2>')
          module.init($(this));
        });
      }
    },
    loading: function() {
      Sandbox.stateContainer.html('<img src="img/ajaxload.gif"/>');
    },
    stopLoading: function() {
      Sandbox.stateContainer.html('');
    },
    console: {
      htmlContainer: $('<ul id="sandbox-console"></ul>').click(function(){
        $(this).css('height', '20px');
      }),
      log: function(msg, type, display) {
        Sandbox.errors.push({'msg': msg, 'type': type, 'date': new Date()});
        if (display) Sandbox.showError(Sandbox.errors.length);
        Sandbox.console.refresh();
      },
      show: function(){
        Sandbox.console.htmlContainer.show()
      },
      hide: function(){
        Sandbox.console.htmlContainer.hide()
      },
      refresh: function(){
        for(key in Sandbox.errors) {
          error = Sandbox.errors[key];
          var date = error.date.getDate() +'/'+ (error.date.getMonth()+1) +'/'+ error.date.getFullYear() +' '+ error.date.getHours() +'h'+ error.date.getMinutes() +'m'+ error.date.getSeconds() +'s';
          Sandbox.console.htmlContainer.append('<li class="sandbox-error-'+error.type+'"><div class="date">'+date+':</div> <div class="msg">'+error.msg+'</div></li>')
        }
      }
    },
    showError: function(errorKey){
      errorKey  = errorKey - 1;
      $('body').append('<div class="sandbox-error sandbox-error-'+Sandbox.errors[errorKey].type+'">'+Sandbox.errors[errorKey].msg+'</div>');
    }
  };
})(jQuery)