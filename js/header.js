$(function(){

    var headerPos = $('#hoved-menu').offset().top;
    $(window).scroll(function(){
        
        if($(window).scrollTop() > headerPos){
        
            $('#hoved-menu').addClass('fixed');
            $('aside').addClass('fixed');
        }
        
        else{
            $('#hoved-menu.fixed').removeClass('fixed');
            $('aside.fixed').removeClass('fixed');
        }
    });
   
    $('#menu-mobile').on('click',function(e){
        
        e.preventDefault();
        
        $('#hoved-menu').toggleClass('active');
    
    });
    
});