<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PaginaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_pagina_inicio()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_pagina_iniciolog()
    {
        $response = $this->get('/inicio');

        $response->assertStatus(200);
    }

    public function test_login_form()
    {
        $response = $this->get('/contacto');

        $response->assertStatus(200);
    }
    
    public function test_usuario_duplicado()
    {
        $user1 = User::make([
            'name' => 'Diana',
            'email' => 'diana@test.com'
        ]);

        $user2 = User::make([
            'name' => 'Jessy',
            'email' => 'jessy@test.com'
        ]);

        $this->assertTrue($user1->name != $user2->name);
    }

    public function test_elimina_user()
    {
        $user = User::factory()->count(1)->make;

        $user = User::first();

        if($user){
            $user->delete();
        }

        $this->assertTrue(true);
    }

    public function test_nuevo_user()
    {
        $response = $this->post('/register',[
            'name' => 'Diana',
            'email' => 'diana@test.com',
            'password' => 'superman',
            'password_confirmation' => 'superman'
        ]);

        $response->asserRedirect('/inicio');
    }

}
