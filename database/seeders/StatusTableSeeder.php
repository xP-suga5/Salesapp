<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate(トランケート）メソッド:テーブル内のデータを一括削除する
        \App\Models\Status::truncate();

        $param = [
            'name' => 'リード顧客',
        ];
        DB::table('statuses')->insert($param);
        $param = [
            'name' => 'メール送信済',
        ];
        DB::table('statuses')->insert($param);
        $param = [
            'name' => '日程調整済',
        ];
        DB::table('statuses')->insert($param);
        $param = [
            'name' => '商談済',
        ];
        DB::table('statuses')->insert($param);
        $param = [
            'name' => '契約済',
        ];
        DB::table('statuses')->insert($param);
    }
}
