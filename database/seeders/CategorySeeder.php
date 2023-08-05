<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => [
                'uz' => 'Stol',
                'ru' => 'Ctol',
            ]
        ]);

        Category::create([
            'name' => [
                'uz' => 'Divan',
                'ru' => 'Devan',
            ]
        ]);

        Category::create([
            'name' => [
                'uz' => 'Kreslo',
                'ru' => 'Kresla',
            ]
        ]);

        Category::create([
            'name' => [
                'uz' => 'Yotoq',
                'ru' => 'Kravat',
            ]
        ]);
        Category::create([
            'name' => [
                'uz' => 'Stul',
                'ru' => 'Ctul',
            ]
        ]);
    }
}
