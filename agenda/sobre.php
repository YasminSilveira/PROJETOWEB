<?php
include_once 'css/header.php'; 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Sobre</title>
</head>
<body background="img/paisagem.jpg">


<?php
date_default_timezone_set('America/Sao_Paulo');
      $dia = date('d');
      $ano =date ('y');
      $mes = date ('m');
      $hora = date(' H');
      $mi = date ('i');

//if de horas//

if ($hora>=0 && ($hora<=12 && $mi>=0 && $mi<=59)){
    echo"<h1>Bom Dia!</h1>";

}else if($hora>=13 && $hora<=17 && $mi>=0 && $mi<=59){
   
    echo "<h1>Boa Tarde!</h1>";

}else{
    
    echo"<h1>Boa Noite!</h1>";
}
//if de dia de semana//
$diasdasemana = array (1 => "Segunda-Feira",2 => "Terça-Feira",3 => "Quarta-Feira",4 => "Quinta-Feira",5 => "Sexta-Feira",6 => "Sábado",0 => "Domingo");
 $hoje = getdate();


 $diadasemana = $hoje["wday"];
 $nomediadasemana = $diasdasemana[$diadasemana];
 echo "<h1> Bem vindo a sua agenda  de contatos</h1>";
 echo "<h1>$nomediadasemana</h1>"; 



//if de mes//
if($mes==1){
 echo"<h1>dia $dia de Janeiro de $ano</h1>";
}else if ($mes==2){
echo" <h1>dia $dia de Fereiro de $ano</h1>";

}else if ($mes==3){
echo" <h1>dia $dia de Março de $ano</h1>";

}else if ($mes==4){
echo"<h1> dia $dia de Abril de $ano</h1>";

}else if ($mes==5){
 echo"<h1>dia $dia de Maio de $ano</h1>";

}else if ($mes==6){
 echo"<h1>dia $dia de Junho de $ano</h1>";

}else if ($mes==7){
 echo"<h1>dia $dia de Julho de $ano</h1>";

}else if ($mes==8){
echo" <h1>dia $dia de Agosto de $ano</h1>";

}else if ($mes==9){
 echo"<h1>dia $dia de Setembro de $ano</h1>";

}else if ($mes==10){
echo" <h1>dia $dia de Outubro de $ano</h1>";

}else if ($mes==11){
 echo"<h1>dia $dia de Novembro de $ano</h1>";

}else{
 echo"<h1>dia $dia de Dezembro de $ano</h1>";

}

?>

</body>
<footer>
<?php
include_once 'css/footer.php'; 
?>
</footer>
</html>
