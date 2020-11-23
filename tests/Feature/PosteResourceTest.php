<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Poste;
use App\Http\Resources\posteResources;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PosteResourceTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
            /**poste */

            /* creation d'un nouveau poste pour un test unitaire */

            $poste = new Poste();
            $poste->id = 19;
            $poste->nom = 'nomdeposte'; 

            /* on le passe dans la ressource */
            $expect = (new posteResources($poste))->jsonSerialize();

            /* On verifie que les données correspondent */ 
            $this->assertEquals($expect['id'], 19);
    }
}
