<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class LeadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $leads = [];
        for ($i = 1; $i <= 10; $i++) {
            $leads[] = [
                'customerID' => rand(1, 5),
                'userID' => rand(1, 3),
                'purpose' => fake()->randomElement(['Personal', 'Home Loan', 'Car Loan', 'Education', 'Wedding']),
                'loanRequired' => fake()->numberBetween(50000, 500000),
                'tenure' => fake()->randomElement([12, 24, 36, 48, 60]),
                'monthlyIncome' => fake()->numberBetween(20000, 100000),
                'salaryMode' => fake()->randomElement(['Bank Transfer', 'Cash']),
                'city' => fake()->city(),
                'state' => fake()->state(),
                'pincode' => fake()->postcode(),
                'status' => fake()->randomElement(['New', 'Closed', 'Not Interested', 'Callback']),
                'utmSource' => 'Website',
                'fbLeads' => 'New Case',
                'domainName' => 'sabka loan',
                'comingLeadsDate' => now(),
                'ip' => fake()->ipv4(),
                'callAssign' => 0,
                'creditAssign' => 0,
                'createdDate' => now(),
                'alloUID' => (string)rand(200, 300),
                'sanctionalloUID' => 'no',
                'sanctionAppID' => null,
                'entity_id' => null,
                'ekyc_request_initiated_on' => null,
                'ekyc_request_closed_on' => null,
                'ekyc_request_status' => '0',
                'uploaddocument' => 0,
                'form_tnc' => 0,
                'product' => null,
            ];
        }

        DB::table('leads')->insert($leads);
        //
    }
}
