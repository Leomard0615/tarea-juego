using System;

public class AdivinaLaContrasena
{
    public static void Main(string[] args)
    {
        
        JugarAdivinarContrasena();
    }

    /// <summary>
    /// Define una contraseña y pide al usuario que la ingrese correctamente
    /// hasta que coincida.
    /// </summary>
    public static void JugarAdivinarContrasena()
    {
        
        string contrasenaCorrecta = "secreta128"; 
        
        
        string contrasenaIngresada = ""; 

        Console.WriteLine("¡Bienvenido! Por favor, ingresa la contraseña para acceder.");

        
        while (contrasenaIngresada != contrasenaCorrecta)
        {
            Console.Write("Ingresa la contraseña: ");
           
            contrasenaIngresada = Console.ReadLine(); 

           
            if (contrasenaIngresada != contrasenaCorrecta)
            {
                Console.WriteLine("Contraseña incorrecta. Intenta de nuevo.");
            }
        }

        
        Console.WriteLine("¡Acceso concedido! 🎉"); 
    }
}