
<!-- 08/04/26 - Quarta -->
<!--    IF, ELSE / ARRAY -->
<!--    IF, ELSE / ARRAY -->
<!--    IF, ELSE / ARRAY -->
<?php
// echo "Programando PHP - 08/04/2026 <br>";
// echo "A minha turma é TI101".'<br>';
// echo nl2br("Teste \n");

// // \n - só funciona no console
// echo nl2br("Aqui quebra a linha no \n HTML"); 
// // nl2br permite que quebre a linha no html


// $valor; //Declaração
// $valor = 10; 

// $n1 = "1";
// $n2 = ;

//================================================ IF ELSE ================================================

//$resultado = ($n1+$n2);

// ===  Valor igual e mesmo tipo
// ==   Valor igual

// if($resultado == 2){
//     // Se a comparação for verdadeira
//     echo ("O valor é = ".$resultado);
// }

// else{
//  echo ("O valor é falso");
// }



// $n1 = 1;
// $n2 = 1;

// if($n1 == $n2){
//     // Se a comparação for verdadeira
//     echo ("O valor é igual");
// }

// else{
//  echo ("Diferente");
// }

/*
is_int()
is_float()
is_string()
is_boolean()
is_array()
is_null()
*/



// $n1 = 1;

// if(is_int($n1)){
//     // Se a comparação for verdadeira
//     echo ("O valor é int");
// }

// else{
//  echo ("O valor NÃO é inteiro");
// }

// $n1 = 10;
// $n2 = "10";

// echo ($n1==$n2);

// ================================================ ARRAY ================================================

// // $nomes = ["João", "Maria", "Pedro", "Kauã"];
// // $recebe = $nomes[4];
// // echo $recebe;

//     //Outra maneira 
// $frutas = array ("Maçã", "Laranja", "Banana");
//     // Formas de impressão
// // echo ($frutas[1]."<br>");
// // print_r ($frutas);
// // var_dump($frutas);

// $cestaFrutas = $frutas;
// print_r($cestaFrutas);

//================================================

/*
$colegas = array ("Diogo","Vinicius Martinez","Julia","Nicolas","Guilherme França","Guilherme Souza","Gabriel","Leonardo","Vinicius Siqueira","Ryan","Guilherme Silva");
// Adcionando ao Início
  array_unshift($colegas, "Kauã");
// Adicionando no Final
array_push($colegas, "Wilton");
  $colegas[] = "Well";

echo "<pre>";      //Formatação de Exibição
print_r($colegas);
echo "</pre>";
*/

// ================================================ Estrutura de Repetição ================================================
for ($i=1;$i<5;$i++){
    echo("TI101 <br>");
}

?>