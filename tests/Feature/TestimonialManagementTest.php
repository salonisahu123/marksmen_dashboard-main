<?php

use App\Models\Testimonial;
use App\Models\User;

test('testimonials can be listed in admin dashboard', function () {
    $admin = User::factory()->create(['role' => 'admin']);
    Testimonial::create([
        'card_type' => 'text',
        'author_name' => 'Test Contractor',
        'author_designation' => 'Director',
        'content' => 'Outstanding support and equipment reliability.',
        'rating' => 5,
        'sort_order' => 1,
        'is_active' => true,
    ]);

    $response = $this->actingAs($admin)->get(route('admin.testimonials.index'));

    $response->assertStatus(200);
    $response->assertSee('Test Contractor');
});

test('guest cannot access admin testimonials', function () {
    $response = $this->get(route('admin.testimonials.index'));

    $response->assertRedirect(route('admin.login'));
});

test('admin can create a new testimonial', function () {
    $admin = User::factory()->create(['role' => 'admin']);

    $response = $this->actingAs($admin)->post(route('admin.testimonials.store'), [
        'card_type' => 'text',
        'author_name' => 'Highway Builders Ltd',
        'author_designation' => 'Project Lead, Bhopal',
        'content' => 'Exceptional fleet delivery and service response time.',
        'rating' => 5,
        'sort_order' => 1,
        'is_active' => '1',
    ]);

    $response->assertRedirect(route('admin.testimonials.index'));
    expect(Testimonial::where('author_name', 'Highway Builders Ltd')->exists())->toBeTrue();
});

test('homepage renders dynamic testimonials', function () {
    Testimonial::create([
        'card_type' => 'text',
        'author_name' => 'Dynamic VIP Client',
        'author_designation' => 'Chief Engineer',
        'content' => 'Marksmen equipment delivered peak efficiency for our mining project.',
        'rating' => 5,
        'sort_order' => 0,
        'is_active' => true,
    ]);

    $response = $this->get(route('home'));

    $response->assertStatus(200);
    $response->assertSee('Dynamic VIP Client');
    $response->assertSee('Chief Engineer');
});
