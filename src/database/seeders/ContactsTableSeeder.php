<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("contacts")->insert(
            [
                "category_id" => 1,
                "first_name" => "山田",
                "last_name" => "太郎",
                "gender" => 1,
                "email" => "test@example.com",
                "tell" => "08012345678",
                "adress" => "東京都渋谷区千駄ヶ谷1-2-3",
                "building" => "千駄ヶ谷マンション101",
                "detail" => "届いた商品が注文した商品ではありませんでした。
                商品の取り換えをお願いします。"
            ]);
    }
}
