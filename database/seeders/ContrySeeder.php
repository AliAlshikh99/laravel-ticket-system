<?php

namespace Database\Seeders;

use App\Models\contry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            ['name' => 'سوريا'],
            ['name' => 'فلسطين '],
            ['name' => 'لبنان'],
            ['name' => 'العراق'],
            ['name' => 'تركيا'],
        ];
        foreach ($countries as $key => $value) {
            contry::create($value);
            }
    }
}
