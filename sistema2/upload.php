<?php

$dir = $_POST['pasta'];

if (is_dir($dir)) {
    
} else {
    mkdir($dir);
}

$nomeTemp = $_FILES['userfile']['tmp_name'];
$nomeF = $_FILES['userfile']['name'];
$nomeFile = $_POST['pasta'];
$parInfo = pathinfo("$nomeF");
$ext = $parInfo['extension'];

$abc = scandir($dir);

if ( (sizeof($abc)-2) == 0) {
    if ($ext == "jpg" || $ext == "png" || $ext == "jpeg") {
        move_uploaded_file($nomeTemp, $dir."/"."$nomeFile"."1".".$ext");
        echo "<br>"."Upload realizado!";
    }
    } else if ((sizeof($abc)-2) == 1) {
        if ($ext == "jpg" || $ext == "png" || $ext == "jpeg") {
            move_uploaded_file($nomeTemp, $dir."/"."$nomeFile"."2".".$ext");
            echo "<br>"."Upload realizado!";
        }
    } else if ((sizeof($abc)-2) == 2) {
        if ($ext == "jpg" || $ext == "png" || $ext == "jpeg") {
            move_uploaded_file($nomeTemp, $dir."/"."$nomeFile"."3".".$ext");
            echo "<br>"."Upload realizado!";
        }
} else {
    echo "<br>"."Upload não realizado!";
}
// Mariana Rafaela e Gustavo Silva