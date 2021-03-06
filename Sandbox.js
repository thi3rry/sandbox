(function($){
  Sandbox = {
    errors: new Array(),
    modules: {},
    stateContainer : $('<div id="sandbox-state"></div>'),

    init: function() {
      $('body').prepend(Sandbox.stateContainer);
      $('body').append(Sandbox.console.htmlContainer.hide());
      Sandbox.loadAllModules();
      Sandbox.initAllModules();
    },
    loadAllModules: function(initAfterLoad){
      // load css module file
      for(key in Sandbox.modules){
        Sandbox.loadModule(key, initAfterLoad);
      }
    },
    initAllModules: function(){
      Sandbox.console.log('initAllModules', 'notice', true);
      for(key in Sandbox.modules){
        Sandbox.initModule(key);
      }
    },
    loadModules: function(modules, initAfterLoad){
      for(key in modules){
        moduleName = modules[key];
        Sandbox.loadModule(moduleName, initAfterLoad);
      }
    },
    initModules: function(modules){
      for(key in modules){
        moduleName = modules[key];
        Sandbox.initModule(moduleName);
      }
    },
    loadModule: function(moduleName, initAfterLoad){
      $.getScript('index.php?action=get_module_js&moduleName='+moduleName, function(){
        if(initAfterLoad) Sandbox.initModule(moduleName);
      });
      $("head>link[href$=main.css]").before($('<style type="text/css" media="all" rel="modules/sandbox.'+moduleName+'.css"></style>').load('index.php?action=get_module_css&moduleName='+moduleName))
    },
    initModule: function(moduleName){
      $('.sandbox-modules-'+moduleName).html('');
      $('.sandbox-modules-'+moduleName).each(function(){
        if(!$(this).hasClass('module')) $(this).addClass('module');
        var module = Sandbox.modules[moduleName];
        $(this).append('<h2>'+module.infos.title+'</h2>');
        try {
          module.init($(this));
        }
        catch(e) {
          Sandbox.console.log('An error has occured when loading module <b>'+moduleName+'</b>', 'error', true);
        }
      });
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
        console.log(new Date() + ' : ' +msg);
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
    showError: function(errorKey, delay){
      if (!delay) delay = 2000;
      errorKey  = errorKey - 1;
      var errorContainer = $('<div class="sandbox-error sandbox-error-'+Sandbox.errors[errorKey].type+'">'+Sandbox.errors[errorKey].msg+'</div>').hide();
      $('body').append(errorContainer);
      errorContainer.fadeIn(1000)
                    .delay(delay)
                    .fadeOut(1000)
                    .delay(10, function(){$(this).remove()})
      ;
    }
  };
})(jQuery)