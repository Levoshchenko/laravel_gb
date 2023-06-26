<?php

namespace Tests\Feature\Http;

use Illuminate\Support\HtmlString;
use Tests\TestCase;

class CategoriesControllerTest extends TestCase
{
    public function test_the_route_returns_a_successful_response(): void
    {
        $response = $this->get('/categories');

        $response->assertStatus(200);
    }

    public function test_the_page_displays_correct_view(): void
    {
        $response = $this->get('/categories');

        $response->assertViewIs('categories.index');
    }

    public function test_the_index_view_has_correct_data(): void
    {
        $response = $this->get('/categories');

        $categories = [
            'sports',
            'video games',
            'movies',
            'tech',
            'memes'
        ];

        $response->assertViewHas('categories', $categories);
    }

    public function test_the_page_view_displays_correct_content(): void
    {
        $response = $this->get('/categories');

        $response->assertSee(new HtmlString('<h1>Categories</h1>'));
        $response->assertSee(new HtmlString('<a href="/categories/sports" class="list-group-item list-group-item-action">Sports</a>'));
        $response->assertSee(new HtmlString('<a href="/categories/video games" class="list-group-item list-group-item-action">Video games</a>'));
        $response->assertSee(new HtmlString('<a href="/categories/movies" class="list-group-item list-group-item-action">Movies</a>'));
        $response->assertSee(new HtmlString('<a href="/categories/tech" class="list-group-item list-group-item-action">Tech</a>'));
        $response->assertSee(new HtmlString('<a href="/categories/memes" class="list-group-item list-group-item-action">Memes</a>'));
    }

    public function test_patch_method_is_not_allowed_for_the_route(): void
    {
        $response = $this->patch('/categories');

        $response->assertMethodNotAllowed();
    }
}
