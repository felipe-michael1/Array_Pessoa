<?php
// criado por Felipe Michael da Fonseca,
// Array que retorna todas as pessoas
//Criado em: 14/07/2024

 function array_pessoa () { 	
   	$array_pessoa = array(
	   array(
	      'idade' => '25',
	      'nome' => 'joão',
                       'cidade' => 'São Francisco',
	      'país' => 'Estados Unidos'
                    ),
	   array(
	     'idade' => '40',
	     'nome' => 'Mariazinha',
                      'cidade' => 'Nova York',
	     'país' => 'Estados Unidos'
                   )
               );
    
    	$resultado_final = json_encode($array_pessoa);
    	return $resultado_final;
 }

$retorna_array = array_pessoa();
var_dump($retorna_array);
?>
