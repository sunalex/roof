<?php

if (isset($_POST['submit'])) {        #Если кнопка была нажата
    // if (empty($_POST['name'])) {      #Проверяем пуста или нет переменная name
    //     $info = 'Вы не указали имя.';
    // }
    // if (empty($_POST['phone'])) {    #Проверяем был ли сделан выбор
    //     $info = 'Вы не указали телефон.';
    // }
    // if (empty($_POST['email'])) {    #Проверяем был ли сделан выбор
    //     $info = 'Вы не указали email.';
    // }
    // else {
        if(!empty($_POST['time'])){
            $time = $_POST['time'];
        }                            #Если все поля заполнены, то идем дальше
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        if(!empty($_POST['email'])){
            $email = $_POST['email'];
        }        
        $dating = $_POST['dating-name'];
        $to = 'sunalex@sunalex.ru';
        $subject = 'Посетитель заказал свидание!';
        if(!empty($_POST['email'])){
            $message = 'Имя: '.$name. ', Телефон: '.$phone. ', Email: ' .$email. ', Свидание: ' .$dating;
        }
        else{
            $message = 'Имя: '.$name. ', Телефон: '.$phone. ', Время: ' .$time. ', Свидание: ' .$dating;
        }
        
        $headers = 'Content-type: text/html; charset=UTF-8\r\n';

        mail($to, $subject, $message, $headers); #Отправляем данные на почту
        $info = 'Спасибо';
    // }
}

$info = (isset($info)) ? $info : NULL;
/*echo $info;*/

/*print "<p>";
print ("Спасибо, что решили заказать свидание, мы скоро свяжемся с вами!");
print "</p>";*/

?>