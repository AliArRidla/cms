<?php

use Illuminate\Database\Seeder;

class CobaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coba = factory(App\Coba::class, 70)->create();
        $cobaBaru = factory(App\Coba::class, 70)->create();
    }
}
