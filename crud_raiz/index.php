<?php

require_once('config.php');

// select de todos os dados
// $usuarios = $pdo->query('SELECT * FROM usuarios')->fetchAll();
// echo '<pre>';
// print_r($usuarios);
// echo $usuarios[0]['nome'];
// echo '</pre>';

// select com parâmetro
$nome = 'Daniel Pacheco';
$query = $pdo->prepare("SELECT * FROM usuarios WHERE nome = :nome");
$query->execute(['nome' => $nome]);

$resultado = $query->fetch();

var_dump($resultado);

// inserção pdo
// $row = [
//     'nome' => 'Pedro William',
//     'email' => 'pedro@teste.com'
// ];

// // $sql = "INSERT INTO usuarios SET nome = :nome, email = :email;";
// $status = $pdo->prepare($sql)->execute($row);

// if($status){
//     $usuario_id = (int) $pdo->lastInsertId();
// }

// echo $usuario_id;

// Update pdo
// $row = [
//     'id' => 3,
//     'nome' => 'Pedro William',
//     'email' => 'pedro@teste2.com'
// ];

// $sql = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id;";
// $status = $pdo->prepare($sql)->execute($row);

// echo 'Atualizado!';

//delete pdo
$where = ['id' => 3];

// $pdo->prepare("DELETE FROM usuarios WHERE id = :id")->execute($where);
// echo "Deletado com sucesso";