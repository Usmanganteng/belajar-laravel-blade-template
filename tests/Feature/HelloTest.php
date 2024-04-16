<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
        public function testHello() {
            $this->get("/hello")
                ->assertSeeText("Aldizar");
        }
        
        public function testHelloWorld() {
            $this->get("/world")
            ->assertSeeText("Aldizar");
        }

        public function testHelloView() {
            $this->view("hello", ["name" => "Aldizar"])
                ->assertSeeText("Aldizar");
        }

        public function testHelloWorldView() {
            $this->view("hello.world", ["name" => "Aldizar"])
                ->assertSeeText("Aldizar");
        }

        
}
