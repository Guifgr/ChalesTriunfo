$(function(){
    
    $(document).ready(function() {
  // Images loaded is zero because we're going to process a new set of images.
  var imagesLoaded = 0;
  // Total images is still the total number of <img> elements on the page.
  var totalImages = $('img').length;

  // Step through each image in the DOM, clone it, attach an onload event
  // listener, then set its source to the source of the original image. When
  // that new image has loaded, fire the imageLoaded() callback.
  $('img').each(function(idx, img) {
    $('<img>').on('load', imageLoaded).attr('src', $(img).attr('src'));
  });

  // Do exactly as we had before -- increment the loaded count and if all are
  // loaded, call the allImagesLoaded() function.
  function imageLoaded() {
    imagesLoaded++;
    if (imagesLoaded == totalImages) {
      allImagesLoaded();
    }
  }

  function allImagesLoaded() {
    console.log('ALL IMAGES LOADED');
  }
});
    
    
    //aqui vai todo o código JS
    $('nav.mobile').click(function(){
       var listaMenu = $('nav.mobile ul ');  

    if(listaMenu.is(':hidden') === true){
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
        if(elemento == '#depoimentos'){
            $('html,body').animate({scrollTop:divScroll},2000)
        }
        else if(elemento=='#onde'){
            $('html,body').animate({scrollTop:divScroll},800)
        } 
        else{
            $('html,body').animate({scrollTop:divScroll},1000)
        }
                
    }
    
})