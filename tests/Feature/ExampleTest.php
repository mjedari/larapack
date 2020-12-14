<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Wink\WinkPost;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $posts = WinkPost::live()->get();
        $tags = WinkPost::all();
        $response = $this->get('/posts');

        $response->assertSee();
    }
}
