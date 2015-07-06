function smamoSetCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires + ";path=/";
}

function smamoGetCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}


function returnSuccess(){

    $('#sidebar-ct-form #loading').remove();
    $('#sidebar-ct-form .form-buttons').replaceWith('<div><p>Tak for din henvendelse, din besked er sendt.</p></div>');

}

$(function(){
    
    var hasSentInfo = smamoGetCookie("smamoblockPMbomb");
    if (hasSentInfo != "") {

        returnSuccess();
        $('#sidebar-ct-form div.form-section').addClass('hidden');
        
    }
    
    function shakeForm(elem){
        
        $(elem).animate({'margin-left':10},10).delay(10).animate({'margin-left':-5},5).delay(5).animate({'margin-left':0},5);
        $(elem + ' input').addClass('error');
        $(elem + ' input').keyup(function(){
            $(elem + ' input').removeClass('error');
        });
    
    }
    
    var ct_step = 0;
    $('#sidebar-ct-form .form-buttons a').on('click',function(e){
        e.preventDefault();
        
        if(ct_step == 3 || ct_step == 4){ct_step = 4;}
        
        else if($(this).hasClass('btn-forw')){
            ct_step ++;
            if(ct_step > 4){ct_step = 4;}
        }
        
        else{
            ct_step --;
            if(ct_step < 0){ct_step = 0;}      
        }
        
        
        if(ct_step === 0){
                
            $('#sidebar-ct-form .form-section').addClass('hidden');
            $('#sidebar-ct-form .section-1').removeClass('hidden');
            $('#sidebar-ct-form .form-buttons a.btn-back').addClass('disabled');
                
        }
        
        
        if(ct_step === 1){
            
            var formData = {};
            $("#sidebar-ct-form").serializeArray().map(function(x){formData[x.name] = x.value;}); 
            
            if(formData.name !== '' && formData.email !== ''){
                
                $('#sidebar-ct-form .form-section').addClass('hidden');
                $('#sidebar-ct-form .section-2').removeClass('hidden');
                $('#sidebar-ct-form .form-buttons a.btn-back').removeClass('disabled');
                $('#sidebar-ct-form .form-buttons a.btn-forw').html('Næste');
            }
            
            else {
                shakeForm('#sidebar-ct-form');
                ct_step = 0;
            }
            
        }
            
        if(ct_step === 2){
                
            $('#sidebar-ct-form .form-section').addClass('hidden');
            $('#sidebar-ct-form .section-3').removeClass('hidden');
            $('#sidebar-ct-form .form-buttons a.btn-forw').html('Send');
            
                
        }
            
            
            
        if(ct_step === 3){
            $('#sidebar-ct-form').addClass('processing');
            $('#sidebar-ct-form .form-section').addClass('hidden');
            $('#sidebar-ct-form .form-buttons a').addClass('disabled');
            
            sendCTData();
        }
        
    });


    $(window).load(function(){
        
        $('#sidebar-ct-form').removeClass('loading');
    
    });

});

// Send
function sendCTData(){

    var formData = $('#sidebar-ct-form').serialize();
       
        $('#sidebar-ct-form').append('<div id="loading"></div>');
    
        $.ajax({
            url : PG_ROOT + '/wp-content/themes/aaw/form/formhandler.php',
            type : 'POST',
            data : formData,
            dataType : 'json',
            success : function(response){
                
                returnSuccess();
                //smamoSetCookie('smamoblockPMbomb','Blocking for multible formrequests on client.',.02);
                
            },
        }); 

}
