<?php

// 1. Array de candidatos con votos iniciales en 0
$votos = [
    'Candidato A' => 0,
    'Candidato B' => 0,
    'Candidato C' => 0
];

// 2. Función para emitir un voto a un candidato
function emitir_voto(&$votos, $candidato) {
    if (array_key_exists($candidato, $votos)) {
        $votos[$candidato]++;
    }
}

// 3. Simular 10 votos aleatorios
echo "Simulando votación...\n";
$candidatos = array_keys($votos); // Obtiene los nombres de los candidatos en un array indexado
$num_candidatos = count($candidatos);

for ($i = 0; $i < 10; $i++) {
    // Escoge un candidato aleatorio
    $indice_aleatorio = rand(0, $num_candidatos - 1);
    $candidato_aleatorio = $candidatos[$indice_aleatorio];

    // Emite el voto
    emitir_voto($votos, $candidato_aleatorio);
}

// 4. Imprimir los resultados finales
echo "\n--- Resultados de la votación ---\n";
foreach ($votos as $candidato => $conteo) {
    echo "{$candidato}: {$conteo} votos\n";
}

?>