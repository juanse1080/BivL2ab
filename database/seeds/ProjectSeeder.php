<?php

use Illuminate\Database\Seeder;

use App\Project;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Project::create([ /* undergraduate, doctoral, postdotoral */
            'type'  =>  'master',
            'title'  =>  'Identifying Twits on Twitter (Beginner)',
            'photo'  =>  'https://res.cloudinary.com/springboard-images/image/upload/q_auto,f_auto,fl_lossy/wordpress/2019/02/image5-1.png',
            'summary'  =>  'Social media hate speech and fake news have become worldwide phenomena in the digital age. While offensive posts are a problem, it’s even worse when they are inaccurate or wrongly attributed to people through false profiles.',
        ]);

        Project::create([
            'type'  =>  'undergraduate',
            'title'  =>  'Finding the Frauds (Intermediate)',
            'photo'  =>  'https://res.cloudinary.com/springboard-images/image/upload/q_auto,f_auto,fl_lossy/wordpress/2019/02/image6-2.png',
            'summary'  => 'In machine learning, fraud is viewed as a classification problem, and when you’re dealing with imbalanced data, it means the issue to be predicted is in the minority. As a result, the predictive model will often struggle to produce real business value from the data, and it can sometimes get it wrong.',
        ]);

        Project::create([
            'type'  =>  'doctoral',
            'title'  =>  'Catching Crooks on the Hook (Advanced)',
            'photo'  =>  'https://res.cloudinary.com/springboard-images/image/upload/q_auto,f_auto,fl_lossy/wordpress/2019/02/image2-1.jpg',
            'summary'  => 'Vulnerable marine life is under immense threat from illegal poachers around the world. For many years, it was practically impossible to keep tabs on the activities of every boat at sea. These days, advancements in AI, geo-mapping, and cloud computing have combined to realize a brilliant machine learning project idea: Global Fishing Watch.',
        ]);

        Project::create([
            'type'  =>   'postdoctoral',
            'title'  =>   'Uber Helpful Customer Support (Advanced)',
            'photo'  =>   'https://res.cloudinary.com/springboard-images/image/upload/q_auto,f_auto,fl_lossy/wordpress/2019/02/image1-6.png',
            'summary'  => 'Uber set out to improve the effectiveness of its customer support representatives by creating a “human-in-the-loop” model architecture, which is called Customer Obsession Ticket Assistant, or COTA. By split-testing two versions of COTA, the Uber team used deep learning to discover the impact on ticket handling time, customer satisfaction, and revenue.',
        ]);

        Project::create([
            'type'  =>   'undergrade',
            'title'  =>   'Barbie With Brains (Advanced)',
            'photo'  =>   'https://res.cloudinary.com/springboard-images/image/upload/q_auto,f_auto,fl_lossy/wordpress/2019/02/image4-3.png',
            'summary'  => 'Hello Barbie is an exciting demonstration of the power of machine learning and artificial intelligence. Through NLP and some advanced audio analytics, Barbie can interact in logical conversation. The microphone on her necklace records whatever is said and then transmits it to the ToyTalk servers, where it is analyzed.',
        ]);

        Project::create([
            'type'  =>   'master',
            'title'  =>   'Netflix ‘n’ Change (Advanced)',
            'photo'  =>   'https://res.cloudinary.com/springboard-images/image/upload/q_auto,f_auto,fl_lossy/wordpress/2019/02/Screen-Shot-2019-02-21-at-9.34.31-AM.png',
            'summary'  => 'Netflix is the dominant force in entertainment now, and the company understands that different people have different tastes. Sometimes, people are guilty of judging shows or movies by their images and so they might never check out certain programs. Not to be defeated, Netflix aims to persuade more people to watch their shows.',
        ]);
    }
}
