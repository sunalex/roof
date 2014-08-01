<?php

if (isset($_POST['submit'])) {
        if(!empty($_POST['time'])){
            $time = $_POST['time'];
        }                            #Если все поля заполнены, то идем дальше
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        if(!empty($_POST['email'])){
            $email = $_POST['email'];
        }        
        $dating = $_POST['dating-name'];
        $to = 'info@radi-lubvi.ru';
        $subject = 'Посетитель заказал свидание!';
        if(!empty($_POST['email'])){
            $message = 'Имя: '.$name. ', Телефон: '.$phone. ', Email: ' .$email. ', Свидание: ' .$dating;
        }
        else{
            $message = 'Имя: '.$name. ', Телефон: '.$phone. ', Время: ' .$time. ', Свидание: ' .$dating;
        }
        
        $headers = 'Content-type: text/html; charset=UTF-8\r\n';

        mail($to, $subject, $message, $headers); #Отправляем данные на почту
}

?>