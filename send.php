<?php
$theme=$_POST['theme'];
$email=$_POST['email'];
$question=$_POST['question'];

if (mail("avoloch19@gmail.com", "Тема ".$theme,
    "From:" .$email,"Question: ".$question." \r\n")){
    echo "Cообщение успешно отправлено"; 
} else { 
    echo "При отправке сообщения возникли ошибки";
}