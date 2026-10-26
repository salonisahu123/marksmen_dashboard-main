<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'card_type' => 'video',
                'author_name' => 'Mr. Rohit Agarwal delivery handover',
                'author_designation' => 'Equipment Handover',
                'content' => null,
                'rating' => 5,
                'image' => 'testimonials/img9.jpeg',
                'video_id' => 'M7lc1UVf-VE',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'card_type' => 'text',
                'author_name' => 'Mr. Vikas Mittal',
                'author_designation' => 'MINING OPERATIONS, SAGAR',
                'content' => 'The strong OEM backing and genuine parts supplied by Marksmen Group lowered our total cost of ownership significantly. We highly recommend their machinery for high-output mining environments.',
                'rating' => 5,
                'image' => null,
                'video_id' => null,
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'card_type' => 'video',
                'author_name' => 'Mr. Aslam Mansuri Eicher fleet delivery',
                'author_designation' => 'Commercial Fleet Delivery',
                'content' => null,
                'rating' => 5,
                'image' => 'testimonials/images2.jpeg',
                'video_id' => 'M7lc1UVf-VE',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'card_type' => 'text',
                'author_name' => 'Mr. Saurabh Dubey',
                'author_designation' => 'PROJECT DIRECTOR, GWALIOR',
                'content' => 'The Schwing Stetter concrete equipment procured through Marksmen Group delivered flawless operational reliability for our state highway flyover contracts. Top-tier engineering support!',
                'rating' => 5,
                'image' => null,
                'video_id' => null,
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'card_type' => 'text',
                'author_name' => 'Mr. Alok Mishra',
                'author_designation' => 'LOGISTICS HEAD, JABALPUR',
                'content' => 'Ascenso OTR tyres supplied by Marksmen gave our heavy tippers outstanding traction in abrasive quarry conditions. Timely logistics, solid durability, and great cost savings.',
                'rating' => 5,
                'image' => null,
                'video_id' => null,
                'sort_order' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::updateOrCreate(
                [
                    'author_name' => $testimonial['author_name'],
                ],
                $testimonial
            );
        }
    }
}
