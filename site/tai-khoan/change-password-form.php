<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0"
    />
    <link rel="stylesheet" href="/css/style-source.css">
    <title>doi-mat-khau</title>
</head>
<body>
    <div class="login">
        <div class="avatar">
          <img src="/img/classroom-1297779_1280.webp" />
        </div>
        <h2>CHANGE PASSWORD</h2>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>
  
        <form class="login-form" action="doi-mk.php" method="post">
          <div class="textbox">
            <input  name="ma_kh" spellcheck="false" type="text" placeholder="Username"  />
            <span class="material-symbols-outlined"> account_circle </span>
          </div>
          <div class="textbox">
            <input
            name="mat_khau"
              spellcheck="false"
              type="password"
              placeholder="Old Password"
            />
            <span class="material-symbols-outlined"> lock </span>
          </div>
          <div class="textbox">
            <input
            name="mat_khau2"
              spellcheck="false"
              type="password"
              placeholder="A New Password"
            />
            <span class="material-symbols-outlined"> lock </span>
          </div>
          <div class="textbox">
            <input
            name="mat_khau3"
              spellcheck="false"
              type="password"
              placeholder="Enter A New Password"
            />
            <span class="material-symbols-outlined"> lock </span>
          </div>
          <button name="btn_change" class="button-submit" type="submit">Change Password</button>
        </form>
      </div>
</body>
</html>