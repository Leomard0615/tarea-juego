using System;

public class TablaDeMultiplicar
{
    public static void Main(string[] args)
    {
        ImprimirTablaDelSiete();
    }

    public static void ImprimirTablaDelSiete()
    {
        Console.WriteLine("Tabla de multiplicar del 7:");
        for (int i = 1; i <= 10; i++)
        {
            Console.WriteLine($"7 x {i} = {7 * i}");
        }
    }
}