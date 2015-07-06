$(function(){
    
    //$('#ledige-stillinger li:first-child a, #ledige-stillinger li:first-child div').addClass('active');

    $('#ledige-stillinger li>a').click(function(event){
        
        event.preventDefault();
        
        if($(this).hasClass('active')){
            $(this).removeClass('active');
            $(this).next('div').removeClass('active');
        }
        
        else{
            
            $('#ledige-stillinger a, #ledige-stillinger div').removeClass('active');
            
            $(this).addClass('active');
            $(this).next('div').addClass('active');
            
            $('html, body').animate({scrollTo:$(this).offset().top},200);
        
        }
        
    });
    
    
});