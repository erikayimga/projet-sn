<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class test_abonne extends TestCase
{
    /**
     * A basic feature test example.
     */

     public function test_example(): void
    {

        $abonne = new abonne();
        $abonne = [
            "nom"=> "Yimga",
            "prenom"=> "erika"
        ];
        $response = $this->get('api/abonnes');

        $response->assertStatus(200);
        $response = $this-> withHeaders(['X-Header' => 'value'])->POST("api/abonne", $abonne); 
        $response->assertStatus(201);   

    }
    public function update(): void
    {
        $abonne = new abonne();
        $abonne = [
            "nom"=> "Yimga",
            "prenom"=> "erika"
        ];
        $response = $this->put('api/abonne');

        $response->assertStatus(200);
        $response = $this-> withHeaders(['X-Header' => 'value'])->post("api/abonne", $abonne); 
        $response -> assertStatus(201);
    }
}
