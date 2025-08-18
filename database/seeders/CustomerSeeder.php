<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('customer')->insert([
                'name' => $faker->name,
                'firstName' => $faker->firstName,
                'middleName' => $faker->firstName,
                'lastName' => $faker->lastName,
                'gender' => $faker->randomElement(['Male', 'Female']),
                'dob' => $faker->date(),
                'mobile' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail,
                'pancard' => strtoupper($faker->bothify('?????#####?')),
                'aadharNo' => $faker->numerify('############'),
                'password' => bcrypt('password'),
                'marital' => $faker->randomElement(['Single', 'Married']),
                'profile' => null,
                'otp' => rand(1000, 9999),
                'isVerified' => $faker->boolean,
                'employeeType' => $faker->randomElement(['Salaried', 'Self Employed']),
                'createdDate' => $faker->dateTimeThisYear,
                'industry' => $faker->company,
                'designation' => $faker->jobTitle,
                'working_since' => $faker->date(),
                'salary_date' => $faker->date(),
                'official_email' => $faker->companyEmail,
                'education' => $faker->randomElement(['Graduate', 'Post Graduate', 'PhD']),
                'emailVerify' => $faker->boolean,
                'panVerify' => $faker->boolean,
                'panVerifyDate' => $faker->date(),
                'emailVerifyDate' => $faker->date(),
                'gst_no' => $faker->numerify('GST########'),
                'ekyc_request_status' => $faker->randomElement(['Pending', 'Approved', 'Rejected']),
                'alterMobileNo' => $faker->phoneNumber,
                'geo_pincode' => $faker->postcode,
                'lat' => $faker->latitude,
                'longi' => $faker->longitude,
            ]);
        }
    }
}
