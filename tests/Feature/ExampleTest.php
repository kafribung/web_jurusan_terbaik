<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use App\Models\User;

class ExampleTest extends TestCase
{
    // OPIK TEST UNIT
    use RefreshDatabase;

    protected $author;
    public function setUp():void
    {
        parent::setUp();
        $this->author = factory(User::class)->create([
            'name' => 'Opik',
            'email' => 'opik@test.sinjai',
        ]);
    }

    // OPIK TEST UNIT
    public function testUnit()
    {
        $this->assertSame('opik@test.sinjai', $this->author->email);
    }

    //  OPIK TEST FITUR 
    public function testFitur()
    {
        $response = $this->get('/beranda/create/login');

        $response->assertRedirect('/login');
    }
}
