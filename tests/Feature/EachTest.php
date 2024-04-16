<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function testEach()
    {
        $this->view("each", ["users" => [
            [
                "name" => "Aldizar",
                "hobbies" => ["Coding", "Gaming"]
            ],
            [
                "name" => "Ilham",
                "hobbies" => ["Coding", "Gaming"]
            ]
        ]])
            ->assertSeeInOrder([
                ".red",
                "Aldizar",
                "Coding",
                "Gaming",
                "Ilham",
                "Coding",
                "Gaming"
            ]);
    }

}