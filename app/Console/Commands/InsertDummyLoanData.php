<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InsertDummyLoanData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'loan:dummy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert 10 dummy loan records';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('loan')->insert([
                'loanID' => $i,
                'leadID' => rand(100, 999),
                'loanNo' => 'LN-' . rand(1000, 9999),
                'customerID' => rand(1, 50),
                'disbursalAmount' => rand(50000, 200000),
                'disbursalDate' => now()->subDays(rand(0, 365))->format('Y-m-d'),
                'disbursalTime' => now()->format('H:i:s'),
                'disbursalReferenceNo' => 'REF' . rand(1000, 9999),
                'accountNo' => 'AC' . rand(100000, 999999),
                'accountType' => 'Savings',
                'bankIfsc' => 'IFSC' . rand(1000, 9999),
                'bank' => 'Dummy Bank',
                'bankBranch' => 'Main Branch',
                'chequeDetails' => 'Cheque No ' . rand(1000, 9999),
                'pdDate' => now()->subDays(rand(0, 365))->format('Y-m-d'),
                'pdDoneBy' => 'User ' . rand(1, 5),
                'deduction' => rand(500, 5000),
                'remarks' => 'Test remark',
                'status' => 'Approved',
                'rejReason' => null,
                'companyAccountNo' => 'CA' . rand(1000, 9999),
                'ip' => '127.0.0.1',
                'disbursedBy' => 'Admin',
                'createdDate' => Carbon::now(),
                'allocted_id' => 'AL' . rand(100, 999),
            ]);
        }

        $this->info('✅ 10 Dummy loan records inserted successfully!');
    }
}
