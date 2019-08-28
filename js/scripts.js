$(function(){
    //aqui vai todo o código JS
    $('nav.mobile').click(function(){
       var listaMenu = $('nav.mobile ul ');  

    if(listaMenu.is(':hidden') == true){
        var icone = $('.botao-menu-mobile').find('i');
        icone.removeClass('fa fa-bars');
        icone.addClass('fa fa-times');
        listaMenu.slideToggle();
    }
    else{
        var icone = $('.botao-menu-mobile').find('i');
        icone.removeClass('fa fa-times');
        icone.addClass('fa fa-bars');
        listaMenu.slideToggle();
    }
    });

    if($('target').length > 0){
        var elemento = '#'+$('target').attr('target');
        
        var divScroll = $(elemento).offset().top;

        $('html,body').animate({scrollTop:divScroll},2000)
                
    }
    
})