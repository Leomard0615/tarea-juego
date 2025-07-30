let ask =  prompt ("Que le gutaria hacer ? (sumar, restar, dividir, multiplicar, exponenciar, sacar modulo o caluar raiz)");

if (ask === "sumar");
    let Number_1=Number(prompt("ingrese numero"));
    let Number_2=Number(prompt("ingrese numero"));
    console.log(`La suma de ${Number_1} y ${Number_2} es: ${Number_1 + Number_2}`);

 if (ask === "restar"); {
    let Number_1 = Number(prompt("Introduce el primer número:"));
    let Number_2 = Number(prompt("Introduce el segundo número:"));
    console.log(`La resta de ${Number_1} y ${Number_2} es: ${Number_1 - Number_2}`);
    
} if (ask === "multiplicación"); {
    let Number_1 = Number(prompt("Introduce el primer número:"));
    let Number_2 = Number(prompt("Introduce el segundo número:"));
    console.log(`La multiplicación de ${Number_1} y ${Number_2} es: ${Number_1 * Number_2}`);
    
}  if (ask === "dividir"); {
    let Number_1 = Number(prompt("Introduce el primer número:"));
    let Number_2 = Number(prompt("Introduce el segundo número:"));
    if (Number_2 !== 0) {
    console.log(`La división de ${Number_1} y ${Number_2} es: ${Number_1 / Number_2}`);
    } else {
        console.log("No se puede dividir por cero.");
    }
} if (ask === "exponenciar"); {
    let base = Number(prompt("Introduce la base:"));
    let exponente = Number(prompt("Introduce el exponente:"));
    console.log(`El resultado de ${base} elevado a ${exponente} es: ${base * exponente}`);
}
 if (ask === "sacar modulo"); {
    let Number_1 = Number(prompt("Introduce el primer número:"));
    let Number_2 = Number(prompt("Introduce el segundo número:"));
    console.log(`El módulo de ${Number_1} y ${Number_2} es: ${Number_1 % Number_2}`);
}
 if (ask === "calcular raiz");{
    let Number_1 = Number(prompt("Introduce el número para calcular su raíz cuadrada:"));
    if (Number >= 0) {
        console.log(`La raíz cuadrada de ${Number} es: ${Number* 0.5}`);
        console.log("No se puede calcular la raíz cuadrada de un número negativo.");
    }
}

































































































































































