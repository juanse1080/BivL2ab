<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Usr;

class UsrSeeder extends Seeder
{
    public function run()
    {
        Usr::create([
            'first_name' => 'Fabio',
            'last_name' => 'Martinez',
            'birthdate' => date("Y-m-d"),
            'email' => 'famarcar@gmail.com',
            'password' => Hash::make('clave'),
            'role' => '0',
            'biography' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        Usr::create([
            'first_name' => 'Santiago',
            'last_name' => 'Gomez',
            'birthdate' => date("Y-m-d"),
            'email' => 'santiago@gomez.com',
            'password' => Hash::make('clave'),
            'role' => '1',
            'biography' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like',
        ]);
        Usr::create([
            'first_name' => 'Juan',
            'last_name' => 'Marcon',
            'birthdate' => date("Y-m-d"),
            'email' => 'juan@marcon.com',
            'password' => Hash::make('clave'),
            'role' => '2',
            'biography' => 'Ornare magna sagittis netus pellentesque molestie gravida vivamus, diam nibh in natoque etiam mus nam eleifend, torquent et rutrum aptent laoreet justo. Lobortis condimentum cum pharetra iaculis nisl torquent vel integer sem, pellentesque ultrices urna orci nec donec cursus varius. Libero molestie dictumst litora auctor cum praesent facilisi ligula enim, arcu tristique ultrices quisque montes porttitor aliquam lobortis mus vehicula, vivamus gravida parturient leo quam neque viverra duis.',
        ]);
        Usr::create([
            'first_name' => 'Camilo',
            'last_name' => 'Lozano',
            'birthdate' => date("Y-m-d"),
            'email' => 'camilo@lozano.com',
            'password' => Hash::make('clave'),
            'role' => '2',
            'biography' => 'El Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal. El uso de Lorem Ipsum permite a los diseñadores reunir los diseños y la forma del contenido antes de que el contenido se haya creado, dando al diseño y al proceso de producción más libertad.',
        ]);
    }
}
