<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view("form", ["user" => [
            "premium" => true,
            "name" => "Aldizar",
            "admin" => true
        ]])
            ->assertSee("checked")
            ->assertSee("Aldizar")
            ->assertDontSee("readonly");

        $this->view("form", ["user" => [
            "premium" => false,
            "name" => "Aldizar",
            "admin" => false
        ]])
            ->assertDontSee("checked")
            ->assertSee("Aldizar")
            ->assertSee("readonly");
    }

}