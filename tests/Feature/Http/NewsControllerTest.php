<?php

namespace Tests\Feature\Http;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsControllerTest extends TestCase
{
    public function test_the_index_route_returns_a_successful_response(): void
    {
        $response = $this->get('/categories/sports');

        $response->assertStatus(200);
    }

    public function test_the_index_route_displays_correct_view(): void
    {
        $response = $this->get('/categories/sports');

        $response->assertViewIs('news.index');
    }

    public function test_the_index_route_view_has_correct_categories_data(): void
    {
        $response = $this->get('/categories/sports');

        $response->assertViewHas('categoryName', 'sports');
    }

    public function test_the_show_route_displays_correct_view(): void
    {
        $response = $this->get('/categories/sports/0');

        $response->assertViewIs('news.show');
    }

    public function test_the_show_route_view_has_correct_data(): void
    {
        $response = $this->get('/categories/sports/0');

        $response->assertViewHas('article', [
            'title' => 'dui ut ornare lectus',
            'short_description' => 'dui id ornare arcu odio ut sem nulla',
            'description' => 'vitae sapien pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas sed tempus urna et pharetra pharetra massa massa ultricies mi'
        ]);
    }

    public function test_post_method_is_not_allowed_for_index_route(): void
    {
        $response = $this->post('/categories/sports');

        $response->assertMethodNotAllowed();
    }

    public function test_put_method_is_not_allowed_for_index_route(): void
    {
        $response = $this->put('/categories/sports');

        $response->assertMethodNotAllowed();
    }

    public function test_delete_method_is_not_allowed_for_index_route(): void
    {
        $response = $this->delete('/categories/sports');

        $response->assertMethodNotAllowed();
    }

    public function test_post_method_is_not_allowed_for_show_route(): void
    {
        $response = $this->post('/categories/sports/0');

        $response->assertMethodNotAllowed();
    }

    public function test_put_method_is_not_allowed_for_show_route(): void
    {
        $response = $this->put('/categories/sports/0');

        $response->assertMethodNotAllowed();
    }
}
