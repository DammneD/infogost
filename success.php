// <?php
// header("Content-Type: text/html; charset=utf-8");
// $email = htmlspecialchars($_POST["email"]);
// $name = htmlspecialchars($_POST["name"]);
// $tel = htmlspecialchars($_POST["tel"]);

// $check = is_array($_POST['check']) ? $_POST['check'] : array();
// $check = implode (', ', $check );

// $radio = htmlspecialchars($_POST["radio"]);

// $refferer = getenv('HTTP_REFERER');
// $date=date("d.m.y"); // число.месяц.год  
// $time=date("H:i"); // часы:минуты:секунды 
// $myemail = "<?php the_field ('mail-to'); ?>"; // e-mail администратора


// Отправка письма администратору сайта

// $tema = "Инфо ГОСТ";
// $message_to_myemail = "Текст письма:
// <br><br>
// Имя: $name<br>
// E-mail: $email<br>
// Телефон: $tel<br>
// Источник (ссылка): $refferer
// ";

// mail($myemail, $tema, $message_to_myemail, "From: InfoGOST <6a6ywka2@mail.ru> \r\n Reply-To: InfoGOST \r\n"."MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n" );


// Отправка письма пользователю

// $tema = "Инфо ГОСТ";
// $message_to_myemail = "
// Мы получили вашу заявку, свяжемся с вами в ближайшее время.<br>
// ";
// $myemail = $email;
// mail($myemail, $tema, $message_to_myemail, "From: InfoGOST <6a6ywka2@mail.ru> \r\n Reply-To: InfoGOST \r\n"."MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n" );


// Сохранение инфо о лидах в файл leads.xls

// $f = fopen("leads.xls", "a+");
// fwrite($f," <tr>");    
// fwrite($f," <td>$email</td> <td>$name</td> <td>$tel</td>   <td>$date / $time</td>");   
// fwrite($f," <td>$refferer</td>");    
// fwrite($f," </tr>");  
// fwrite($f,"\n ");    
// fclose($f);

// ?>