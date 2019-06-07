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
            'last_name' => 'Martinez Carrillo',
            'birthdate' => date("Y-m-d"),
            'email' => 'famarcar@saber.uis.edu.co',
            'password' => Hash::make('clave'),
            'role' => '0',
            'biography' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        Usr::create([
            'first_name' => 'Lola Xiomara',
            'last_name' => 'Bautista Rozo',
            'birthdate' => date("Y-m-d"),
            'email' => 'lxbautis@uis.edu.co',
            'password' => Hash::make('clave'),
            'role' => '0',
            'biography' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        Usr::create([
            'first_name' => 'Santiago',
            'last_name' => 'Gomez Hernández',
            'birthdate' => date("Y-m-d"),
            'email' => 'santiago@gomez.com',
            'password' => Hash::make('clave'),
            'role' => '0',
            'biography' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like',
        ]);
        Usr::create([
            'first_name' => 'Juan Sebastian',
            'last_name' => 'Marcon Caballero',
            'birthdate' => date("Y-m-d"),
            'email' => 'juan@marcon.com',
            'password' => Hash::make('clave'),
            'role' => '0',
            'biography' => 'Ornare magna sagittis netus pellentesque molestie gravida vivamus, diam nibh in natoque etiam mus nam eleifend, torquent et rutrum aptent laoreet justo. Lobortis condimentum cum pharetra iaculis nisl torquent vel integer sem, pellentesque ultrices urna orci nec donec cursus varius. Libero molestie dictumst litora auctor cum praesent facilisi ligula enim, arcu tristique ultrices quisque montes porttitor aliquam lobortis mus vehicula, vivamus gravida parturient leo quam neque viverra duis.',
        ]);
        Usr::create([
            'first_name' => 'Brayan Camilo',
            'last_name' => 'Valenzuela Rincón',
            'birthdate' => "1997-09-10",
            'email' => 'b.rayancamilo97@hotmail.com',
            'password' => Hash::make('clave'),
            'role' => '0',
            'biography' => 'Colombian, born in the city of bucaramanga. Main hoobies are: programming, artificial intelligence, basketball, travel and cycling. At the moment I am systems engineering student in the UIS (Universidad industrial de Santander).',
        ]);
        Usr::create([
            'first_name' => 'Camilo Andrés',
            'last_name' => 'Lozano Carvajal',
            'birthdate' => "1991-12-15",
            'email' => 'camilo@lozano.com',
            'password' => Hash::make('clave'),
            'role' => '0',
            'biography' => "Currently I'm a undergraduate of system and informatic engineer, I'm an enthusiast about technology and science, nowadays I'm working on classification of several kinds of wear on worn surface at metal plates.",
        ]);
        Usr::create([
            'first_name' => 'Alejandra',
            'last_name' => 'Moreno Tarazona',
            'birthdate' => "1997-10-27",
            'email' => 'alejandramoreno.97@hotmail.com',
            'password' => Hash::make('clave'),
            'role' => '1',
            'biography' => "Alejandra Moreno is currently an undergraduate candidate in Systems Engineering at the Universidad Industrial de Santander (Colombia). She's assosiated at Biomedical Imaging, Vision and Learning Laboratory group (BIVL2ab). Her research interest has been focused mainly on the classification of heart motion in MRI. ",
        ]);
        Usr::create([
            'first_name' => 'Miguel Alberto',
            'last_name' => 'Plazas Wadynski',
            'birthdate' => "1991-02-20",
            'email' => 'miguel.plazas@saber.uis.edu.co',
            'password' => Hash::make('clave'),
            'role' => '2',
            'biography' => "Miguel Plazas is currently a candidate for Master in Systems Engineering and Informatics at Universidad Industrial de Santander. Very passionate about technology",
        ]);
        Usr::create([
            'first_name' => 'Luis Carlos',
            'last_name' => 'Guayacán Chaparro',
            'birthdate' => "1992-02-08",
            'email' => 'luis.guayacan@saber.uis.edu.co',
            'password' => Hash::make('clave'),
            'role' => '2',
            'biography' => "Electronic Engineer from Universidad Industrial de Santander - UIS and active member of the research group of the 'Bioengineering, Vision and Learning Lab' (BivL2ab). His areas of work include computer vision, machine learning, video analysis, bioengineering (with particular experience with Parkinson's disease), among others. He is currently continuing his formation as a researcher with a master's degree in applied mathematics.",
        ]);
        Usr::create([
            'first_name' => 'Franklin Samuel',
            'last_name' => 'Sierra Jerez',
            'birthdate' => "1995-07-14",
            'email' => 'franklinsierrajer@gmail.com',
            'password' => Hash::make('clave'),
            'role' => '2',
            'biography' => "My name is Franklin Samuel Sierra Jerez. I'm 23 years old. I was born in Bogotá but I have live in Bucaramanga since 2011. I study systems engineer at Universidad Industrial de Santander. I love machine learning, artificial intelligence and to learn every single day.",
        ]);
        Usr::create([
            'first_name' => 'Oscar Mauricio',
            'last_name' => 'Mendoza Casas',
            'birthdate' => "1998-02-21",
            'email' => 'oscameca.1998@gmail.com',
            'password' => Hash::make('clave'),
            'role' => '2',
            'biography' => "Systems engineering student at Universidad Industrial de Santander, from Bucaramanga, Colombia. Passionate about science, tecnology, nature, animals and traveling, currently working on action recognition.",
        ]);
        Usr::create([
            'first_name' => 'John Edinson',
            'last_name' => 'Archila Valderrama',
            'birthdate' => "1989-12-07",
            'email' => 'john.archila.valderrama@gmail.com',
            'password' => Hash::make('clave'),
            'role' => '2',
            'biography' => "I like to investigate in areas such as education, renewable energies and computer vision. I am a PhD student at Biomedical Imaging, Vision and Learning Laboratory (BivL²ab).",
        ]);
        Usr::create([
            'first_name' => 'Juan Andrés',
            'last_name' => 'Olmos Rojas',
            'birthdate' => "1999-03-06",
            'email' => 'juandolmos63@gmail.com',
            'password' => Hash::make('clave'),
            'role' => '2',
            'biography' => "Currently i'm studying mathematics in Universidad Industrial de Santander UIS, im working on my pregraduate thesis and basically its about explain how calculate means of tensors to recognize actions.",
        ]);
        Usr::create([
            'first_name' => 'Juan Felipe',
            'last_name' => 'Chacón Lopez',
            'birthdate' => "1996-05-07",
            'email' => 'juanfe0705@gmail.com',
            'password' => Hash::make('clave'),
            'role' => '2',
            'biography' => "I'm a Systems Engineering student at Universidad Industrial de Santander. Currently I'm working with BivL²ab collecting Sign Language data in video format.",
        ]);
        Usr::create([
            'first_name' => 'Isail',
            'last_name' => 'Salazar Acosta',
            'birthdate' => "1995-04-08",
            'email' => 'isail.salazar@saber.uis.edu.co',
            'password' => Hash::make('clave'),
            'role' => '2',
            'biography' => "Isail Salazar is currently a candidate for master in systems engineering and informatics at Universidad Industrial de Santander (Colombia), where he's associated at the Biomedical Imaging, Vision and Learning Laboratory (BIVL2ab) and Motion Analysis and Computer Vision (MACV) collective. He received his BS in electronic engineering in 2017. His research work has been focused mainly in image segmentation, RGB-D image processing, eye movement analysis and motion magnification.",
        ]);
        Usr::create([
            'first_name' => 'Yessica Carolina',
            'last_name' => 'Castrillon Gamboa',
            'birthdate' => "1997-08-08",
            'email' => 'yessica.castrillon08@gmail.com',
            'password' => Hash::make('clave'),
            'role' => '2',
            'biography' => "Yessica is currently a undergraduate degree in Mathematics at Universidad Industrial de Santander (Colombia), where she's associated at Biomedical Imaging, Vision and Learning Laboratory (BIVL2ab). Her research interests are topological data analysis and computer vision.",
        ]);
        
    }
}
