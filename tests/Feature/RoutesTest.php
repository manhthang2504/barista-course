<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Registration;

class RoutesTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Static pages should return 200 and render the correct views.
     * @dataProvider staticPagesProvider
     */
    public function test_static_pages_load(string $uri, string $view): void
    {
        $response = $this->get($uri);
        $response->assertStatus(200);
        $response->assertViewIs($view);
    }

    public static function staticPagesProvider(): array
    {
        return [
            ['/', 'home'],
            ['general-course', 'general-course'],
            ['tea-course', 'tea-course'],
            ['matcha-course', 'matcha-course'],
            ['about-us', 'about-us'],
            ['cold-brew-berry-vai', 'cold-brew-berry-vai'],
            ['coffee-tropical', 'coffee-tropical'],
            ['chuoi-nuong-lac-thom', 'chuoi-nuong-lac-thom'],
            ['coffee-matcha-fusion', 'coffee-matcha-fusion'],
        ];
    }

    public function test_registrations_index_page_loads(): void
    {
        $response = $this->get(route('registrations.index'));
        $response->assertStatus(200)->assertViewIs('registrations.index');
    }

    public function test_registrations_create_page_loads(): void
    {
        $response = $this->get(route('registrations.create'));
        $response->assertStatus(200)->assertViewIs('registrations.create');
    }

    public function test_can_store_registration_and_redirects_to_result(): void
    {
        $payload = [
            'name' => 'John Doe',
            'phone' => '0900000000',
            'major' => 'Barista',
            'course' => 'Barista Coffee',
            'time_preference' => 'Sáng',
            'email' => 'john@example.com',
            'city' => 'Hà Nội',
        ];

        $response = $this->post(route('registrations.store'), $payload);

        $response->assertRedirect(route('registrations.result'));
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('registrations', [
            'name' => 'John Doe',
            'phone' => '0900000000',
            'time_preference' => 'Sáng',
            'email' => 'john@example.com',
            'city' => 'Hà Nội',
        ]);
    }

    public function test_registrations_result_page_loads(): void
    {
        $response = $this->get(route('registrations.result'));
        $response->assertStatus(200)->assertViewIs('registrations.result');
    }
}
