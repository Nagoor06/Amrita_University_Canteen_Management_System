
<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
};

include 'components/add_cart.php';

// Include the QR code library
require_once 'phpqrcode/qrlib.php';
$grand_total = 0;
                    $cart_items = []; // Initialize an empty array
                    $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
                    $select_cart->execute([$user_id]);
                    if ($select_cart->rowCount() > 0) {
                        while ($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)) {
                            $cart_items[] = $fetch_cart['name'] . ' (' . $fetch_cart['price'] . ' x ' . $fetch_cart['quantity'] . ') - ';
                            $total_products = implode($cart_items);
                            $grand_total += ($fetch_cart['price'] * $fetch_cart['quantity']);
                        }
                    }




// ...

// Retrieve the amount from the cart or set it to a specific value
$amount = $grand_total; // Assuming $grand_total contains the total amount

// Generate a unique filename for the QR code image
$filename = 'qrcodes/' . uniqid() . '.png';

// Generate the QR code using the amount and save it as an image
QRcode::png($amount, $filename, QR_ECLEVEL_L, 10, 2);

// ...
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Payment gateway form design in Hindi</title>
    <link rel="stylesheet" type="text/css" href="pcss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'components/user_header.php'; ?>
<!-- ... -->

<div class="payment-section">
    <!-- ... -->
    
    <button onclick="generateQRCode()">Generate QR Code</button>
</div>

<div class="qr-code" id="qrCodeSection">
    <h2>QR Code</h2>
    <img src="<?php echo $filename; ?>" alt="QR Code">
</div>

<!-- ... -->
<?php include 'components/footer.php'; ?>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>
