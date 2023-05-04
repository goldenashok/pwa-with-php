<?php
  ob_start();
  session_start();
  include('config.php');

  if($_POST['type'] == 'login' && isset($_POST['userName']) && isset($_POST['userPsw'])) {
    $userName = $_POST['userName'];
    $userPsw = $_POST['userPsw'];

   $sql = "SELECT user_full_name FROM tbl_user WHERE user_name = '". $userName."' AND user_password='".$userPsw."'";
    $rs = mysqli_query($conn, $sql);
		if (mysqli_num_rows($rs)>0) {
       $obj = mysqli_fetch_object($rs);
       $_SESSION['_username'] = $obj->user_full_name;
       header('location:home.php');
    }
  }
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
	<script defer src="validate.js"></script>
  </head>
  <body>
	<p>Welcom to PHP with PWA</p>
	<div class="pwa">
		Welcome to PWA
		<button type="button" onClick="increment()">Click Me</button>
		<p id="demo"></p>
    <div>
        <form method="post" name="loginForm" id="loginForm" action="">
        <input type="hidden" name="type" value="login">
        <input name="userName" id="userName" type="text" placeholder="User Name">
        <input name="userPsw" id="userPsw" type="password" placeholder="User Password">
        <button type="submit" name="submit">Submit</button>
        </form>
    </div>
	</div>
  </body>
</html>