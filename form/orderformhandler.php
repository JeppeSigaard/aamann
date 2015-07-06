<?php 

define('WP_USE_THEMES', false); 
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-Type: application/json');
require '../../../../wp-load.php';

function sendEmail($from,$to,$subject,$message){
	$header = "From:".$from."\r\n"; 
	$header.= "MIME-Version: 1.0\r\n"; 
	$header.= "Content-Type: text/html; charset=utf-8\r\n"; 
	$header.= "X-Priority: 1\r\n"; 
	mail($to, $subject, $message, $header);
}


function sendError($message){
    $response['error'] = $message;
    echo json_encode($response);
    exit;

}

$receiver = 'info@aa-w.dk';

$response = array();

if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['bestil'])){
    sendError('Fejl: navn, bestilling eller email mangler.');
}

$bestil = wp_strip_all_tags($_POST['bestil']);
$name = wp_strip_all_tags($_POST['name']);
$email = wp_strip_all_tags($_POST['email']);
$phone = wp_strip_all_tags($_POST['phone']);
$message = wp_strip_all_tags($_POST['besked']);

$new_post_title = 'Udfyldt bestillingsformular fra: '.$name.'['.$email.']';

require 'mail_header.php';

$content_extra = '<h1>Tak for din henvendelse</h1>';

$content_extra .= '<p>Herunder kan du se en kopi af den email vi modtager. Vi kontakter dig hurtigst muligt</p><hr/>';


$content = '<h4>Ny besked via bestillingsformularen på aa-w.dk</h4>';

$content .= '<p>Afsendt af: '.$name.'</p>';
$content .= '<p>Email: <a href="mailto:'.$email.'">'.$email.'</a></p>';
if(isset($phone)){

    $content .= '<p>Telefonnummer: '.$phone.'</p>';
    
}

$content .= '<p>Bestilling af: ' .$bestil.'</p>';


if(isset($message) && !empty($message)){


    $content .= '<p><strong>Tilføjet besked: </strong></p><hr>';
    
    $content .= nl2br($message);
    
    $content .= '<hr>';
    
}


$content .= '<p style="font-size:10px;color:#888;">('.$name .' er sat som afsender af denne email, så du kan svare direkte tilbage på den.)</p>';


require 'mail_footer.php';


$new_post_array = array(
    'post_content'   => $content_header.$content, 
    'post_title'     => $new_post_title,
    'post_status'    => 'private',
    'post_type'      => 'email',
);  

$new = wp_insert_post($new_post_array,true);



if(is_wp_error($new)){sendError($new->get_error_message());}

else{
    
    $response['success'] = 'oprettet med id: '.$new;
    echo json_encode($response);

}

sendEmail($email,$receiver,'Ny besked fra kontaktformular',$content_header.$content);
sendEmail('info@aa-w.dk',$email,'Tak for din henvendelse',$content_header.$content_extra.$content);






?>