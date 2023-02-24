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
    <title>dang-ky</title>
  </head>
  <body>
    <div class="login">
      <div class="avatar">
        <img src="/img/classroom-1297779_1280.webp" />
      </div>
      <h2>REGISTER</h2>

      <?php
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>

      <form class="login-form" action="dang-ky.php" method="post" enctype="multipart/form-data">
        <div class="textbox">
          <input spellcheck="false" type="text" placeholder="Username"  value="<?=$ma_kh?>"/>
          <span class="material-symbols-outlined"> account_circle </span>
        </div>
        <div class="textbox">
          <input name="mat_khau"
            spellcheck="false"
            id="password"
            type="password"
            placeholder="Password"
            value="<?=$mat_khau?>"
            />
          <span class="material-symbols-outlined"> lock </span>
        </div>
        <div class="textbox">
          <input name="mat_khau2"
            spellcheck="false"
            id="password"
            type="password"
            placeholder="Password"
            value="<?=$mat_khau2?>"
          />
          <span class="material-symbols-outlined"> lock </span>
        </div>
        <div class="textbox">
          <input name="ho_ten" spellcheck="false" type="text" placeholder="Fullname" value="<?=$ho_ten?>" />
          <span class="material-symbols-outlined"> account_circle </span>
        </div>
        <div class="textbox">
          <input name="email" spellcheck="false" type="email" placeholder="Email" value="<?=$email?>" />
          <span class="material-symbols-outlined"> account_circle </span>
        </div>
        <div class="textbox">
          <input class="up-hinh" spellcheck="false" type="file" />
        </div>
        <button
          class="toggle"
          type="button"
          onclick="togglePassword(this)"
        ></button>
        <button
          class="toggle2"
          type="button"
          onclick="togglePassword(this)"
        ></button>
        <button class="button-submit" type="submit" name="btn_register">REGISTER</button>
        <div class="rs-ft" style="display: flex">
          <a href="#" style="padding-right: 10px">Forgot password!</a>
          <a href="#">Login</a>
        </div>
        <input name="vai_tro" value="0" type="hidden">
        <input name="kich_hoat" value="0" type="hidden">
      </form>
    </div>
    <script src="/js/main-style.js"></script>
  </body>
</html>
