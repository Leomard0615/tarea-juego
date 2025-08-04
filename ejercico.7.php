<?php

// 1. Función para validar la contraseña
function validar_contrasena($contrasena) {
    // Verificar si la longitud es mayor o igual a 8
    if (strlen($contrasena) < 8) {
        return false;
    }

    // Verificar si contiene al menos una mayúscula
    if (!preg_match('/[A-Z]/', $contrasena)) {
        return false;
    }

    // Verificar si contiene al menos un número
    if (!preg_match('/[0-9]/', $contrasena)) {
        return false;
    }

    // Si pasa todas las validaciones, la contraseña es válida
    return true;
}

// 2. Pruebas con diferentes contraseñas
$pass_correcta = "Contraseña123";
$pass_corta = "Corta1";
$pass_sin_mayus = "contraseña123";
$pass_sin_numero = "Contraseñanumeros";
$pass_incorrecta_multi = "pass";

echo "Prueba con '{$pass_correcta}': ";
echo validar_contrasena($pass_correcta) ? "Válida" : "Inválida";
echo "\n";

echo "Prueba con '{$pass_corta}': ";
echo validar_contrasena($pass_corta) ? "Válida" : "Inválida";
echo "\n";

echo "Prueba con '{$pass_sin_mayus}': ";
echo validar_contrasena($pass_sin_mayus) ? "Válida" : "Inválida";
echo "\n";

echo "Prueba con '{$pass_sin_numero}': ";
echo validar_contrasena($pass_sin_numero) ? "Válida" : "Inválida";
echo "\n";

echo "Prueba con '{$pass_incorrecta_multi}': ";
echo validar_contrasena($pass_incorrecta_multi) ? "Válida" : "Inválida";
echo "\n";

?>