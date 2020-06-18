<?php 

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
                <form method="post" action="includes/singup.inc.php">
                <div class="po">
                    <label>Vaše ime:</label>
                    <input type="text" name="uid" placeholder="Unesite vaše korisničko ime">
                </div>
                <div class="po">
                    <label>Vaše ime:</label>
                    <input type="text" name="mail" placeholder="Unesite vaš mail">
                </div>
                <div class="do">
                    <label>Šifra</label>
                    <input type="password" name="pwd" placeholder="Unesite vašu šifru">
                </div>
                <div class="do">
                    <label>Šifra</label>
                    <input type="password" name="pwd-repeat" placeholder="Unesite vašu šifru ponovo">
                </div>
                <button class="btne" type="submit" name="singup-submit">sing up</button>
                </form>
            </div>
        </fieldset>
    </body>
</html>