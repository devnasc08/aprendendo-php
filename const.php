<?php 
// $valor = 10;
// echo $valor;
// echo "<br>";
// $valor = 1;
// echo $valor;


//constantes = POR CONVENÇÃO NOMES EM MAIÚSCULAS
// define ('NOME', 'Kauã');
// echo(NOME);
// // NOME = "Ronaldo";
// echo "<br>";
// const VALOR = 10;
// echo VALOR;



// cast - (ou type casting) é o processo de converter um valor de um tipo para outro de forma explícita 
// $valor = 10.5;
// var_dump($valor);
// echo "<br>";
// $inteiro = (int) $valor;
// var_dump($inteiro);
// echo"<br>";
// // =======================================================================================================
// $valor = 100;
// var_dump($valor);
// echo '<br>';
// $txt = (string) $valor;
// var_dump($txt);
// echo '<br>';

/*      REGRAS
 0, "", "0", null -> false
 Qualquer outro valor = true

*/


// ===============================================================================================================================


// ARRAY

// $nomes = ["ti101",true,100];
// echo '<pre>'
// print_r($nomes) //Mostra todas posições
// echo $nomes[0] = "ti98";
// echo "<br>";


//Array Associativo com chaves numéricas
// -> "aponta para" associar uma chave a um valor
// $nomes = [1=>"ti101",
//           2=>true,
//           3=>100
//     ];
// echo '<pre>';
// print_r ($nomes);
// echo'<pre>'

// ============================================================================================================================

// function olaMundo(){
//     echo "Olá Mundo";
// }

// olaMundo();

// function saudacao ($nome="Kauã"){
//     echo ("Olá ".$nome);
// }

// saudacao();


// function somar ($a,$b){
//     return $a+$b;
// }
// $resultado = somar(5,5);
// echo "Resultado da Soma: ".$resultado."<br>";

// function multi($multi1,$multi2){
//     return $multi1*$multi2;
// }
// $resultado1 = multi(5,5);
// echo "Resultado da Multiplicação: ".$resultado1."<br>";


// function sub($sub1,$sub2){
//     return $sub1-$sub2;
// }
// $resultado2 = sub(5,5);
// echo "Resulatado da Subtração: ".$resultado2."<br>";


// function div($div1,$div2){
//     return $div1%$div2;
// }
// $resultado3 = div(5,4);
// echo "Resultado da Divisão: ".$resultado3."<br>";

// ============================================================================================================================

// Calcular média

// function calcMedia($n1,$n2,$n3){
//     return($n1+$n2+$n3) / 3;
// }
// $resultado = calcMedia(5,5,5);
// echo "O resultado da Média é= ".$resultado."<br>";

// ============================================================================================================================

// Função para Converter para Maiúsculo

function maiusculo($txt){
    return strtoupper($txt);
}

echo maiusculo("Programando PHP")

?>