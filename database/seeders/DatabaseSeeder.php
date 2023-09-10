<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // User::create([
        //     'name' => 'Ruiz',
        //     'email' => 'Ruiz@gmail.com',
        //     'password'=> bcrypt('1234234')
        // ]);

        Category::create([ 
            'namakat'=>'personal', 
            'slug'=>'personal' ]);

        Category::create([ 
            'namakat'=>'scifi', 
            'slug'=>'sci-fi' ]);
        
        Category::create([ 
            'namakat'=>'slice of life', 
            'slug'=>'slice-of-life' ]);
        
        Category::create([ 
            'namakat'=>'romance', 
            'slug'=>'romance' ]);

        Post::factory(20)->create();
                
        // Post::create([
        //     'title'=>'Lolita',
        //     'author'=>'Vladimir Nabokov',
        //     'slug'=>'lolita',
        //     'excerpt'=>"Humbert Humbert - scholar, aesthete and romantic - has fallen completely and utterly in love with Dolores Haze, his landlady's gum-snapping, silky-skinned twelve-year-old daughter",
        //     'body'=>"Humbert Humbert - scholar, aesthete, and romantic - has fallen completely and utterly in love with Dolores Haze, his landlady's gum-snapping, silky-skinned twelve-year-old daughter. Reluctantly agreeing to marry 
        //     Mrs. Haze just to be close to Lolita, Humbert suffers greatly in the pursuit of romance; but when Lo herself starts looking for attention elsewhere, he will carry her off on a desperate cross-country misadventure, all in the name of Love. Hilarious, flamboyant, heart-breaking and full of ingenious word play, 
        //     Lolita is an immaculate, unforgettable masterpiece of obsession, delusion, and lust",
        //     'category_id' => 1,
        //     'user_id'=> 1
        // ]);

        // Post::create([
        //     'title'=>'The Brothers Karamazov',
        //     'category_id'=>1,
        //     'user_id'=>2,
        //     'author'=>'Fyodor Dostoevsky',
        //     'slug'=>'the-brothers-karamazov',
        //     'excerpt'=>'The Brothers Karamazov is a murder mystery, a courtroom drama, 
        //     and an exploration of erotic rivalry in a series of triangular love affairs involving the “wicked and sentimental” 
        //     Fyodor Pavlovich Karamazov and his three sons―the impulsive and sensual Dmitri',
        //     'body'=>'The Brothers Karamazov is a murder mystery, a courtroom drama, and an exploration of erotic 
        //     rivalry in a series of triangular love affairs involving the “wicked and sentimental” 
        //     Fyodor Pavlovich Karamazov and his three sons―the impulsive and sensual Dmitri; 
        //     the coldly rational Ivan; and the healthy, red-cheeked young novice Alyosha. 
        //     Through the gripping events of their story, Dostoevsky portrays the whole of Russian life, is social and spiritual striving, 
        //     in what was both the golden age and a tragic turning point in Russian culture.']);

        // Post::create([
        //     'title'=>'Kenapa Kita Tidak Berdansa?',
        //     'category_id'=>1,
        //     'user_id' => 3,
        //     'author'=>'Dea Anugrah',
        //     'slug'=>'kenapa-kita-tidak-berdansa',
        //     'excerpt'=>"Saya terlambat memahami bahwa rumah tak seharusnya hanya dibayangkan sebagai salah satu di antara kemarin dan besok.",
        //     'body'=>'<p>Saya terlambat memahami bahwa rumah tak seharusnya hanya dibayangkan sebagai salah satu di antara kemarin dan besok. Gagasan tentang rumah semestinya 
        //     mengatasi dulu, kini, dan nanti, sebab ia terus bergerak bersama diri saya dan orang-orang yang saya anggap sebagai bagiannya.</p> <p>Saya merasa beruntung karena menyadari itu sekarang. Beruntung sekali. Nanti siang, ketika tulisan ini terbit, barangkali 
        //     saya sedang meletakkan oleh-oleh titipan pacar di meja makan, lalu memeluk kedua orangtua saya sambil berbisik, "Buenas tardes, Mama." </p><p> Dia mungkin akan menjawab, "Guatemala", dan saya akan mensyukuri semua yang saya miliki hari ini, merayakan yang lengkap dan yang tidak dalam hidup, dengan kegembiraan tak terkira.</p><p>(Rumah = Nostalgi + Fantasi)</p>']);
                
    }
}
