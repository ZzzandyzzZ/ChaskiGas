<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testVerifySecurityLoginTest()
    {
		
		//$this->withoutExceptionHandling();
     
		$response = $this->get('/index');
        $response->assertStatus(302);
    }
	public function testCorrectAccessToLoginTest()
    {
		
		//$this->withoutExceptionHandling();
     
		$response = $this->get('/');
        $response->assertStatus(200);
		$response->assertSee('Bienvenido');
    }
}
