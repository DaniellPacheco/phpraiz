<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send File</title>
</head>
<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        Selecione uma imagem:
        <input type="file" name="fileToUpload">
        <br>
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>
