<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $whatsapp_number = '919176194533'; 
    $whatsapp_message = "New message from: $name\nEmail: $email\nSubject: $subject\nMessage: $message";
    $encoded_message = urlencode($whatsapp_message);
    $wa_me_link = "https://wa.me/$whatsapp_number/?text=$encoded_message";
    
    echo "<script>window.open('$wa_me_link', '_blank');</script>";

}else{

    header("Location: contact");
    exit;
}

?>
