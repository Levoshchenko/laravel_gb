<?php

namespace Tests\Feature\Http;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\HtmlString;
use Tests\TestCase;

class DataRequestControllerTest extends TestCase
{
    public function test_the_create_route_returns_a_successful_response(): void
    {
        $response = $this->get('/request/create');

        $response->assertStatus(200);
    }

    public function test_the_store_route_allows_post_method(): void
    {
        $response = $this->post('/request/store');

        $response->assertStatus(302);
    }

    public function test_get_method_is_not_allowed_for_the_store_route(): void
    {
        $response = $this->get('/request/store');

        $response->assertMethodNotAllowed();
    }

    public function test_put_method_is_not_allowed_for_the_store_route(): void
    {
        $response = $this->put('/request/store');

        $response->assertMethodNotAllowed();
    }

    public function test_delete_method_is_not_allowed_for_the_store_route(): void
    {
        $response = $this->delete('/request/store');

        $response->assertMethodNotAllowed();
    }

    public function test_the_store_route_redirects_to_create_route(): void
    {
        $response = $this->post('/request/store');

        $response->assertRedirect('/request/create');
    }

    public function test_the_create_route_displays_correct_view(): void
    {
        $response = $this->get('/request/create');

        $response->assertViewIs('dataRequest.create');
    }

    public function test_post_method_is_not_allowed_for_the_create_route(): void
    {
        $response = $this->post('/request/create');

        $response->assertMethodNotAllowed();
    }

    public function test_patch_method_is_not_allowed_for_the_create_route(): void
    {
        $response = $this->patch('/request/create');

        $response->assertMethodNotAllowed();
    }
}
