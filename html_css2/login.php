<?php 
    session_start();
?>
<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>D-B-D</title>
        <link rel="stylesheet" type="text/css" href="css/res_css.css">
        <link rel="stylesheet" href="skinuto/movingbubbles.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/krei_pr.css">
        <script src="skinuto/movingbubbles.js" type="text/javascript"></script>
    </head>
    <body>
        <fieldset>
            <div class="pocetna">
                <a href="index.html"><input class="dugme" type="button" value="NATRAG NA POČETNU" onclick="href='kreiranje_P.html'" /></a>
            </div>
            <div class="kp">
                <h1>Unesite sljedeće podatke:</h1>
                <form method="post" action="includes/login.inc.php">
                <div class="po">
                    <label>Vaše ime:</label>
                    <input type="text" name="mailuid" placeholder="Unesite vaše korisničko ime">
                </div>
                <div class="do">
                    <label>Šifra</label>
                    <input type="password" name="pwd" placeholder="Unesite vašu šifru">
                </div>
                <button class="btne" type="submit" name="login-submit">Login</button>
                </form>
                <form method="post" action="includes/logout.inc.php">
                <button class="btne" type="submit" name="logout-submit">Logout</button>
                </form>
                <a href="singup.php">Sing up</a>
            </div>
        </fieldset>
        <?php
            if (isset($_SESSION['userId'])) {
                echo '<p>LOGOVALI STE SE!</p>';
            }
            else {
                echo '<p>LOGOUTOVALI STE SE!</p>';
            }
            
        ?>
    </body>
</html>
