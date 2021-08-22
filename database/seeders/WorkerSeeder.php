<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $workers= [
            ['code' => 1, 'worker' => '作業員'],
            ['code' => 2, 'worker' => '事務員'],
            ['code' => 3, 'worker' => '管理人'],
        ];

        DB::table('workers')->insert($workers);


    }
}
