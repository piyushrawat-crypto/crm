<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('loan')->insert([
            'leadID' => 1,
            'loanNo' => 'LN001',
            'customerID' => 101,
            'disbursalAmount' => 50000.00,
            'disbursalDate' => '2025-08-14',
            'disbursalTime' => '10:30:00',
            'disbursalReferenceNo' => 'REF12345',
            'accountNo' => '1234567890',
            'accountType' => 'Savings',
            'bankIfsc' => 'HDFC0001234',
            'bank' => 'HDFC Bank',
            'bankBranch' => 'Main Branch',
            'chequeDetails' => 'Cheque No: 12345',
            'pdDate' => null,
            'pdDoneBy' => null,
            'deduction' => null,
            'remarks' => 'First loan disbursed',
            'status' => 'Approved',
            'rejReason' => null,
            'companyAccountNo' => 'COMP12345',
            'ip' => '127.0.0.1',
            'disbursedBy' => 'Admin',
            'createdDate' => now(),
            'allocted_id' => 'A1001'
        ]);
    }
}
