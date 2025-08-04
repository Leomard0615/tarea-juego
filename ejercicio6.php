<?php

$tareas = [
    [
        'tarea' => 'Comprar leche',
        'completada' => false,
        'prioridad' => 'alta'
    ],
    [
        'tarea' => 'Pagar la factura del teléfono',
        'completada' => false,
        'prioridad' => 'alta'
    ],
    [
        'tarea' => 'Llamar al doctor',
        'completada' => true,
        'prioridad' => 'media'
    ],
    [
        'tarea' => 'Hacer ejercicio',
        'completada' => false,
        'prioridad' => 'baja'
    ]
];

echo "Todas las tareas:\n";
foreach ($tareas as $tarea) {
    echo "-" . $tarea['tarea'] . " (Prioridad: " . $tarea['prioridad'] . ")\n";
}

$tareas[3]['completada'] = true;

echo "\n--- Tareas pendientes ---\n";
foreach ($tareas as $tarea) {
    if ($tarea['completada'] === false) {
        echo "-" . $tarea['tarea'] . " (Prioridad: " . $tarea['prioridad'] . ")\n";
    }
}

?>