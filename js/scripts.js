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
        carregarDinamico();
        function carregarDinamico(){
        $('[realtime]').click(function(){
            var pagina = $(this).attr('realtime');
            $('.container-principal').load('/projeto_site_chale/pages/onde.php');
            $("html, body").animate({ scrollTop: $("#onde").scrollTop() }, 1000);
            return false;

        })
    }
    
})