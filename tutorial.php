<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
// HELLO WORLD
	echo "Declare uma variável que receba o valor “Hello world“ <br> "; 
	$var = "Hello World";
	echo($var);

	echo "<br><br>";

	var_dump($var);

	echo "<hr>";
	echo "<hr>";

// TIPOS DE VARIAVEIS
	echo "TIPOS DE VARIAVEIS <BR><BR> ";
	$a = "1";						//string
	$b = 1;							//inteiro
	$c = 1.1; 						//float
	$d = true; 						//boolena
	$e = array("ola","tudo bom?");	//array
	$g = "Bem vinda ao PHP Women"; 	// qual a diferenca para a variavel $a?

	var_dump($a); 		
	echo "<hr>";

	echo "Qual a diferença de var_dump e print_r? <br>";
	
	echo "impressao em print_r: <br>"; 
	echo "<pre>";
	print_r($e);
	echo "</pre>";
	echo "impressao em var_dump: <br>";
	var_dump($e);
	
	echo "<hr>";
	echo "<hr>";

// CONCATENACAO
	echo "CONCATENACAO <BR> <BR>";
	$a = "Olá ";
	$b = $a . " mundo!";  
	echo $b;  		echo "<br>";

	$a = 12;
	$b = "Eu tenho " .$a . " anos!";   
	echo $b;  		echo "<br>";

	echo "<hr>";
	echo "<hr>";

// OPERADORES ARITMÉTICOS
	echo "OPERADORES ARITMÉTICOS <br><Br>";
	$a = 10;
	$b = 5;

	echo "Para as variaveis a=" . $a . " e b=" . $b . " temos: <br>";
	// echo "a soma de " . $a . " + " . $b . " é igual a ";
	echo $a + $b . " SOMA";		echo "<br>";
	echo $a - $b . " SUBTRAÇÃO";	echo "<br>";
	echo $a * $b . " MULTIPLICAÇÃO";	echo "<br>";
	echo $a / $b . " DIVISÃO";		echo "<br>";

	echo "<hr>";
	echo "<hr>";

//OPERADOR RELACIONAL
	echo "OPERADORES RELACIONAIS <BR><BR>";

	$a = 3;
	$b = 3;

	echo "Para as variaveis a = " . $a . " e b = " . $b . " temos: <br>";

	echo "os valores são iguais? "; 
	$relacional = $a == $b;
	var_dump( $relacional);
	echo "<hr>";

	echo "os valores e tipos são iguais? "; 
	$relacional = $a === $b;
	var_dump( $relacional);
	echo "<hr>";

	echo "os valores são diferentes? "; 
	$relacional = $a != $b;
	var_dump( $relacional);
	echo "<hr>";

	echo "os valores e tipos são diferentes? "; 
	$relacional = $a !== $b;
	var_dump( $relacional);
	echo "<hr>";

// ---------
	echo "PARA A NEGACAO DA VARIAVEL A: <br>";
	echo "os valores são iguais? "; 
	$relacional = -$a == $b;
	var_dump( $relacional);

	echo "<hr>";
	echo "<hr>";

//OPERADOR LOGICO E LAÇOS
	echo "OPERADORES LOGICOS E LAÇOS <bR>";
	echo "<hr>";
 // IF
	echo "IF <BR><BR>";
	$a = 4;
	$b = 7;
	echo "Para a = $a e b= $b temos: <br>";

	if ($a > $b) {
		echo "a é maior que b";
	}
	echo "<br>";

	if ($b > $a) {
		echo "b é maior que a";
	}
	echo "<hr>";

	echo "A variavel a é um numero par e positivo? <br>";
	if (($a >= 0) && ($a % 2 == 0)) {
		printf("Numero par positivo.\n");
	}
	echo "<hr>";
	echo "<hr>";

// IF ELSE
	echo "IF ELSE <BR><BR>";

	$num = -2;
	echo "A variavel definida com o valor $num é um numero par e positivo? <br>";

	if (($num >= 0) && ($num % 2 == 0)) {
		printf("Numero par positivo.\n");
	} else {
		printf("numero não é par e/ou não é positivo");
	}
	echo "<hr>";

	$a = 3;
	$b = 5;
	$c = 2;
	
	echo "Qual o maior numero dentre as variaveis a= $a, b= $b, c= $c? <br>";
	if ($a > $b & $a > $c){
		print ("$a é o maior numero entre eles");
	} elseif ($b > $a & $b > $c) {
		print ("$b é o maior numero entre eles");
	} elseif ($c > $a & $c > $b ){
		print ("$c é o maior numero entre eles");
	}

	echo "<hr>";

	$hora = 10;
	echo "Para hora igual a $hora, agora: ";
	if($hora <= 12)
		echo "Está de manhã";
	else if($hora > 12 && $hora <= 18)
		echo "Está de tarde";
	else
		echo "Está de noite";

	echo "<hr>";
	echo "<hr>";

// WHILE
	echo "WHILE <br><br>";
	
	$i = 0;
	echo "imprima o valor de $a até 10<br>";
	while ($i <= 10) {
		$i++;
		echo $i ." // ";
	}

	echo "<hr>";
	echo "<hr>";
// FOR
	echo "FOR <BR><bR>";

	for ($i=50; $i <= 70 ; $i++) { 
		echo "sou o numero " . $i . "<br>";
	}

	echo "<hr>";
	echo "<hr>";
// SWITCH
	echo "SWITCH <BR><BR>";

	$nome = "Ana";

	switch ($nome) {
		case 'Ana':
		echo "Bem vinda ao PHP Women " . $nome;
		break;
		case 'Pedro':
		echo "oi " . $nome;
		default:
		echo "Desculpe, você nao esta inscrito" . $nome;
		break;
	}
	echo "<hr>";
	echo "<hr>";
// FOREACH
	echo "FOREACH <BR><BR>";

	$frutas = array('pera', 'uva', 'mamao');

	foreach ($frutas as $frutas) {
		echo "A fruta é: " . $frutas . "<br>";
	}
	
	echo "<hr>";
// desafio
	$i=1;
	// lembra que posso colocar um laço dentro do outro
	echo "faça um looping com o while que a cada interação some mais 1 ao valor de i e mostre na tela se o número é par ou ímpar <br>";
	while ($i <= 10) {
		if ($i % 2 == 0) {
			echo "o numero $i é par <br> ";
		}
		if ($i % 2 == 1) {
			echo "o numero $i é impar <br> ";
		}
		$i++;
	}
	echo "<hr>";
	echo "<hr>";
	?>
</body>
</html>
