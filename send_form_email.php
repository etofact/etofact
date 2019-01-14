<?php
$toEmail = "its.bronze.studio@gmail.com";
$mailHeaders = "From: " . $_POST["userName"] . "<". $_POST["userEmail"] .">\r\n";
if(mail($toEmail, $_POST["content"], $mailHeaders)) {
print "<p class='success'> - Есть контакт! Спасибо.</p>";
} else {
print "<p class='Error'>Что-то пошло не так...</p>";
}
?>