<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Laptop Dell XPS 13',
                'description' => 'Laptop cao cấp dành cho doanh nhân.',
                'price' => 2500,
                'image' => '1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MacBook Pro M2',
                'description' => 'Máy tính xách tay của Apple với chip M2.',
                'price' => 3000,
                'image' => '2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bàn phím cơ Keychron K8',
                'description' => 'Bàn phím cơ không dây, switch Gateron.',
                'price' => 120,
                'image' => '3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    }

