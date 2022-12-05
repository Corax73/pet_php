<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])) {$name = $_POST['name'];}
    if (isset($_POST['phone1'])) {$phone = $_POST['phone1'];}
    
    $to = "ramaz999@inbox.ru"; /*Укажите адрес, на который должно приходить письмо*/
    $sendfrom   = "admin@example.com"; /*Укажите адрес, с которого будет приходить письмо*/
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $subject = 'Сообщение из формы:';
    $message = 'Сообщение из формы: <br> <b>Имя пославшего:</b>' . $name . '<br><b>Телефон:' . $phone . '</b>';
    $send = mail ($to, $subject, $message, $headers);
    if ($send == 'true')
    {
    echo 'Спасибо за отправку вашего сообщения!';
    }
    else 
    {
    echo 'Ошибка. Сообщение не отправлено!';
    }
} else {
    http_response_code(403);
    echo "Попробуйте еще раз";
}
?>