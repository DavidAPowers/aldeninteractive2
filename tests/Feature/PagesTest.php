<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PagesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHomePageTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testServicesPageTest()
    {
        $response = $this->get('/services');

        $response->assertStatus(200);
    }
    public function test404Test()
    {
        $response = $this->get('/servicesasdf');

        $response->assertStatus(404);
    }
}