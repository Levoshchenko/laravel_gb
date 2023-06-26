<?php

namespace Tests\Feature\Http;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\HtmlString;
use Tests\TestCase;

class CreateArticlePageControllerTest extends TestCase
{
    public function test_the_route_returns_a_successful_response(): void
    {
        $response = $this->get('/create');

        $response->assertStatus(200);
    }

    public function test_the_page_displays_correct_view(): void
    {
        $response = $this->get('/create');

        $response->assertViewIs('createArticlePage');
    }

    public function test_the_page_view_displays_correct_content(): void
    {
        $response = $this->get('/create');

        $response->assertSee(new HtmlString('<h1>Create article</h1>'));
        $response->assertSee(new HtmlString('<label>Title
        <input type="text">
    </label>'));
        $response->assertSee(new HtmlString('<label>Description
        <textarea></textarea>
    </label>'));
        $response->assertSee(new HtmlString('<label>Short description
        <textarea></textarea>
    </label>'));
        $response->assertSee(new HtmlString('<label>Category
        <select>
            <option>Sports</option>
            <option>Video games</option>
            <option>Movies</option>
            <option>Tech</option>
            <option>Memes</option>
        </select>
    </label>'));
        $response->assertSee(new HtmlString('<input type="submit" value="Create">'));
    }

    public function test_the_response_header_is_missing_location(): void
    {
        $response = $this->get('/create');

        $response->assertHeaderMissing('Location');
    }

    public function test_the_response_header_has_content_type(): void
    {
        $response = $this->get('/create');

        $response->assertHeader('Content-Type', 'text/html; charset=UTF-8');
    }

    public function test_post_method_is_not_allowed_for_the_route(): void
    {
        $response = $this->post('/create');

        $response->assertMethodNotAllowed();
    }

    public function test_delete_method_is_not_allowed_for_the_route(): void
    {
        $response = $this->delete('/create');

        $response->assertMethodNotAllowed();
    }

    public function test_put_method_is_not_allowed_for_the_route(): void
    {
        $response = $this->put('/create');

        $response->assertMethodNotAllowed();
    }
}
