<head>
<title>Calculadora PHP</title>
</head>
<body>
<form action="" method="post"><h1>Calculadora</h1>
    Digite o primeiro Número<input name="a" type="text"  pattern="[0-9]+$" title="Digite apenas números"/><br>
    Digite o segundo Número<input name="b" type="text"  pattern="[0-9]+$" title="Digite apenas números"/><br>
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
</body>
</form><b>
<?php
//declaração das variaveis
if (isset($_POST['a'],$_POST['b'],$_POST['operacao'],$_POST['porcentagem'],$_POST['porcentagem2'],$_POST['raiz'])){
   $a = $_POST['a'];
   $b = $_POST['b'];
   $op = $_POST['operacao'];
   $porcentagem = $_POST['porcentagem'];
   $porcentagem2 = $_POST['porcentagem2'];
   $raiz = $_POST['raiz'];   
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
}
}
if (isset($c)) {
     echo "RESULTADO= $c"; 
}
?></b>
