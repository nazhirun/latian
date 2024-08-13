<!DOCTYPE html>
<html>

<head>
    <?php
  session_start();
  include "https://majuintech.com/nazhir/latian/latuas//koneksi.php";
?>
    <meta charset="UTF-8">
    <title>Login Form</title>


    <link rel="stylesheet" href="login/css/normalize.css">
    <link rel="stylesheet" href="login/css/style.css">
</head>

<body>
    <form method="post" action="ceklogin.php?op=in" name="login">
        <div class="login">
            <h2>
                <center>Silahkan Login</center>
                </>
                <fieldset>
                    <input type="text" placeholder="Username" name="username" />
                    <input type="password" placeholder="Password" name="password" />
                </fieldset>

                <input type="submit" value="Log In" name="login" />
                <div class="utilities">
                    <a href="#">Forgot Password?</a>
                    <a href="#">S&ign Up rarr;</a>
                </div>
        </div>
    </form>
</body>

</html>