<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Client::truncate();

        $param = [
            'campany_name' => '株式会社testA',
            'manager' => '田中一郎',
            'phone_number' => '09011112222',
            'client_email' => 'test1aaa@example.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('clients')->insert($param);

        $param = [
            'campany_name' => '株式会社testB',
            'manager' => '鈴木次郎',
            'phone_number' => '09033334444',
            'client_email' => 'test2bbb@example.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('clients')->insert($param);
    }
}
