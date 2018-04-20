<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Title as Title;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testNewClientForm()
    {
        $response = $this->get('/clients/new');
        $response->assertStatus(200);
    }

    public function testProfessorOption()
    {
        $response = $this->get('/clients/new');
        $this->assertContains('Proffesor', $response->getContent(), 'HTML should have Proffesor');
    }

    // public function testTitlesModelCount()
    // {
    //     $titles = new Title;
    //     $this->assertTrue(count($titles->all()) === 6, 'It should have 6 titles');
    // }

    // public function testLastTitleShouldBeProfessor()
    // {
    //     $titles = new Title;
    //     $titles_array = $titles->all();
    //     $this->assertEquals('Professor', array_pop($titles_array), 'Titles last element should be Proffesor');
    // }
}
