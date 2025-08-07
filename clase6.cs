using System;

public class Sumador
{
    public static void Main(string[] args)
    {
        CalcularYMostrarSuma();
    }

    public static void CalcularYMostrarSuma()
    {
        int suma = 0;

        for (int i = 1; i <= 100; i++)
        {
            
            suma += i; 
        }

        Console.WriteLine("La suma de todos los números enteros del 1 al 100 es: " + suma);
    }
}