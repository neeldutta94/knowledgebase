<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Bruce Wayne',
            'email' => 'bruce@kb.com',
            'password' => '$2y$10$njXiSji7EmQcze581PYVd.1/XGsJnacD8WoLR0LyJquXxlYq7A5MC',
        ]);

        DB::table('tag')->insert([
           ['name' => 'World'],
           ['name' => 'Technology'],
           ['name' => 'Business'],
           ['name' => 'Politics'],
           ['name' => 'Science'],
           ['name' => 'Health']
       ]);

       $faker = Faker\Factory::create();
       $img = json_encode(array('QWERTY.jpg','QWE123.jpg','ASDQWE.jpg'));
       for($i = 0; $i < 10; $i++) {
           App\Article::create([
               'user_id' => 1,
               'name' => $faker->catchPhrase,
               'article' => $faker->paragraph($nbSentences = 10, $variableNbSentences = true),
               'image' => $img,
               'tag_id' => 'World',
               'username' => $faker->name,
           ]);
       }
    }
}
