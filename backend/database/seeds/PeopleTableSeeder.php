<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    public function run()
    {
        $param = [
            'name' => 'taro',
            'mail' => 'taro@yamada.jp',
            'age' => '12'
        ];
        DB::table('hoge')->insert($param);

        $param = [
            'name' => 'hanako',
            'mail' => 'hanako@flower.jp',
            'age' => '34'
        ];
        DB::table('hoge')->insert($param);

        $param = [
            'name' => 'sachiko',
            'mail' => 'sachiko@happy.jp',
            'age' => '56'
        ];
        DB::table('hoge')->insert($param);

        $param = [
            'name' => 'jinguzi',
            'mail' => 'jinguzi@sinjuku.jp',
            'age' => '27'
        ];
        DB::table('hoge')->insert($param);
    }
}
