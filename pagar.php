<?php
include("conexao.php");
include("protect.php");



$meses = array (1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro");
$diasdasemana = array (1 => "Segunda-Feira",2 => "Terça-Feira",3 => "Quarta-Feira",4 => "Quinta-Feira",5 => "Sexta-Feira",6 => "Sábado",0 => "Domingo");
       
$variavel =  date('d/m/Y');
$variavel = str_replace('/','-',$variavel);
        
$hoje = getdate(strtotime($variavel));
        
$dia = $hoje["mday"];
$mes = $hoje["mon"];

$nomemes = $meses[$mes];
$ano = $hoje["year"];
$diadasemana = $hoje["wday"];
$nomediadasemana = $diasdasemana[$diadasemana];
        
#echo "$nomediadasemana, $dia de $nomemes de $ano";
$dia_plus = "$nomediadasemana, $dia de $nomemes de $ano : ";

$id_post = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$pagar = filter_input(INPUT_POST, 'pagar', FILTER_SANITIZE_STRING);
$divida_ativa = filter_input(INPUT_POST, 'divida_ativa', FILTER_SANITIZE_STRING);
$financeiro_pago = filter_input(INPUT_POST, 'financeiro_pago', FILTER_SANITIZE_STRING);
$divida_paga = filter_input(INPUT_POST, 'divida_paga', FILTER_SANITIZE_STRING);



$divida_paga1 = $divida_ativa - $pagar;
$divida_registro = $divida_paga + $pagar;
$financeiro_aberto = "Pagou: R$:" . $pagar . $dia_plus;
$financeiro_pago = $financeiro_pago . $dia_plus . $divida_registro;

    
$result_bd = "UPDATE usuarios SET financeiro_pago = '$financeiro_pago' WHERE usuarios . id = '$id_post'";
$resultado_usuario = mysqli_query($mysqli, $result_bd);

$result_bd = "UPDATE usuarios SET divida_paga = '$divida_registro' WHERE usuarios . id = '$id_post'";
$resultado_usuario = mysqli_query($mysqli, $result_bd);


$result_bd = "UPDATE usuarios SET financeiro_aberto = '$financeiro_aberto' WHERE usuarios . id = '$id_post'";
$resultado_usuario = mysqli_query($mysqli, $result_bd);

$result_bd = "UPDATE usuarios SET divida_ativa = '$divida_paga1' WHERE usuarios . id = '$id_post'";
$resultado_usuario = mysqli_query($mysqli, $result_bd);


if(mysqli_insert_id($mysqli)) {
   header("Location: index.php");

}else{
    header("Location: financeiro.php?busca=$nome");
   
}
