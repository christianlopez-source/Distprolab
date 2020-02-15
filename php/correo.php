<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    //Replace with your email and subject line

    $to             = "christlopbsc12@gmail.com";     // To Email
    $mailsubject    = 'Nuevo cliente';  // Subject
    
	$headers = apache_request_headers();
    $is_ajax = (isset($headers['X-Requested-With']) && $headers['X-Requested-With'] == 'XMLHttpRequest');
    
    //Validation
    if( validate('nombreA')|| validate('emailA') || validate('celularA'))
    {
        $json_out = json_encode(array('status'=>'false', 'message' => 'All fields are required'));
        die($json_out);
    }
    $name           =           htmlspecialchars($_POST["nombreA"]);
    $email          =           htmlspecialchars($_POST["emailA"]);
    $message        =           htmlspecialchars($_POST["celularA"]);

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
       $json_out = json_encode(array('status'=>'false', 'messageA' => 'Error email'));
       die($json_out);
    }
    
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
    {
    die("Unacceptable marks in E-mail");
    }
    /* Email Template */
    $mailbody = "Hey
    Nombre: $name
    E-mail: $email
    Celular: $message
    ";

    $headers= "From:  $name  <$email>\r\n";
    $headers.= "Reply-To:  $name <$email>\r\n";
    $headers.= "X-Mailer: PHP/" . phpversion()."\r\n";
    $headers.= "MIME-Version: 1.0" . "\r\n";

    $mail = @mail($to, $mailsubject, $mailbody , $headers);
    if(!$mail)
    {
        $output = json_encode(array('status'=>'false', 'message' => '<strong>Warning!</strong> Error sending mail'));
        die($output);
    }else{
        $output = json_encode(array('status'=>'true', 'message' => '<strong>Send!</strong> Thank you for your message. '));
        die($output);
    }
}
function validate($item){
    if(isset($_POST[$item]) && $_POST[$item]!=""){
        return false;
    }else{
        return true;
    }
}




?>

