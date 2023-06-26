<?php

namespace Tests\Feature\Http;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\HtmlString;
use Tests\TestCase;

class SignInPageControllerTest extends TestCase
{
    public function test_the_route_returns_a_successful_response(): void
    {
        $response = $this->get('/signin');

        $response->assertStatus(200);
    }

    public function test_the_page_displays_correct_view(): void
    {
        $response = $this->get('/signin');

        $response->assertViewIs('signInPage');
    }

    public function test_the_response_header_is_missing_location(): void
    {
        $response = $this->get('/signin');

        $response->assertHeaderMissing('Location');
    }

    public function test_the_response_header_has_content_type(): void
    {
        $response = $this->get('/signin');

        $response->assertHeader('Content-Type', 'text/html; charset=UTF-8');
    }

    public function test_the_response_header_has_cache_control(): void
    {
        $response = $this->get('/signin');

        $response->assertHeader('Cache-Control', 'no-cache, private');
    }

    public function test_post_method_is_not_allowed_for_the_route(): void
    {
        $response = $this->post('/signin');

        $response->assertMethodNotAllowed();
    }

    public function test_delete_method_is_not_allowed_for_the_route(): void
    {
        $response = $this->delete('/signin');

        $response->assertMethodNotAllowed();
    }

    public function test_put_method_is_not_allowed_for_the_route(): void
    {
        $response = $this->put('/signin');

        $response->assertMethodNotAllowed();
    }

    public function test_patch_method_is_not_allowed_for_the_route(): void
    {
        $response = $this->patch('/signin');

        $response->assertMethodNotAllowed();
    }
}
