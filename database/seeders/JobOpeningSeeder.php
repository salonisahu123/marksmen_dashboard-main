<?php

namespace Database\Seeders;

use App\Models\JobOpening;
use Illuminate\Database\Seeder;

class JobOpeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = [
            [
                'title' => 'Senior Service Engineer (Tata Hitachi Excavators)',
                'department' => 'Heavy Equipment Service',
                'employment_type' => 'Full-Time',
                'location' => 'Gwalior Workshop & MP Field Sites',
                'experience' => '4 - 7 Years Experience',
                'open_positions' => 2,
                'job_description' => 'Lead diagnostic troubleshooting, hydraulic pump calibration, and major engine overhauls for Tata Hitachi heavy mining excavators across Central MP sites.',
                'skills' => ['Hydraulics', 'Tata Hitachi', 'Diagnostics', 'Field Repairs'],
                'qualification' => 'Diploma/B.E in Mechanical Engineering',
                'status' => 'open',
            ],
            [
                'title' => 'Sales & Key Account Manager (OTR & Industrial Tyres)',
                'department' => 'Commercial & Sales',
                'employment_type' => 'Full-Time',
                'location' => 'Bhopal Head Office (Central MP)',
                'experience' => '3 - 6 Years Experience',
                'open_positions' => 1,
                'job_description' => 'Drive B2B sales pipelines, manage mining and infrastructure fleet accounts, and expand statewide dealer networks for Ascenso OTR & industrial tyres.',
                'skills' => ['B2B Sales', 'OTR Tyres', 'Key Accounts', 'Mining Fleets'],
                'qualification' => 'MBA/BBA or relevant degree',
                'status' => 'open',
            ],
            [
                'title' => 'Service Technician & Hydraulic Specialist (Schwing Stetter)',
                'department' => 'Concrete Machinery',
                'employment_type' => 'Full-Time',
                'location' => 'Sagar / Bhopal Branches',
                'experience' => '2 - 5 Years Experience',
                'open_positions' => 2,
                'job_description' => 'Perform routine preventive maintenance, transit mixer drum drives inspection, concrete pump cylinder repairs, and batching plant commissioning.',
                'skills' => ['Schwing Stetter', 'Transit Mixers', 'Concrete Pumps', 'Hydraulics'],
                'qualification' => 'ITI/Diploma in Mechanical/Automobile',
                'status' => 'open',
            ],
            [
                'title' => 'Commercial Vehicle Service Advisor / Supervisor (Eicher)',
                'department' => 'Commercial Mobility',
                'employment_type' => 'Full-Time',
                'location' => 'Gwalior Transport Nagar Hub',
                'experience' => '3 - 5 Years Experience',
                'open_positions' => 1,
                'job_description' => 'Oversee workshop floor operations, customer vehicle check-in, job-card workflows, technical team assignments, and delivery SLA turnaround times.',
                'skills' => ['Eicher Trucks', 'Service Advisor', 'Workshop Core', 'Fleet Service'],
                'qualification' => 'Diploma/B.E in Automobile Engineering',
                'status' => 'open',
            ],
            [
                'title' => 'Spare Parts & Inventory Logistics Coordinator',
                'department' => 'Supply Chain & Logistics',
                'employment_type' => 'Full-Time',
                'location' => 'Bhopal HQ / Gwalior Warehouse',
                'experience' => '2 - 4 Years Experience',
                'open_positions' => 2,
                'job_description' => 'Manage genuine OEM components cataloging, ERP stock tracking, branch warehouse replenishment, and expedited logistics across 18 MP districts.',
                'skills' => ['ERP Systems', 'Spare Parts', 'Inventory Control', 'Logistics'],
                'qualification' => 'Any Graduate with ERP Knowledge',
                'status' => 'open',
            ],
            [
                'title' => 'Heavy Equipment Demo Specialist & Field Operator',
                'department' => 'Field Demonstrations',
                'employment_type' => 'Full-Time',
                'location' => 'Madhya Pradesh (Statewide Sites)',
                'experience' => '3+ Years Experience',
                'open_positions' => 2,
                'job_description' => 'Execute live equipment field trials, train client operators on maximum fuel efficiency and safety, and provide technical demonstrations for sales teams.',
                'skills' => ['Excavator Operation', 'Demo Trials', 'Operator Training', 'Site Safety'],
                'qualification' => 'Certified Operator / Diploma',
                'status' => 'open',
            ],
        ];

        foreach ($jobs as $job) {
            JobOpening::create($job);
        }
    }
}
