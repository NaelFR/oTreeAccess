<html>

<?php
/**
 * Created by PhpStorm.
 * User: naelabc
 * Date: 19/01/2018
 * Time: 20:29
 */
    include "header.php";

    $host = 'localhost:8000/join/' . $_POST['pin'] . '/';
    if($socket =@ fsockopen($host, 80, $errno, $errstr, 30)) {
        fclose($socket);
        header('Location: http://' . $host);
        exit();
    } else {
        echo 'Session introuvable.';
    }

    include "script.php"
?>
</html>
