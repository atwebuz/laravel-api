<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Value::create([
            "attribute_id" => 1,
            "name" => [
                "uz" => 'Qizil',
                "ru" => 'Krasniy',
            ]
        ]);

        Value::create([
            "attribute_id" => 1,
            "name" => [
                "uz" => 'Qora',
                "ru" => 'Cherniy',
            ]
        ]);

        Value::create([
            "attribute_id" => 1,
            "name" => [
                "uz" => 'jigarrang',
                "ru" => 'Karichnovit',
            ]
        ]);


        Value::create([
            "attribute_id" => 2,
            "name" => [
                "uz" => 'MDF',
                "ru" => 'MDP',
            ]
        ]);

        Value::create([
            "attribute_id" => 2,
            "name" => [
                "uz" => 'LDSP',
                "ru" => 'LDS',
            ]
        ]);
    }
}
