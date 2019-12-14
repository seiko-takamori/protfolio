<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    public function run()
    {
        $param = [
            'name' => 'taro',
            'mail' => 'taro@yamada.jp',
            'gender'=> 'ma',
            'type'=> 0,
            'body'=>'aaaaaaa',
            
            ];
            
        DB::table('contacts')->insert($param);    
    }
}
