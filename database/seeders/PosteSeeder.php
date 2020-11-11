<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PosteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('postes')->insert([
            'nomposte' => \Str::random(5),
        ]);
    }
}
