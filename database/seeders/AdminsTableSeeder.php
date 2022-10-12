<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords = [
            ['id'=>1, 'name'=>'Super Admin','type'=>'superadmin','vendor_id'=>0,'mobile'=>12345667,
            'email'=>'admin@admin.com','password'=>'$2y$10$zi3c3FZA63ZeYNENMBY9MO4Cut4w2kH/YrD3a1J8DBi0Ga7vyDRRS','image'=>'','status'=>1]
        ];

        Admin::insert($adminRecords);
    }
}
