<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    
	public function thisanelement()
	{
    // Make call to application...

    $this->assertDatabaseHas('users', [
        'email' => 'superAdmin@gmail.com',
    ]);
	}

	public function thereisnoelement()
	{
    // Make call to application...

    $this->assertDatabaseMissing('users', [
        'email' => 'superAdmasin@gmail.com',
    ]);
	}

	public function deleteofdatabase()
	{
    // Make call to application...

    $this->assertSoftDeleted('users', ['email' => ' superAdmin@gmail.com']);
	}


}
