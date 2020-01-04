<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AuthTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use DatabaseMigrations;

    public function testLoginPage()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function testLoginUser()
    {
        User::create([
            'name' => 'Perez Cato',
            'email' => 'perezcatoc@gmail.com',
            'password' => Hash::make('perez2000'),
        ]);
        $response = $this->post('/login', ['email' => 'perezcatoc@gmail.com', 'password' => 'perez2000']);
        $response->assertRedirect('/home');
        $response->assertSee('Redirecting');
    }

    public function testRegisterUser()
    {
        $user = [
            'name' => 'Kwame Akoto',
            'email' => 'perecato2000@gmail.com',
            'password' => 'perez2000',
            'password_confirmation' => 'perez2000'
        ];
        $response = $this->post('/register', $user);
        $response->assertRedirect('/home');
        array_splice($user,2,2);
        $this->assertDatabaseHas('users' , $user );
    }
}
