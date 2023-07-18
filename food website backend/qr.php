<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $qrData = $_POST['qr_data'];
    // Perform necessary operations with the received QR code data
    // Example: Verify the QR code data against a database entry or perform any other authentication logic
    if (/* Verification succeeds */) {
        // Login successful
        echo "Login successful!";
    } else {
        // Login failed
        echo "Login failed!";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login with ID Card QR Code</title>
    <link rel="stylesheet" type="text/css" href="scanner.css">
</head>
<body>
    <div class="container">
        <h2>Login with ID Card QR Code</h2>
        <div id="qr-reader"></div>
        <div id="qr-result"></div>
        <form id="login-form" method="post" action="login.php">
            <input type="hidden" id="qr-data" name="qr_data">
            <input type="submit" value="Login">
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <script src="scanner.js"></script>
</body>
</html>
