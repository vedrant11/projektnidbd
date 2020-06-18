<?php
$_SESSION['username'] = 'Admin';
?>
<!doctype html>
<html>
    <head>
        <title>D-B-D</title>
        <link rel="stylesheet" type="text/css" href="res_css.css">
        <link rel="stylesheet" type="text/css" href="krei_pr.css">
        <link rel="stylesheet" type="text/css" href="katalog.css">     
    </head>
    <body>
        <h1 class="naslov">D-B-D STOLARIJA</h1>
        <div id="lista_vrata">
            <ul class="meni">
                <li><a href="../index.html">POCETNA</a></li>
                <li><a href="../O_NAMA.html">O NAMA</a></li>
                <li><a href="../KONTAKTI.html">KONTAKTI</a></li>
                <li><a href="../KATALOG.php">KATALOG</a></li>
            </ul>
        </div>
        <a href="kreiranje_P.html"><input class="dugme" type="button" value="KREIRAJ PROIZVOD" onclick="href='kreiranje_P.html'" /></a>
        <img class="slika" src="logo.jpg">
            <main>
                <section class=""> 
                    <div>
                        <br></br>
                        <div class="kp">
                        <h1>KATALOG</h1>
                            <?php
                            include_once 'inc/dbh.inc.php';
                            $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC;";
                            $stmt = mysqli_stmt_init($conn);
                            if (!mysqli_stmt_prepare($stmt, $sql)) {
                                echo "SQL pogreška!";
                            }
                            else {
                                mysqli_stmt_execute($stmt);
                                $result = mysqli_stmt_get_result($stmt);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<a href="#">
                                    <h3 class="po">'.$row["titleGallery"].'</h3>
                                    <img class="imga" src="slike/'.$row["imgFullNameGallery"].'">
                                    <p class="po">'.$row["decsGallery"].'</p>
                                    </a>';
                                }
                            }
                            
                            ?>

                        </div>
                        <br></br>
                        <br></br>
                        <br></br>
                        <div> 
                        <?php
                        if (isset($_SESSION['username'])) {
                            echo '<div class="kp">
                                    <form action="inc/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
                                        <input class="po" type="text" name="filename" placeholder="Ime slike....">
                                        <input class="po" type="text" name="filetitle" placeholder="Naslov slike....">
                                        <input class="po" type="text" name="filedesc" placeholder="Opis slike....">
                                        <input class="po" type="file" name="file">
                                        <button class="btne" type="submit" name="submit">UPLOAD</button>
                                    </form>
                                </div>';
                        }
                        
                        ?>
                        </div>
                    </div>
                </section>
            </main>
    </body>
</html>