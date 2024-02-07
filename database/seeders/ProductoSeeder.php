<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto = new Producto();
        $producto->id = 1;
        $producto->nombre = "Camiseta Running";
        $producto->descripcion = "Cómoda y transpirable, esta camiseta será tu aliada perfecta para salir a correr. Disponible hasta la 5XL ¡El básico que toda runner necesita!";
        $producto->foto = "foto1.avif";
        $producto->precio = 6;
        $producto->save();

        $producto = new Producto();
        $producto->id = 2;
        $producto->nombre = "Camiseta Fitness";
        $producto->descripcion = "Gracias a su corte y al material con el que está confeccionada, esta camiseta resulta muy cómoda, por lo que podrás llevarla todos los días y a todas partes.";
        $producto->foto = "foto2.avif";
        $producto->precio = 12;
        $producto->save();

        $producto = new Producto();
        $producto->id = 3;
        $producto->nombre = "Mallas Leggings";
        $producto->descripcion = "Unos leggings con talle alto, el tipo de tejido evita la transparencia incluso estirado. Tiene un bolsillo lateral para guardar las llaves y el móvil.";
        $producto->foto = "foto3.avif";
        $producto->precio = 15;
        $producto->save();

        $producto = new Producto();
        $producto->id = 4;
        $producto->nombre = "Mallas de Yoga";
        $producto->descripcion = "¿Buscas una segunda piel para practicar tus asanas más exigentes? Gracias a su tecnología sin costuras y su tejido transpirable te sentirás súper cómoda y podrás centrarte en el aquí y el ahora.";
        $producto->foto = "foto4.avif";
        $producto->precio = 10;
        $producto->save();

        $producto = new Producto();
        $producto->id = 5;
        $producto->nombre = "Zapatillas Running";
        $producto->descripcion = "Esta zapatilla de running ligera y con amortiguación para hombre para que salgas a correr hasta 10 km a la semana. Son perfectas para iniciarse en el running.";
        $producto->foto = "foto5.avif";
        $producto->precio = 20;
        $producto->save();

        $producto = new Producto();
        $producto->id = 6;
        $producto->nombre = "Zapatillas de Montaña";
        $producto->descripcion = "Su suela Omnigrip te proporcionará un agarre óptimo en tus rutas. Además, el refuerzo de la puntera te protegerá en los terrenos pedregosos.";
        $producto->foto = "foto6.avif";
        $producto->precio = 25;
        $producto->save();

        $producto = new Producto();
        $producto->id = 7;
        $producto->nombre = "Bandana de Deporte";
        $producto->descripcion = "Esta bandana de deporte Artengo está hecha de un material agradable al tacto, siendo su principal función la absorción del sudor. Te evitará tener gotas de agua en los ojos durante el juego.";
        $producto->foto = "foto7.avif";
        $producto->precio = 8;
        $producto->save();

        $producto = new Producto();
        $producto->id = 8;
        $producto->nombre = "Abrigo de Montaña";
        $producto->descripcion = "Cuenta con capucha, mangas y bajo ajustables para limitar la entrada de nieve. Además, tiene dos bolsillos con forro polar para las manos y otro en el pecho, todos con cremallera.";
        $producto->foto = "foto8.avif";
        $producto->precio = 44;
        $producto->save();

        $producto = new Producto();
        $producto->id = 9;
        $producto->nombre = "Gafas de Sol";
        $producto->descripcion = "Nuestros ingenieros ópticos han desarrollado estas gafas de sol para el senderismo. Ideales para el uso regular en montaña gracias a la ligereza y a la sujeción.";
        $producto->foto = "foto9.avif";
        $producto->precio = 14;
        $producto->save();
    }
}
