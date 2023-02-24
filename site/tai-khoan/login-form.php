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
      <h2>LOGIN</h2>
      <h3>Welcome you back</h3>
      <?php
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>

      <form class="login-form" action="dang-nhap.php" method="post">
        <div class="textbox">
          <input  name="ma_kh" spellcheck="false" type="text" placeholder="Username"  value="<?=$ma_kh?>"/>
          <span class="material-symbols-outlined"> account_circle </span>
        </div>
        <div class="textbox">
          <input
          name="mat_khau"
            spellcheck="false"
            id="password"
            type="password"
            placeholder="Password"
            value="<?=$mat_khau?>"
          />
          <span class="material-symbols-outlined"> lock </span>
        </div>
        <button
          class="toggle1"
          type="button"
          onclick="togglePassword(this)"
        ></button>
        <div class="textbox">
          <label class="form-control">
            <input name="ghi_nho" type="checkbox" checked>
            Remember Account?
          </label>
        </div>
        <button name="btn_login" class="button-submit" type="submit">LOGIN</button>
        <div class="rs-ft" style="display: flex">
          <a href="#" style="padding-right: 10px">Forgot password!</a>
          <a href="#">Resigter</a>
        </div>
      </form>
    </div>
    <script src="/js/main-style.js"></script>
  </body>
</html>
