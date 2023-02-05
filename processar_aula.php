<?php
include_once("conexao.php");


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

$id_post = $_POST['id'];
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$aula_old = filter_input(INPUT_POST, 'aulas_old', FILTER_SANITIZE_STRING);
$reg_aula = filter_input(INPUT_POST, 'reg_aula', FILTER_SANITIZE_STRING);
$esp = "<br>";
$esp_especial = "<p>";
$aula_reg = $aula_old . $esp_especial . $dia_plus . $esp . $reg_aula . $esp_especial;

# financeiro
$financeiro_new = filter_input(INPUT_POST, 'financeiro_new', FILTER_SANITIZE_STRING);
$financeiro_old = filter_input(INPUT_POST, 'financeiro_old', FILTER_SANITIZE_STRING);
$valor_aula = filter_input(INPUT_POST, 'valor_aula', FILTER_SANITIZE_STRING);
$divida_ativa = filter_input(INPUT_POST, 'divida_ativa', FILTER_SANITIZE_STRING);

$financeiro_pago = filter_input(INPUT_POST, 'financeiro_pago', FILTER_SANITIZE_STRING);
$divida_paga = filter_input(INPUT_POST, 'divida_paga', FILTER_SANITIZE_STRING);

if($financeiro_new == 1){
    $financeiro_aberto = $financeiro_old . $dia_plus;
    $divida_ativa1 = $divida_ativa + $valor_aula;
    echo "Financeiro_aberto: $financeiro_aberto <br>";
    echo "Ativa: $divida_ativa1 <br>";

    $result_bd = "UPDATE usuarios SET financeiro_aberto = '$financeiro_aberto' WHERE usuarios . id = '$id_post'";
    $resultado_usuario = mysqli_query($mysqli, $result_bd);

    $result_bd = "UPDATE usuarios SET divida_ativa = '$divida_ativa1' WHERE usuarios . id = '$id_post'";
    $resultado_usuario = mysqli_query($mysqli, $result_bd);


}if($financeiro_new == 2){
    $financeiro_pago = $financeiro_pago . $dia_plus;
    $divida_paga1 = $divida_paga + $valor_aula;
    echo "Financeiro_aberto: $financeiro_pago <br>";
    echo "Ativa: $divida_paga1 <br>";
    $id_post = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    
    $result_bd = "UPDATE usuarios SET financeiro_pago = '$financeiro_pago' WHERE usuarios . id = '$id_post'";
    $resultado_usuario = mysqli_query($mysqli, $result_bd);

    $result_bd = "UPDATE usuarios SET divida_paga = '$divida_paga1' WHERE usuarios . id = '$id_post'";
    $resultado_usuario = mysqli_query($mysqli, $result_bd);


} else {
    echo "Have a good night!";
  }



echo "Nome: $nome <br>";
echo "E-mail: $email <br>";
echo "Aula Anterior: $aula_old <br>";
echo "Registro atual: $aula_reg <br>";



$result_bd = "UPDATE usuarios SET aulas = '$aula_reg' WHERE usuarios . id = '$id_post'";
$resultado_usuario = mysqli_query($mysqli, $result_bd);

$result_bd = "UPDATE usuarios SET reg_aula = '$reg_aula' WHERE usuarios . id = '$id_post'";
$resultado_usuario = mysqli_query($mysqli, $result_bd);

#link https //api.whatsapp.com/send phone=seunumerodetelefone&text=sua 20mensagem

if(mysqli_insert_id($mysqli)) {

   header("Location: index.php");

}else{
   
    header("Location: aula.php?busca=$nome");
   
}
