<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                \App\Models\SubCategory::factory(10)->create();
                    DB::table('sub_categories')->insert([
                        'name' => Str::random(10),
                    ]);
    }
}
