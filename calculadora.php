<?php
//declaração das variaveis
   $a = $_POST['primeiro'];
   $b = $_POST['segundo'];
   $op = $_POST['operacao'];
//fim da declaração  

//usei a Estrutura de controle If Else para calcular as operações básicas 
   if ($op == '+')
     $c = $a + $b;
     else if ($op == '-')
     $c = $a - $b;
     else if ($op == '*')
     $c = $a * $b;
     else
     $c = $a / $b;
     
     echo "Resultado= $c";
