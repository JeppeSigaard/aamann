jQuery(function($){
    
    $("#page-slider a").prettyPhoto({
        social_tools: false,
    });
    
    var page_owl = $('#page-slider');
    if(page_owl.length){
        
        var page_owl_items = page_owl.attr('data-col');
        if(!page_owl_items){
            page_owl_items = 3;
            console.log('autosetting columns');
        }
        
        var page_auto = false;
        if (page_owl.attr('data-auto') == '1'){
            page_auto = true;
        }
        
        var page_timeout = 8000;
        if(page_owl.attr('data-timeout').length){
            page_timeout = page_owl.attr('data-timeout');
        }
        
        var page_speed = 300;
        if(page_owl.attr('data-speed').length){
            page_speed = page_owl.attr('data-speed');
        }
        

        
        page_owl.owlCarousel({
            margin:5,
            loop:true,
            items:page_owl_items,
            dots:false,
            autoplay : page_auto,
            autoplayTimeout : parseInt(page_timeout),
            autoplaySpeed : parseInt(page_speed),
        });
        
        $("#slidectrl .next").click(function(){
            page_owl.trigger('next.owl.carousel');
          });
          $("#slidectrl .prev").click(function(){
            page_owl.trigger('prev.owl.carousel');
          });
        
    }
});