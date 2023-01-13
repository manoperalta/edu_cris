<?php
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
$agenda1x = filter_input(INPUT_POST, 'agenda', FILTER_SANITIZE_STRING);
$agenda2x = filter_input(INPUT_POST, 'agenda2x', FILTER_SANITIZE_STRING);
$agenda3x = filter_input(INPUT_POST, 'agenda3x', FILTER_SANITIZE_STRING);
$agenda4x = filter_input(INPUT_POST, 'agenda4x', FILTER_SANITIZE_STRING);
$horario1x = filter_input(INPUT_POST, 'horario1x', FILTER_SANITIZE_STRING);
$horario2x = filter_input(INPUT_POST, 'horario2x', FILTER_SANITIZE_STRING);
$horario3x = filter_input(INPUT_POST, 'horario3x', FILTER_SANITIZE_STRING);
$horario4x = filter_input(INPUT_POST, 'horario4x', FILTER_SANITIZE_STRING);
$esp = "<br>";
$agenda = $agenda1x . $horario1x . $esp . $agenda2x . $horario2x . $esp . $agenda3x . $horario3x . $esp . $agenda4x . $horario4x;

echo "Nome: $nome <br>";
echo "E-mail: $email <br>";
echo "Tipo: $tipo<br>";
echo "Agenda: $agenda<br>";
echo "Senha: $senha<br>";
echo "Agenda: $agenda<br>";

$result_bd = "UPDATE usuarios SET (nome, email, tipo, agenda, senha)  VALUES('$nome', '$email', '$tipo', '$agenda', '$senha') WHERE id='$id'";
$resultado_usuario = mysqli_query($mysqli, $result_bd);

if(mysqli_insert_id($mysqli)) {

    header("Location: painel.php");

}else{
    header("Location: index.php");
}
