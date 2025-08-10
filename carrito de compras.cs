

using System;
using System.Collections.Generic;


public class Producto
{
    public string Nombre { get; set; }
    public decimal Precio { get; set; }
}

class CarritoDeCompras
{
    static void Main(string[] args)
    {
        List<Producto> carrito = new List<Producto>();

        Console.WriteLine("Bienvenido al Carrito de Compras");
        Console.WriteLine("----------------------------------");

        
        while (true)
        {
            Console.WriteLine("\nMenú:");
            Console.WriteLine("1. Agregar producto");
            Console.WriteLine("2. Ver carrito y total");
            Console.WriteLine("3. Salir");
            Console.Write("Selecciona una opción: ");
            string opcion = Console.ReadLine();

            if (opcion == "1")
            {
                Console.Write("Ingresa el nombre del producto: ");
                string nombreProducto = Console.ReadLine();

                Console.Write("Ingresa el precio del producto: ");
                
                decimal precioProducto = Convert.ToDecimal(Console.ReadLine());

                Producto nuevoProducto = new Producto { Nombre = nombreProducto, Precio = precioProducto };
                carrito.Add(nuevoProducto);

                Console.WriteLine($"'{nombreProducto}' ha sido agregado al carrito.");
            }
            else if (opcion == "2")
            {
                Console.WriteLine("\n--- Contenido del Carrito ---");
                decimal total = 0;

                if (carrito.Count == 0)
                {
                    Console.WriteLine("El carrito está vacío.");
                }
                else
                {
                    foreach (var producto in carrito)
                    {
                        Console.WriteLine($"- {producto.Nombre}: ${producto.Precio:F2}");
                        total += producto.Precio;
                    }
                }
                Console.WriteLine("-----------------------------");
                Console.WriteLine($"Total a pagar: ${total:F2}");
            }
            else if (opcion == "3")
            {
                Console.WriteLine("Gracias por tu compra. ¡Hasta luego vuelva pronto!");
                break;
            }
            else
            {
                Console.WriteLine("Opción no válida vuelva a intentar. Por favor, selecciona 1, 2 o 3.");
            }
        }
    }
}