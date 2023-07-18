<?php
session_start();
include 'components/connect.php';

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['qrcode_text'])) {
    $qrcode_text = validate($_POST['qrcode_text']);
    $pin_code = validate($_POST['pin_code']);

    if (empty($qrcode_text)) {
        header("Location: scanneri.php?error=QR CODE is required");
        exit();
    } else {
        $_SESSION['qrcode'] = $qrcode_text;

        if (empty($pin_code)) {
            header("Location: scanneri.php?error=PIN CODE is required");
            exit();
        } else {
            $_SESSION['pin_code'] = $pin_code;

            $select_user = $conn->prepare("SELECT * FROM `users` WHERE regnumber = ? AND pin_code = ?");
            $select_user->execute([$qrcode_text, $pin_code]);
            $row = $select_user->fetch(PDO::FETCH_ASSOC);

            if ($select_user->rowCount() > 0) {
                $_SESSION['user_id'] = $row['id'];
                header('location:home.php');
                exit();
            } else {
                $message[] = 'Incorrect username or password!';
            }
        }
    }
}

?>