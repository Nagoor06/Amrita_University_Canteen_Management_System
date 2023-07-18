<?php
include 'components/connect.php';

session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
};

if (isset($_POST['submit'])) {
    $regnumber = $_POST['regnumber'];
    $regnumber = filter_var($regnumber, FILTER_SANITIZE_STRING);
    $pass = sha1($_POST['pass']);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);

    $select_user = $conn->prepare("SELECT * FROM `users` WHERE regnumber = ? AND password = ?");
    $select_user->execute([$regnumber, $pass]);
    $row = $select_user->fetch(PDO::FETCH_ASSOC);

    if ($select_user->rowCount() > 0) {
        $_SESSION['user_id'] = $row['id'];
        header('location: home.php'); // Redirect to the homepage
        exit; // Stop further execution
    } else {
        $message[] = 'Incorrect username or password!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN STUDENT</title>
    <link rel="stylesheet" type="text/css" href="scanner.css">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
</head>

<body>
    <!-- header section starts  -->
    <!-- header section ends -->
        <form action="" method="post">

            <h2>LOGIN</h2>

            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <div class="row">
                <div class="col-md-6">
                    <video id="preview" width="100%"></video>
                </div>
                <div class="col-md-6">
                    <form method="post" class="form-horizontal">
                        <label>SCAN QR CODE HERE</label>
                        <input type="regnumber" name="regnumber" pattern="[CB.[a-z]{2}.U[2-6]{1}[a-z]{3}[0-9]{5}]" required id="text" readonly placeholder="INPUT QR CODE">
                        <input type="password" name="pass" required placeholder="enter your password" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
                        <input class="button" type="submit" name="submit" value="LOGIN"> <!-- Added name attribute to the submit button -->
                    </form>

                </div>
            </div>
        </form>
        <script>
            let scanner = new Instascan.Scanner({
                video: document.getElementById('preview')
            });
            Instascan.Camera.getCameras().then(function(cameras) {
                if (cameras.length > 0) {
                    scanner.start(cameras[0]);
                } else {
                    alert('No cameras found');
                }

            }).catch(function(e) {
                console.error(e);
            });

            scanner.addListener('scan', function(c) {
                document.getElementById('text').value = c;
                document.forms[0].submit();
            });

        </script>
</body>

</html>
