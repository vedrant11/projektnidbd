<?php
if (isset($_POST['login-submit'])) {
    require 'dbh.inc.php';
    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];
    if (empty($mailuid) || empty($password)) {
        header("Location: ../index.html?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM usres WHERE uidUsers=? OR emailUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.html?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if ($pwdCheck == false) {
                    header("Location: ../index.html?error=wrongpwd");
                    exit();
                }
                else if ($pwdCheck == true){
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];
                    header("Location: ../login.php?login=success");
                    if ($row['typeUsers'] == 1) {
                        header("Location: ../admin.php?loginadmin1=success");
                    }
                    else if ($row['typeUsers'] == 0)
                        header("Location: ../kreiranje_P.html?loginuser0=success");
                    else if ($row['typeUsers'] == 2)
                        header("Location: ../galerija/gallery.php?loginuser2=success");    
                    exit();
                }
                else {
                    header("Location: ../index.html?error=wrongpwd");
                    exit();
                }
            }
            else {
                header("Location: ../index.html?error=nouser");
                exit();
            }
        }
    }
}
else {
    header("Location: ../index.html");
    exit();
}
?>