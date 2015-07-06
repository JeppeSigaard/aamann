jQuery(function($){
    
    var owl = $('#slider');
    if(owl.length){
        
        owl.owlCarousel({
            items:1,
            navigation:false,
            pagination:false,
            autoplay:true,
            autoplayTimeout :8000,
            loop: true,
            dots: false,
            
        });
    }
    
      $("#slidectrl .next").click(function(){
        owl.trigger('next.owl.carousel');
      });
      $("#slidectrl .prev").click(function(){
        owl.trigger('prev.owl.carousel');
      });
    
    $(window).load(function(){
        
        $('#slide-container>div').removeClass('loading');
    
    });
    
});