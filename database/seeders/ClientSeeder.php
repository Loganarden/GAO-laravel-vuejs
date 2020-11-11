<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('clients')->insert([
            'nomclient' => \Str::random(5),
            'prenomclient' => \Str::random(5),
        ]);
    }
}
