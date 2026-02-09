<?php

// $curso = ['php', 'python', 1, 1.56];
// var_dump($curso);
// echo '<br>';
$cursos = [
    0 =>[
    'aluno'=> 'asp',
    'curso2'=> 'JS'
    ],
    1 => [
    'aluno'=> 'Marcos',
    'idade'=> '45'
    ]
];
// var_dump($cursos);
// echo '<br>';

// var_dump($cursos[1]['idade']);
for($i=0; $i < count($cursos); $i++){
    echo $cursos[$i]['aluno'] . '<br>';
}

echo 'eu sou foreach' .'<br>';
foreach ($cursos as $xcursos){
    echo $xcursos['aluno']. '<br>';
}