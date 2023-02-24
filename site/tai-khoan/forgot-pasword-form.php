<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/style-source.css" />
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
    <title>dang-nhap</title>
  </head>
  <body>
    <div class="login">
      <div class="avatar">
        <img src="/img/classroom-1297779_1280.webp" />
      </div>
      <h2>FORGOT PASSSWORD</h2>
      <h3>Welcome you back</h3>
      <?php
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>

      <form class="login-form" action="dang-nhap.php" method="post">
        <div class="textbox">
          <input  name="ma_kh" spellcheck="false" type="text" placeholder="Username"  />
          <span class="material-symbols-outlined"> account_circle </span>
        </div>
        <div class="textbox">
            <input  name="email" spellcheck="false" type="text" placeholder="Email"  />
            <span class="material-symbols-outlined"> mail </span>
          </div>

        <button name="btn_forgot" class="button-submit" type="submit">Forgot Password</button>
        <div class="rs-ft" style="display: flex">
          <a href="#" style="padding-right: 10px">Login</a>
          <a href="#">Resigter</a>
        </div>
      </form>
    </div>
    <script src="/js/main-style.js"></script>
  </body>
</html>
