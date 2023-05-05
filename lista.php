<?php

// Essa lista qunado é criada é númerada automáticamente. 
$lista = array('Leonardo', 'Michelangelo', 'Donatelo' , 'Zafael');
$lista[] = 'Mano doido';
unset($lista[0]);
echo "vetor lista:";
var_dump($lista);


//Este outro tipo de lista é um pouco mais complicado de se fazer, mas é ótimo para entender o processo de como funciona

$alunos ['aluno1'] = array('nome'=> 'Leonardo', 'telefone'=> '4002-8922');

// Neste exemplo acima a seta mostra o "valor" pedido

echo "vetor lista:";
var_dump($alunos);


?>
