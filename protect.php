<?php
if(!isset($_SESSION)){
    session_start();
    

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
    $dia_plus = $nomediadasemana;
    $dia_completo = $nomediadasemana . " ". $dia . " ". "de" . " " . $nomemes . " " . "de" . " ". $ano;
    
}

if(!isset($_SESSION['id'])){
    die(include('index.php'));
    #"Você não pode acessar esta página porque não esta logado. <p><a href=\"index.php\">ENTRAR</a></p>"
}
?>