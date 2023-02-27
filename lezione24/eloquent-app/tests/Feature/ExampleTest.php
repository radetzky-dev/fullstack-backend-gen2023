<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_voli_route(): void
    {
        $response = $this->get('/voli');
        $response->dumpHeaders();
 
        $response->dumpSession();
        //$response->dump();

        $response->assertStatus(200);
    }


    public function test_voli_content(): void
    {
        $response = $this->get('/voli');
        $response->assertOk();
        $response->assertSee("autem");
        $response->assertSee("saepe");
        $response->assertSee("Jastland");
     
    }

    public function test_non_esiste_route(): void
    {
        $response = $this->get('/nonesiste');
        $response->assertStatus(404);
    }

    public function test_view(): void
    {
        $var = json_decode('{"id":1,"user_id":1,"number":"333-333333","created_at":null,"updated_at":null}');
        $view = $this->view('phone', ['number' => $var]);
 
        $view->assertSee('333-333333');
    }


}
