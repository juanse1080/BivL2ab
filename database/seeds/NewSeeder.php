<?php

use Illuminate\Database\Seeder;
use App\News;

class NewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            'title' => "Eye Movements Magnification for Parkinsonian Patterns Recognition",
            'description' => "This Friday we return again! The seminary begins with our magister student Isail Salazar with his thesis work “Eye Movements Magnification for Parkinsonian Patterns Recognition” directed by prof. Fabio Martínez, Ph.D. You're all cordially invited to our seminary at 4PM in the classroom LP 104.",
            'photo' => 'https://i.ibb.co/dm11M27/Logo3.png'
        ]);
        News::create([
            'title' => "Biomedical imaging, vision and learning lab",
            'description' => "BivLab is mainly dedicated to solve problems related with visual information, covering from the acquisition and analysis of medical images to the understanding of complex spatio-temporal patterns in the general context of computer vision. Such problems are tipically highly variant and challenging, being hence, the proposal of learning strategies fundamental to stand out significant behaviors from observed data, and to model prior expert knowledge in robust representations.",
            'photo' => 'https://i.ibb.co/dm11M27/Logo3.png'
        ]);
        News::create([
            'title' => "Spatio-temporal pattern representation for action recognition",
            'description' => "This week our magister student Gustavo Garzón with his thesis work “Spatio-temporal pattern representation for action recognition” directed by Prof. Fabio Martínez, Ph.D. This week's session will take place in the morning due to schedule limitations. See you at 7:00 AM in the classroom LP 104. You're all cordially invited!",
            'photo' => 'https://i.ibb.co/dm11M27/Logo3.png'
        ]);
        News::create([
            'title' => "Deep learning based model for self semi-supervised labeling of satellite images",
            'description' => "This week we have something new! Our magister student Miguel Plazas is going to present this Friday with his thesis work “Deep learning based model for self semi-supervised labeling of satellite images” directed by Prof. Raúl Ramos (UDEA) and the Prof. Fabio Martínez (UIS), Ph.D. See you at 4:00 PM in the classroom LP 104. You're all cordially invited! We hope you all have a good day!",
            'photo' => 'https://i.ibb.co/dm11M27/Logo3.png'
        ]);
        News::create([
            'title' => "Spatio-temporal patterns magnification for the characterization of movements associated with Parkinson's Disease",
            'description' => "This week our undergraduate student Sergio Contreras is going to present us the defense of his research work in our seminary called “Spatio-temporal patterns magnification for the characterization of movements associated with Parkinson's Disease” directed by the Prof. Fabio Martínez, Ph.D. Being this the first degree product in our strong line of Motion Magnification. See you like always on Friday at 4:00 PM sin the classroom LP 104. Don't lose it! You are all cordially invited!",
            'photo' => 'https://i.ibb.co/dm11M27/Logo3.png'
        ]);
        News::create([
            'title' => "Lagrangian center of mass (CoMt) magnification",
            'description' => "Lagrangian center of mass (CoMt) magnification to stand out main parkinsonian gait events - Brayan Valenzuela, Isail Salazar and PhD Fabio Martínez. ",
            'photo' => 'https://i.ibb.co/dm11M27/Logo3.png'
        ]);
        News::create([
            'title' => "Glaucoma detection using fundus images of the eye",
            'description' => "This week on our seminary, one student is going to present the work “Glaucoma detection using fundus images of the eye” directed by Juan Sebastián Carrillo Rodríguez, PhD Lola Xiomara Bautista Rozo, Dr Juan Carlos Rueda Galvis and Dr Mary Sanchez.",
            'photo' => 'https://i.ibb.co/dm11M27/Logo3.png'
        ]);
    }
}
