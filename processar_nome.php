<?php
include_once("conexao.php");

$nome = $_POST['nome'];
$id_post = $_POST['id'];

echo "ID: $id_post <br>";
echo "Nome: $nome <br>";
echo "E-mail: $email <br>";
echo "Tipo: $tipo<br>";
echo "Agenda: $agenda<br>";
echo "Senha: $senha<br>";
echo "Agenda: $agenda<br>";

$result_bd = "UPDATE usuarios SET nome = '$nome' WHERE usuarios . id = '$id_post'";
$resultado_usuario = mysqli_query($mysqli, $result_bd);

if(mysqli_insert_id($mysqli)) {

    header("Location: painel.php");

}else{
    $url_plus = "editar.php?busca=" . $nome;
    header("Location: $url_plus");
}
