<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin =[
           'name'=>'Admin',
           'email'=>'admin@gmail.com',
           'mobile_no'=> 919723829974

       ];
       Admin::create($admin);
    }
}
