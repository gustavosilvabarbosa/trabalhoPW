<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<title> Imobiliária </title>
</head>
<body>
    <h2> Imóveis </h2>
    <form enctype="multipart/form-data" method="post" action="upload.php">
        <p> Nome da pasta:
            <input type="text" name="pasta">
        </p>
        <p> <input name="userfile" type="file"> </p>
        <p> <button type="submit"> Enviar arquivo </button> </p>
    </form>
    <form method="post" action="index.php">
    <p> Excluir arquivo:
        <select name="excluir" id="exc">
            <?php
            $ext = scandir("../sistema2");
            array_shift($ext);
            array_shift($ext);
            
            foreach ($ext as $key) {
                if (strpos($key, ".") ) {
                    
                }else{
                    echo "<option value=\"$key\"> $key </option>";
                }
            }
            $rst = $_POST['excluir'];
            if (is_dir($rst)) {
                $lmn = scandir($rst);
                array_shift($lmn);
                array_shift($lmn);
                foreach ($lmn as $opq) {
                    unlink("$rst/$opq");
                }
                rmdir($rst);
            }
            ?>
        </select>
    </p>
    <button type="submit"> Excluir pasta </button>
    </form>
            <li> <a href="galeria.php">
                   Ver galeria
                 </a> 
            </li>
</body>
<!-- Mariana Rafaela e Gustavo Silva -->
</html>