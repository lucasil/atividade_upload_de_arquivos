<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de upload</title>
</head>
<body>
    <h1>Formulário para upload de imagem e PDF</h1>
    <fieldset>
        <legend>Faça o upload dos arquivos:</legend>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            
            Faça o upload de uma imagem aqui (extensões jpg, png e bmp):<br><input type="file" name="img" accept=".jpg, .png, .bmp">

            <br>
            
            Faça o upload do arquivo em PDF:<br><input type="file" name="pdf" accept=".pdf">

            <br>

            <input type="submit" value="enviar arquivos">
        </form>
    </fieldset>
</body>
</html>