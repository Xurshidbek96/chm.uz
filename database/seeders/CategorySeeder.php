<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name_uz' => 'Elektronika',
                'name_en' => 'Electronics',
                'description_uz' => 'Elektronika mahsulotlari',
                'description_en' => 'Electronic products',
                'status' => 'active',
                'sort_order' => 1,
            ],
            [
                'name_uz' => 'Kiyim-kechak',
                'name_en' => 'Clothing',
                'description_uz' => 'Kiyim-kechak mahsulotlari',
                'description_en' => 'Clothing products',
                'status' => 'active',
                'sort_order' => 2,
            ],
            [
                'name_uz' => 'Uy-ro\'zg\'or buyumlari',
                'name_en' => 'Home & Garden',
                'description_uz' => 'Uy va bog\' uchun buyumlar',
                'description_en' => 'Home and garden items',
                'status' => 'active',
                'sort_order' => 3,
            ],
            [
                'name_uz' => 'Sport va faollik',
                'name_en' => 'Sports & Recreation',
                'description_uz' => 'Sport va faollik mahsulotlari',
                'description_en' => 'Sports and recreation products',
                'status' => 'active',
                'sort_order' => 4,
            ],
            [
                'name_uz' => 'Kitoblar',
                'name_en' => 'Books',
                'description_uz' => 'Turli xil kitoblar',
                'description_en' => 'Various books',
                'status' => 'active',
                'sort_order' => 5,
            ],
        ];

        foreach ($categories as $category) {
            $category['slug'] = Str::slug($category['name_en']);
            Category::create($category);
        }
    }
}