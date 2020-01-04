<?php

namespace Tests\Feature;

use App\Category;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class CategoryTest extends TestCase
{
   use DatabaseMigrations;
    public function testCategoryIndex()
    {
        $userOne = User::create([
            'name' => 'Cat Int',
            'email' => 'catint@gmail.com',
            'password' => Hash::make('password')
        ]);

        $category = Category::create([
            'name' => 'news',
            'user_id' => $userOne->id
        ]);

        $response = $this->actingAs($userOne)
            ->get('/category');

        $response->assertSee($category->name);
        $response->assertStatus(200);
    }

    public function testUserCanCreateCatgories()
    {
        $userOne = User::create([
            'name' => 'Cat Int',
            'email' => 'catint@gmail.com',
            'password' => Hash::make('password')
        ]);

        $category = [
           'name' => 'php'
        ];

        $response = $this->actingAs($userOne)
            ->post('/category',$category);

        $response->assertSee($category['name']);
        $response->assertStatus(200);
        $this->assertDatabaseHas('categories', ['name' => $category['name'], 'user_id' => $userOne->id]);
    }

    public function testUserCannotCreateCategoryWithoutValidation()
    {
        $userOne = User::create([
            'name' => 'Cat Int',
            'email' => 'catint@gmail.com',
            'password' => Hash::make('password')
        ]);

        $category = [
            'name' => null
        ];

        $response = $this->actingAs($userOne)
            ->post('/category',$category);
        $response->assertSessionHasErrors('name');
    }

    public function testUserCanUpdateCategory()
    {
    }

}
