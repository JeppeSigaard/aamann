function handleSuccess(response){
    $('#bestillingsform .loading').remove();
    $('#bestillingsform .form-desc').replaceWith('<p style="font-size:20px;">Tak for din bestilling, som vi har modtaget og svarer tilbage på hurtigst muligt.</p>');

}


function handleError(data){
    
    function shakeBestilForm(elem){
        
        $(elem).animate({'margin-left':10},10).delay(10).animate({'margin-left':-5},5).delay(5).animate({'margin-left':0},5);
        $(elem + ' input').addClass('error');
        $(elem + ' input').keyup(function(){
            $(elem + ' input').removeClass('error');
        });
    
    }
    
    shakeBestilForm('#bestillingsform');
    
}

function orderFormSubmit(formData){
    
    $.ajax({
        url : PG_ROOT+'/wp-content/themes/aaw/form/orderformhandler.php',
        type : 'POST',
        data : formData,
        dataType : 'json',
        success : function(response){
            handleSuccess(response);
        },
    });
}


$(function(){

    $('.sa-item a').click(function(e){
    e.preventDefault();
        
        $('#bestillingsform').addClass('active');
        $('#bestillingsform input[name="bestil"]').val($(this).attr('data-title'));
        $('#bestillingsform h3 span').html($(this).attr('data-title'));
        
        $('html, body').animate({
            scrollTop: $("#bestillingsform").offset().top - 120
        }, 400);
    
    });
    
    
    $('#price-order').click(function(e){
        e.preventDefault();
        
        
        var formData = {};
        $("#bestillingsform").serializeArray().map(function(x){formData[x.name] = x.value;});
        if(formData.name !='' && formData.email !='' && formData.bestil !=''){
        
            $('#bestillingsform input, #bestillingsform textarea, #bestillingsform a').remove();
            $('#bestillingsform').append('<div class="loading"></div>');
            
            formData = $('#bestillingsform').serialize();
            orderFormSubmit(formData);  
        }
        else{handleError(formData);}
    });
    
});