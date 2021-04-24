<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
$uploadOk = 1;


$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// verifica se o arquivo de imagem é real
if(isset($_POST['submit'])) {
    $check = getimagesize($_FILES['fileToUpload']['tmp_name']);

    if($check !== false) {
        echo "O arquivo é uma imagem - " . $check['mime'] . ".<br>";
    } else {
        echo "O arquivo não é uma imagem";
        $uploadOk = 0;
    }
}

// verifica se o arquivo já existe
if(file_exists($target_file)) {
    echo "Desculpe, o arquivo já existe";
    $uploadOk = 0;
}

// verifica o tamanho do arquivo
if($_FILES['fileToUpload']['size'] > 5000000) {
    echo "Desculpe, seu arquivo é muito grande.";
    $uploadOk = 0;
}

// certifica que o arquivo é do tipo imagem
if($imageFileType != "jpg" && $imageFileType != 'png' && $imageFileType != 'jpeg' && $imageFileType != 'gif') {
    echo "Desculpe, apenas arquivos JPG, JPEG, PNG e GIF são permitidos.";
    $uploadOk = 0;
}

// verifica se a variavel $uploadOk está com 0 ou 1 (1 - permitida para upload)
if($uploadOk === 0) {
    echo "Desculpe, o seus arquivo não foi enviado para o servidor.";
} else {
    // verificar se o diretório /uploads existe
    if(!file_exists('uploads')) {
        mkdir('uploads', 0777, true);
    }

    // move o arquivo da pasta /tmp para a pasta /uploads
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
        echo "O arquivo " . basename($_FILES['fileToUpload']['name']) . " foi enviado com sucesso!";
    } else {
        echo "Desculpe, houve um erro ao enviar o seu arquivo para o servidor.";
    }
}