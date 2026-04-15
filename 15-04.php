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


// ===== Explode -> Transformar em Array ====

// $texto = "PHP,HTML,CSS";
// echo '<br>';
// $array = explode(",", $texto);
// echo '<br>';
// print_r($array);


/* $txtPhp = "O, PHP, (Hypertext, Preprocessor), é, uma, linguagem, de, programação,
  focada, no, desenvolvimento, web, back-end, ou, seja, ele, trabalha, na, parte, 
  do, servidor, processando, informações, antes, que, a, página, seja, enviada, para, 
  o, navegador, do, usuário";
  echo '<br>';
  $array = explode(",", $txtPhp);
  echo '<br>';
 print_r($array); */

// ==== implode() -> Juntar array com string

// $array = ["PHP", "HTML", "CSS"];
// echo implode("-", $array);


/*

// ======================= EX PRÁTICO ============================

$nome = "   kauã nascimento      ";

echo "Original :$nome <br>";

// ======================================

$nome = trim($nome);

echo "Sem espaço $nome <br>";

//===========================================

$nome = ucwords($nome);

echo "formatado: $nome <br>";

// ========================================

echo "Total de letras: " . strlen($nome);  

*/

/*
Erros PHP exibidos
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 */
 

$resultado = "";


if(isset($_POST["enviar"])){
    
    $frase = $_POST("frase");
    
    $espaco = trim($frase);
    
    $caracteres = strlen($frase);
    
    $upperCase = strtoupper($frase);
    
    $lowercase = strtolower($frase);
    
    $formatado = ucwords($frase);
    
    $resultado = "
    Frase sem espaço: $espaco <br>
    Quantidade de caracteres: $caracteres <br>
    Frase Maiúscula: $upperCase <br>
    Frase Minúsucla: $lowercase <br>
    Formatado: $formatado <br>";
    
    
}


?>

<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Strings PHP</title>
</head>
 
<body>
    <h2>Trabalhando com Strings</h2>
    <form method="post">
        Digite uma frase: <br><br>
        <input type="text" name="frase" size="40" required>
        <br><br>
        <button type="submit" name="enviar">Processar</button>
    </form>
    <br>
    <div>
        <?php echo $resultado; ?>
    </div>
</body>
 
</html>
 