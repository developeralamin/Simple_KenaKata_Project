<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class EmployeeLeavePurposeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('employee_leave_purposes')->insert([
            'name' => "Family Problem",
        ]);
    }
}
