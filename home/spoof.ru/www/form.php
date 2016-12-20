<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Document</title>
</head>
<body>


<?php
if(!empty($_POST['telephone']) && !empty($_POST['name'])  )
{
	if (preg_match("/^\+375(29|44|33|25)\d{7}$/", $_POST['telephone'])){
$to = "yana.kulbeda@gmail.com";
$from = 'yana.kulbeda@gmail.com';
$subject = "Проверка почты";
$message = 'Имя: '.$_POST['name'].'; Телефон: '.$_POST['telephone'].';';
$headers = "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: <yana.kulbeda@gmail.com>\r\n";
$result = mail($to, $subject, $message, $headers);


    if ($result){ 
        echo "<p>Message successfully sent. Please stay connected</p>";
    }
    else{
        echo "<p>Message not sent. Please try again</p>";
    }
}
else {
	echo "<p> Enter your phone number correct</p>";
}}
else {
echo "<p>Required fields are not filled. Enter your name and phone number</p>";
}
?>

</body>
</html>