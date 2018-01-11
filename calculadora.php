<head>
<title>Calculadora PHP</title>
</head>
<body>
<form action="" method="post"><h1>Calculadora</h1>
    <font size="3" face="Verdana">Digite o primeiro Número:<input name="a" type="text"  pattern="[0-9]+$" title="Digite apenas números"/><br>
    Digite o segundo Número:<input name="b" type="text"  pattern="[0-9]+$" title="Digite apenas números"/><br>
    <input name="operacao" type="submit" value="+">
    <input name="operacao" type="submit" value="-">
    <input name="operacao" type="submit" value="*">
    <input name="operacao" type="submit" value="/"> 
<br><br>
Digite a porcentagem que deseja saber (sem o sinal "%"):<input name="porcentagem" type="text" pattern="[0-9]+$" title="Digite apenas números"/><br>
Digite o número que deseja saber a porcentagem:<input name="porcentagem2" type="text" pattern="[0-9]+$" title="Digite apenas números"/><br>
<input name="operacao" type="submit" value="%">
<br><br>
Raiz Quadrada:<input name="raiz" type="text" pattern="[0-9]+$" title="Digite apenas números"/><br>  
<input name="operacao" type="submit" value="√"> 

<br><br>
Converter Binário para Decimal:<input name="bin" type="text" pattern="[0-1]+$" title="Digite apenas números entre 0 e 1"/><br>  
<input name="operacao" type="submit" value="bin"> 

<br><br>
Converter Decimal para Binário:<input name="dec" type="text" pattern="[0-9]+$" title="Digite apenas números"/><br>  
<input name="operacao" type="submit" value="dec"> 

<br><br>
Converter Decimal para hexadecimal:<input name="hex" type="text" pattern="[a-fA-F\d]+" title="Digite apenas números ou letras de A até F"/><br>  
<input name="operacao" type="submit" value="hex"> </font>
</body>
</form><b><center><font size="5" face="Verdana">
<?php
//declaração das variaveis
if (isset($_POST['a'],$_POST['b'],$_POST['operacao'],$_POST['porcentagem'],$_POST['porcentagem2'],$_POST['raiz'],$_POST['dec'],$_POST['hex'])){
   $a = $_POST['a'];
   $b = $_POST['b'];
   $op = $_POST['operacao'];
   $porcentagem = $_POST['porcentagem'];
   $porcentagem2 = $_POST['porcentagem2'];
   $raiz = $_POST['raiz'];  
   $bin = $_POST['bin'];
   $dec = $_POST['dec']; 
   $hex = $_POST['hex'];
}
//fim da declaração 
   
//Estrutura SWITCH para calcular as operações básicas E TAMBÉM A PORCENTAGEM
if (isset($op)) {
   switch ($op) {
     case "+":
          $c = $a + $b;
          break;
     case "-":
          $c = $a - $b;
          break;
     case "*":
          $c = $a * $b;
          break;
     case "/":
          $c = $a / $b;
          break;
     case "%":
          $c = ($porcentagem * $porcentagem2) / 100;
          break;
     case "√":
          $c = sqrt($raiz);
          break;
     case "bin";
          $c = bindec($bin);
          break;  
     case "dec":
          $c = decbin($dec);
          break;
     case "hex":
          $c = dechex($hex);
          break;             
}
}
if (isset($c)) {
     echo "RESULTADO= $c"; 
}
?></b></font></center>
