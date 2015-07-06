<?php 
define('WP_USE_THEMES', false);
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-Type: application/json');
require '../../../../wp-load.php';

$response = array();
function sendError($message){
    $response['error'] = $message;
    echo json_encode($response);
    exit;

}


function sendEmail($from,$to,$subject,$message){
	$header = "From:".$from."\r\n"; 
	$header.= "MIME-Version: 1.0\r\n"; 
	$header.= "Content-Type: text/html; charset=utf-8\r\n"; 
	$header.= "X-Priority: 1\r\n"; 
	mail($to, $subject, $message, $header);
}



if(isset($_POST['name'])){$name         = wp_strip_all_tags($_POST['name']);}
if(isset($_POST['email'])){$email       = wp_strip_all_tags($_POST['email']);}
if(isset($_POST['phone'])){$phone       = wp_strip_all_tags($_POST['phone']);}
if(isset($_POST['message'])){$message   = wp_strip_all_tags($_POST['message']);}
if(isset($_POST['receiver'])){$receiver = wp_strip_all_tags($_POST['receiver']);}



if(!isset($_POST['name']) || !isset($_POST['email'])){
    sendError('Fejl: navn eller email mangler.');
}

if(!isset($_POST['receiver'])){
    sendError('Fejl: modtager mangler.');
}


$know_more = false;
if(isset($_POST['check-1'])){$know_more = true;}
if(isset($_POST['check-2'])){$know_more = true;}
if(isset($_POST['check-3'])){$know_more = true;}
if(isset($_POST['check-4'])){$know_more = true;}
if(isset($_POST['check-5'])){$know_more = true;}
if(isset($_POST['check-6'])){$know_more = true;}



$new_post_title = 'Udfyldt kontaktformular fra: '.$name.'['.$email.']';


require 'mail_header.php';
require 'mail_header_white.php';

$content_extra = '<h1>Tak for din henvendelse</h1>';

$content_extra .= '<p>Herunder kan du se en kopi af den email vi modtager. Vi kontakter dig hurtigst muligt</p><hr/>';


$content = '<h3>Ny besked via kontaktformularen på aa-w.dk</h3>';

$content .= '<p>Afsendt af: '.$name.'</p>';
$content .= '<p>Email: <a href="mailto:'.$email.'">'.$email.'</a></p>';
if(isset($phone)){

    $content .= '<p>Telefonnummer: '.$phone.'</p>';
    
}

if ($know_more == true) {
    $content .= '<p><strong>'.$name.' vil gerne vide mere om:</strong><p><ul>';
    if(isset($_POST['check-1'])){$content .= '<li>Ejendomsservice</li>';} 
    if(isset($_POST['check-2'])){$content .= '<li>Rengøring</li>';}
    if(isset($_POST['check-3'])){$content .= '<li>Vinduespudsning</li>';}
    if(isset($_POST['check-4'])){$content .= '<li>Havearbejde</li>';}
    if(isset($_POST['check-5'])){$content .= '<li>Snerydning</li>';}
    if(isset($_POST['check-6'])){$content .= '<li>Skadeservice</li>';}
    $content .= '</ul>';
}


if(isset($message) && !empty($message)){


    $content .= '<p><strong>Tilføjet besked: </strong></p><hr>';
    
    $content .= nl2br($message);
    
    $content .= '<hr>';
    
}


$content .= '<p style="font-size:10px;color:#888;">('.$name .' er sat som afsender af denne email, så du kan svare direkte tilbage på den.)</p>';


require 'mail_footer.php';


$new_post_array = array(
    'post_content'   => $content_header_white.$content, 
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

sendEmail($email,$receiver,'Ny besked fra kontaktformular',$content_header_white.$content);
sendEmail('info@aa-w.dk',$email,'Tak for din henvendelse',$content_header.$content_extra.$content);


