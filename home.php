<?php
  ob_start();
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- (A) "USUAL" TITLE CHARSET DESCRIPTION VIEWPORT -->
    <title>Learning PWA</title>
    <meta charset="utf-8">
    <meta name="description" content="Learning PWA page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5">

    <!-- (B) ICONS & PLATFORM SPECIFIC -->
    <!-- (B1) GOOD OLD FAVICON -->
    <link rel="icon" href="icon-60.png" type="image/png">

    <!-- (B2) ANDROID/CHROME -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="white">

    <!-- (B3) IOS APP ICON + MOBILE SAFARI -->
    <link rel="apple-touch-icon" href="icon-512.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="PWA">

    <!-- (B4) WINDOWS -->
    <meta name="msapplication-TileImage" content="icon-512.png">
    <meta name="msapplication-TileColor" content="#ffffff">

    <!-- (C) WEB APP MANIFEST -->
    <!-- https://web.dev/add-manifest/ -->
    <link rel="manifest" href="manifest.json">

    <!-- (D) SERVICE WORKER -->
    <script>
    if ("serviceWorker" in navigator) { navigator.serviceWorker.register("serviceWork.js"); }
    </script>

    <!-- (E) STYLESHEET + JAVASCRIPT
    <link rel="stylesheet" href="YOUR-STYLES.css">
    <script defer src="YOUR-SCRIPTS.js"></script>
    -->
  </head>
  <body>
    
	<a href="index.php">Login</a></br>
	<a href="home.php">Home</a>
  <p>Welcome to <?php echo  $_SESSION['_username']; ?></p>
  </body>
</html>