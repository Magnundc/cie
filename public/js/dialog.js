$.dialogo_sucesso = function(msg,time){
    $().toastmessage('showToast', {
        stayTime: time?time:4000,        
        inEffectDuration: 1000,
        text     : msg,
        sticky   : false,
        type     : 'success'
    });    
};

$.dialogo_erro = function(msg,time){
    $().toastmessage('showToast', {
        stayTime: time?time:4000,        
        inEffectDuration: 1000,
        text     : msg,
        sticky   : false,
        type     : 'error'
    });    
};

$.dialogo_informacao = function(msg,time){
    $().toastmessage('showToast', {
        stayTime: time?time:6000,        
        inEffectDuration: 1000,
        text     : msg,
        sticky   : false,
        type     : 'notice'
    });    
};

$.dialogo_aviso = function(msg,time){
    $().toastmessage('showToast', {
        stayTime: time?time:4000,        
        inEffectDuration: 1000,
        text     : msg,
        sticky   : false,
        type     : 'warning'
    });    
};

$.aguardar = function(msg){
    $("body").append('<div id="overlay"><i class="icon-spin icon-spinner"></i> '+msg+'</div><div id="fade"></div>');
    $("#overlay, #fade").show();
};

$.finalizado = function(){
    $("#overlay, #fade").hide();    
    $("#overlay, #fade").remove();    
};