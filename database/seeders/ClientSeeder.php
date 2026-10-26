<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        $clients = [
            // Key Customers
            [
                'name' => 'MKC Group',
                'category' => 'key_customer',
                'logo' => 'clients/mkc_logo.png',
                'subtitle' => 'Foundation for the Future',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Path India',
                'category' => 'key_customer',
                'logo' => 'clients/path_logo.png',
                'subtitle' => 'Highway & Road Infrastructure',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'VRS Group',
                'category' => 'key_customer',
                'logo' => 'clients/vrs_logo.png',
                'subtitle' => 'Surging Ahead',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'VRC Group',
                'category' => 'key_customer',
                'logo' => 'clients/vrc_logo.png',
                'subtitle' => 'Civil & Infra Construction',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Dilip Buildcon',
                'category' => 'key_customer',
                'logo' => 'clients/dilip_buildcon_logo.png',
                'subtitle' => 'Infrastructure & Beyond',
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'KDSL',
                'category' => 'key_customer',
                'logo' => null,
                'subtitle' => 'Industrial Logistics & Engineering',
                'sort_order' => 6,
                'is_active' => true,
            ],
            [
                'name' => 'RSK Group',
                'category' => 'key_customer',
                'logo' => 'clients/rsk_logo.png',
                'subtitle' => 'Mining & Heavy Earthmoving',
                'sort_order' => 7,
                'is_active' => true,
            ],
            [
                'name' => 'Bansal Group',
                'category' => 'key_customer',
                'logo' => 'clients/bansal_logo.png',
                'subtitle' => 'Infrastructure & Construction',
                'sort_order' => 8,
                'is_active' => true,
            ],
            [
                'name' => 'Nagar Nigam Bhopal',
                'category' => 'key_customer',
                'logo' => 'clients/nagar_nigam_bhopal_logo.png',
                'subtitle' => 'Municipal Infrastructure Services',
                'sort_order' => 9,
                'is_active' => true,
            ],

            // Prime Customers
            [
                'name' => 'Bansal Group',
                'category' => 'prime_customer',
                'logo' => 'clients/bansal_logo.png',
                'subtitle' => 'Infrastructure & Construction',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Dilip Buildcon Limited',
                'category' => 'prime_customer',
                'logo' => 'clients/dilip_buildcon_logo.png',
                'subtitle' => 'Roads & Highways Development',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Nagar Nigam Bhopal',
                'category' => 'prime_customer',
                'logo' => 'clients/nagar_nigam_bhopal_logo.png',
                'subtitle' => 'Municipal Infrastructure Services',
                'sort_order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($clients as $client) {
            Client::updateOrCreate(
                [
                    'name' => $client['name'],
                    'category' => $client['category'],
                ],
                $client
            );
        }
    }
}
