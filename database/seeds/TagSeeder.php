<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('tag')->insert([
            ['name' => 'World'],
            ['name' => 'Technology'],
            ['name' => 'Business'],
            ['name' => 'Politics'],
            ['name' => 'Science'],
            ['name' => 'Health']
        ]);
    }
}
