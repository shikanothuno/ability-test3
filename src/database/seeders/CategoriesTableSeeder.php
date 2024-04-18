<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->insert(
            [
                "content" => "商品のお届けについて"
            ]);

        DB::table("categories")->insert(
            [
                "content" => "商品の交換について"
            ]);

        DB::table("categories")->insert(
            [
                "content" => "商品トラブル"
            ]);
        DB::table("categories")->insert(
            [
                "content" => "ショップへのお問合せ"
            ]);

        DB::table("categories")->insert(
            [
                "content" => "その他"
            ]);


    }
}
