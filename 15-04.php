<?php 

// TRABALHANDO COM DATAS NO PHP

// DATAS
// echo date("d/m/y");

// $date = date("d/m/y");
// echo '<br>';
// echo "Data de hoje = ".$date;

/*

código  |     significado        |exemplo
--------|------------------------|-----------
d       |       dia              |  15
m       |       mes              |  04
Y       |       ano(4 digitos)   |  2026
H       |       Horas (24h)      |  15
i       |       minutos          |  30
s       |       segundos         |   45

*/

// date_default_timezone_set("America/Sao_Paulo");  //Fuso horário
// echo date("d/m/y :H:i:s");

// Forma moderna de trabalhar com data

//$data = new DateTime(); // new = Criando a instancia da classe

/*
data - é um objeto (criado com new DateTime();)
(->) acessa algo dentro de objeto
format() é um método da classe DateTime
 */ 

// echo ("data atual = ".$data);
//  echo $data->format("d/m/y");

// $data1 = new DateTime("2026-04-01");

// $data2 = new DateTime("2026-04-15");

// $diferenca = $data1->diff($data2);

// echo $diferenca->days."dias";
 
// $dataNascimento = new DateTime("2008-11-19");
// $hoje = new DateTime();
// $idade = $hoje->diff($dataNascimento);
// echo " Idade: " . $idade->y . "anos";



// ================================= STRINGS ==========================================
 
// TRABALHANDO COM STRINGS
/*
$nome = "kaua nascimento santos";
echo strlen($nome); //Quantidade de caracteres
echo '<br>';
echo strtoupper($nome); // MAIÚSCULAS | UPPERCASE
echo '<br>';
echo strtolower($nome); // MINÚSCULAS | lowercase
echo '<br>';
echo ucfirst($nome); // Primeira letra Maiúsculas | PascalCase
echo '<br>';
echo ucwords($nome); // Todas primeiras letras das palavras em maiúsculas | 
echo '<br>';
echo trim($nome); //Remove todos os espaços em branco
echo '<br>';
echo strpos("Programando com PHP", "PHP");  // Procurar texto
*/


$texto = "PHP,HTML,CSS";
echo '<br>';
$array = explode (",",$texto);
echo '<br>';
print_r($array);




?>