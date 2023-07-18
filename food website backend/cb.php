<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Chatbot</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="style.css" />
    <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700,300">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.1.2/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Epilogue:wght@400&family=Finger+Paint&display=swap">
  </head>
  <body>
<body>
    <?php include 'components/user_header.php'; ?>

    <div class="card">
    <div id="header">
      <h1>Chatter box!</h1>
    </div>
    <div id="message-section">
      <div class="message" id="bot"><span id="bot-response">Hello Foodie.. I'm listening! Go on..</span></div>
    </div>
    <div id="input-section">
      <input id="input" type="text" placeholder="Type a message" autocomplete="off" autofocus="autofocus"/>
      <button class="send" onclick="sendMessage()">
        <div class="circle"><i class="zmdi zmdi-mail-send"></i></div>
      </button>
    </div>
  </div>
  <script src="script.js"></script>
  <?php include 'components/footer.php'; ?>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>