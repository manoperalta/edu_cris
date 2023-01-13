<?php
include_once("conexao.php");
include("protect.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$fone = filter_input(INPUT_POST, 'fone', FILTER_SANITIZE_STRING);
$responsavel = filter_input(INPUT_POST, 'responsavel', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$data_nasc = filter_input(INPUT_POST, 'data_nasc', FILTER_SANITIZE_STRING);
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
$matricula = $dia_completo;
$registro_inicial = "[Data da Matrícula: ". $matricula . "]";

echo "Nome: $nome <br>";
echo "Fone: $fone <br>";
echo "Responsavel: $responsavel <br>";
echo "Endereço: $endereco <br>";
echo "E-mail: $email <br>";
echo "Data_Nasc: $data_nasc <br>";
echo "Tipo: $tipo<br>";
echo "Senha: $senha<br>";
echo "Agenda: $agenda<br>";
echo "Matricula $registro_inicial";


$result_bd = "INSERT INTO usuarios (nome, fone, responsavel, endereco, email, data_nasc, tipo, agenda, senha, aulas, matricula)  VALUES('$nome', '$fone', '$responsavel', '$endereco', '$email', '$data_nasc', '$tipo', '$agenda', '$senha', '$registro_inicial', '$matricula')";
$resultado_usuario = mysqli_query($mysqli, $result_bd);

if(mysqli_insert_id($mysqli)) {

    header("Location: painel.php");

}else{
    header("Location: index.php");
}
