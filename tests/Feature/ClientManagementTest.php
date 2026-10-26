<?php

use App\Models\Client;
use App\Models\User;

test('clients can be listed in admin dashboard', function () {
    $admin = User::factory()->create(['role' => 'admin']);
    Client::factory()->create(['name' => 'Test Partner', 'category' => 'key_customer']);

    $response = $this->actingAs($admin)->get(route('admin.clients.index'));

    $response->assertStatus(200);
    $response->assertSee('Test Partner');
});

test('guest cannot access admin clients', function () {
    $response = $this->get(route('admin.clients.index'));

    $response->assertRedirect(route('admin.login'));
});

test('admin can create a new client', function () {
    $admin = User::factory()->create(['role' => 'admin']);

    $response = $this->actingAs($admin)->post(route('admin.clients.store'), [
        'name' => 'New Infrastructure Group',
        'category' => 'key_customer',
        'subtitle' => 'Pioneering Civil Infra',
        'sort_order' => 1,
        'is_active' => '1',
    ]);

    $response->assertRedirect(route('admin.clients.index'));
    expect(Client::where('name', 'New Infrastructure Group')->exists())->toBeTrue();
});
