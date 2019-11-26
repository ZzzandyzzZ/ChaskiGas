<?php

//namespace Tests\Feature;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class Testone extends TestCase
{
    public function testDatabase()
    {
        $this->assertDatabaseMissing('user', [
            'name' => 'Pablo',
        ]);
    }
    public function testDatabase2()
    {
        $this->assertDatabaseHas('user', [
            'name' => 'Delma',
        ]);
    }
        public function testDatabase3()
    {
        $this->assertDatabaseHas('user', [
            'email' => 'd123@gmail.com',
        ]);
    }


}