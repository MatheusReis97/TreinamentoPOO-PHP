<?php

//Uma classe é um modelo para criar objetos. Ele define conjunto de propriedades(atributos) e métodos(funções) que os objetos criados a partir da classe terão
class Lata {

    // Atributos são variaveis que pertecem a uma classe. Eles represetam as propriedades ou caracteristicas dos objetos.
    // public = Acessível de qualquer lugar
    public string $marca;
    public int $volume;
    // private = Acessível apenas dentro da classe onde foi definida.
    // protected = Acessível dentro da classe e em subclasses.
    private string $formula;

    //Métodos, represetam os comportamentos ou ações que os objetos podem realizar.
    // Neste caso é o metodo de construtor.
    public function __construct( string $marca, int $volume, string $formula)
    {
    
    // Iniciamos os atributos de classe com os valores passados como parâmetros.
    // o 1 $marca vem com atributo criado da class , ele está recebendo(=) a $marca que foi passado como parametro no construtor. 
        $this->$marca = $marca;
        $this->$volume = $volume;
        $this->$formula = $formula;

    }

}



$latinhadeMonter = new Lata('Monster', 473, 'lorem impunm não sei como é' );
$latinhadeMonter->volume = 500;


$latadeNelson = new Lata(marca: "Nestle", volume: 700,formula: 'caro para caramba');


var_dump($latinhadeMonter);
var_dump($latadeNelson);
 
//  $num1 = isset($_GET["num1"])? $_GET["num1"]: "0";
//  $num2 = isset($_GET["num2"])? $_GET["num2"]: "1";
//  $incre = isset($_GET["incre"])? $_GET["incre"]: "1";


// /* if($num1 < $num2){
// while ($num1<=$num2){
//     echo  "$num1 <br>";
//     $num1 += $incre;
// }
// } else if ($num1 > $num2){

//     while ($num1>=$num2){
//         echo  "$num1 <br>";
//         $num1 -= $incre;}
    
//     }; */

//     echo "<br>  do while abaixo <br><br>" ;

//     if($num1 < $num2){
//         do{
//             echo  "$num1 <br>";
//             $num1 += $incre;
//         }while ($num1<=$num2);
//         } else if ($num1 > $num2){
        
//            do{
//                 echo  "$num1 <br>";
//                 $num1 -= $incre;
//             } while ($num1>=$num2);
            
//             };
        
  
?>
  