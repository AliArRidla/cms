<?php

use Illuminate\Database\Seeder;

use App\about;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article = factory(App\about::class, 10)->create();
    }
}
