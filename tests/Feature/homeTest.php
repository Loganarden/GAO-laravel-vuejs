<?php

namespace Tests\Feature;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Http\Resources\clientResources;
use App\Models\Client;


class testClient extends TestCase
{


    public function testNominal() 
    {
            /**client */

            /* creation d'un nouveau client pour un test unitaire */

            $client = new Client();
            $client->id = 20;
            $client->nomclient = 'nomdefamille'; 
            $client->prenomclient = 'prenom';

            /* on le passe dans la ressource */
            $expect = (new clientResources($client))->jsonSerialize();

            /* On verifie que les données correspondent */ 
            $this->assertEquals($expect['id'], 20);
    }
}


//code qui fonctionne
        //  $postes = Poste::factory()->create();
        //  $response = $this->get('/');
