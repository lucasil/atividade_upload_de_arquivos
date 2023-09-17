<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de upload</title>
</head>
<body>
    <h1>Imagem Enviada</h1>
    <?php         
        $imagemTempName = $_FILES["img"]["tmp_name"];
        $imagemName = $_FILES["img"]["name"];

        move_uploaded_file($imagemTempName, "img/" . $imagemName);

        echo '<img src="img/' . $imagemName . '">';
    ?>

    <h1>Link para o arquivo em PDF</h1>
    <?php 
        $pdfTempName = $_FILES["pdf"]["tmp_name"];
        $pdfName = $_FILES["pdf"]["name"];

        move_uploaded_file($pdfTempName, "pdf/" . $pdfName);

        echo '<a href="pdf/' . $pdfName . '">Clique para abrir seu PDF</a>';
    ?>

</body>
</html>