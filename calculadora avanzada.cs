using System;

class CalculadoraBasica
{
    static void Main(string[] args)
    {
        Console.WriteLine("Calculadora Básica en C#");
        Console.WriteLine("------------------------");

        // Declaración de variables
        double num1, num2;
        string operacion;

        // Solicitar el primer número
        Console.Write("Ingresa el primer número: ");
        num1 = Convert.ToDouble(Console.ReadLine());

        // Solicitar el segundo número
        Console.Write("Ingresa el segundo número: ");
        num2 = Convert.ToDouble(Console.ReadLine());

        // Solicitar la operación
        Console.Write("Ingresa la operación (+, -, *, /): ");
        operacion = Console.ReadLine();

        // Realizar la operación y mostrar el resultado
        switch (operacion)
        {
            case "+":
                Console.WriteLine("Resultado: " + (num1 + num2));
                break;
            case "-":
                Console.WriteLine("Resultado: " + (num1 - num2));
                break;
            case "*":
                Console.WriteLine("Resultado: " + (num1 * num2));
                break;
            case "/":
                // Manejar la división por cero
                if (num2 != 0)
                {
                    Console.WriteLine("Resultado: " + (num1 / num2));
                }
                else
                {
                    Console.WriteLine("Error: No se puede dividir por cero.");
                }
                break;
            default:
                Console.WriteLine("Operación no válida.");
                break;
        }

        Console.ReadKey(); // Esperar a que el usuario presione una tecla para cerrar la consola
    }
}