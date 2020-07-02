<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHomePage()
    {
        $response = $this->get('/');
        $response->assertSeeText("Welcome to laravel");
        $response->assertSeeText("this is contetn of the main page");
        // $response->assertStatus(200);
    }
    public function testContactPage(){
        $response = $this->get('/contact');
        $response->assertSeeText("Hello this is contact");
    }
}
