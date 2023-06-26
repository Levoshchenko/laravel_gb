<?php

namespace Tests\Feature\Http;

use Illuminate\Support\HtmlString;
use Tests\TestCase;

class AboutPageControllerTest extends TestCase
{
    public function test_the_route_returns_a_successful_response(): void
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }

    public function test_the_page_displays_correct_view(): void
    {
        $response = $this->get('/about');

        $response->assertViewIs('aboutPage');
    }

    public function test_about_page_view_displays_correct_content(): void
    {
        $response = $this->get('/about');

        $response->assertSee(new HtmlString('<h4 class="fst-italic">About</h4>'));
        $response->assertSee(new HtmlString('<p class="mb-0">This is the content of the about page</p>'));
    }

    public function test_the_response_header_is_missing_location(): void
    {
        $response = $this->get('/about');

        $response->assertHeaderMissing('Location');
    }

    public function test_the_response_header_has_content_type(): void
    {
        $response = $this->get('/about');

        $response->assertHeader('Content-Type', 'text/html; charset=UTF-8');
    }

    public function test_post_method_is_not_allowed_for_the_route(): void
    {
        $response = $this->post('/about');

        $response->assertMethodNotAllowed();
    }

    public function test_delete_method_is_not_allowed_for_the_route(): void
    {
        $response = $this->delete('/about');

        $response->assertMethodNotAllowed();
    }

    public function test_put_method_is_not_allowed_for_the_route(): void
    {
        $response = $this->put('/about');

        $response->assertMethodNotAllowed();
    }
}
