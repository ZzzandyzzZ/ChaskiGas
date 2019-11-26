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
        $this->assertDatabaseMissing('user', [
            'name' => 'Delma',
        ]);
    }
        public function testDatabase3()
    {
        $this->assertDatabaseHas('user', [
            'email' => 'd123@gmail.com',
        ]);
    }
     public function testDatabase4()
    {
        $this->assertDatabaseMissing('user', [
            'email' => 'r123@gmail.com',
        ]);
    }
    public function testDatabase5()
    {
        $this->assertDatabaseMissing('user', [
            'name' => 'Carlos',
        ]);
    }


}