<?php

// 1. Crear el array de estudiantes
$estudiantes = [
    [
        'nombre' => 'Ana López',
        'notas' => [
            'Matemáticas' => 95,
            'Historia' => 88,
            'Ciencias' => 92
        ]
    ],
    [
        'nombre' => 'Luis García',
        'notas' => [
            'Matemáticas' => 85,
            'Historia' => 90,
            'Ciencias' => 78
        ]
    ],
    [
        'nombre' => 'Sofía Pérez',
        'notas' => [
            'Matemáticas' => 98,
            'Historia' => 95,
            'Ciencias' => 99
        ]
    ]
];

// 2. Usar bucles anidados para imprimir los datos
echo "Notas de los estudiantes\n";

foreach ($estudiantes as $estudiante) {
    echo "\nEstudiante: " . $estudiante['nombre'] . "\n";
    
    // Bucle anidado para las notas
    foreach ($estudiante['notas'] as $materia => $calificacion) {
        echo $materia . ": " . $calificacion . "\n";
    }
}

?>