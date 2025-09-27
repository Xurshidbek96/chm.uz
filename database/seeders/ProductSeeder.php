<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();
        
        if ($categories->isEmpty()) {
            $this->command->warn('No categories found. Please run CategorySeeder first.');
            return;
        }

        $products = [
            [
                'name_uz' => 'iPhone 15 Pro',
                'name_en' => 'iPhone 15 Pro',
                'short_description_uz' => 'Eng yangi iPhone modeli',
                'short_description_en' => 'Latest iPhone model',
                'description_uz' => 'Apple kompaniyasining eng yangi va eng kuchli smartfoni. A17 Pro chip, titanium korpus va professional kamera tizimi bilan.',
                'description_en' => 'Apple\'s newest and most powerful smartphone. Features A17 Pro chip, titanium body, and professional camera system.',
                'model' => 'A3108',
                'price_usd' => 999.00,
                'price_uzs' => 12000000.00,
                'stock_quantity' => 50,
                'is_featured' => true,
                'status' => 'active',
                'specifications' => json_encode([
                    'Display' => '6.1-inch Super Retina XDR',
                    'Chip' => 'A17 Pro',
                    'Storage' => '128GB',
                    'Camera' => '48MP Main, 12MP Ultra Wide, 12MP Telephoto',
                    'Battery' => 'Up to 23 hours video playback'
                ]),
                'images' => json_encode([
                    'iphone15pro_1.jpg',
                    'iphone15pro_2.jpg',
                    'iphone15pro_3.jpg'
                ]),
                'weight' => 187.00,
                'dimensions' => '146.6 x 70.6 x 8.25 mm',
            ],
            [
                'name_uz' => 'Samsung Galaxy S24',
                'name_en' => 'Samsung Galaxy S24',
                'short_description_uz' => 'Samsung\'ning flagman smartfoni',
                'short_description_en' => 'Samsung\'s flagship smartphone',
                'description_uz' => 'Samsung Galaxy S24 - bu AI bilan boyitilgan kuchli smartfon. Snapdragon 8 Gen 3 processor va professional kamera bilan.',
                'description_en' => 'Samsung Galaxy S24 - a powerful AI-enhanced smartphone. Features Snapdragon 8 Gen 3 processor and professional camera.',
                'model' => 'SM-S921B',
                'price_usd' => 799.00,
                'price_uzs' => 9600000.00,
                'stock_quantity' => 30,
                'is_featured' => true,
                'status' => 'active',
                'specifications' => json_encode([
                    'Display' => '6.2-inch Dynamic AMOLED 2X',
                    'Processor' => 'Snapdragon 8 Gen 3',
                    'Storage' => '128GB',
                    'Camera' => '50MP Main, 12MP Ultra Wide, 10MP Telephoto',
                    'Battery' => '4000mAh'
                ]),
                'images' => json_encode([
                    'galaxy_s24_1.jpg',
                    'galaxy_s24_2.jpg'
                ]),
                'weight' => 167.00,
                'dimensions' => '147.0 x 70.6 x 7.6 mm',
            ],
            [
                'name_uz' => 'MacBook Air M3',
                'name_en' => 'MacBook Air M3',
                'short_description_uz' => 'Eng yengil va kuchli noutbuk',
                'short_description_en' => 'Lightest and most powerful laptop',
                'description_uz' => 'Apple MacBook Air M3 chip bilan - bu eng yengil va eng samarali noutbuk. 18 soatgacha batareya ishlash vaqti.',
                'description_en' => 'Apple MacBook Air with M3 chip - the lightest and most efficient laptop. Up to 18 hours of battery life.',
                'model' => 'MRXN3',
                'price_usd' => 1099.00,
                'price_uzs' => 13200000.00,
                'stock_quantity' => 25,
                'is_featured' => false,
                'status' => 'active',
                'specifications' => json_encode([
                    'Display' => '13.6-inch Liquid Retina',
                    'Chip' => 'Apple M3',
                    'Memory' => '8GB unified memory',
                    'Storage' => '256GB SSD',
                    'Battery' => 'Up to 18 hours'
                ]),
                'images' => json_encode([
                    'macbook_air_m3_1.jpg',
                    'macbook_air_m3_2.jpg',
                    'macbook_air_m3_3.jpg'
                ]),
                'weight' => 1240.00,
                'dimensions' => '304.1 x 215.0 x 11.3 mm',
            ],
        ];

        foreach ($products as $productData) {
            // Assign to first category (Electronics) or random category
            $category = $categories->where('name_en', 'Electronics')->first() ?? $categories->random();
            
            $productData['category_id'] = $category->id;
            $productData['slug'] = Str::slug($productData['name_en']);
            $productData['sku'] = 'SKU-' . strtoupper(Str::random(8));
            
            Product::create($productData);
        }

        // Create additional random products for other categories
        $otherCategories = $categories->where('name_en', '!=', 'Electronics');
        
        foreach ($otherCategories as $category) {
            for ($i = 1; $i <= 3; $i++) {
                Product::create([
                    'name_uz' => $category->name_uz . ' Mahsuloti ' . $i,
                    'name_en' => $category->name_en . ' Product ' . $i,
                    'slug' => Str::slug($category->name_en . '-product-' . $i),
                    'category_id' => $category->id,
                    'sku' => 'SKU-' . strtoupper(Str::random(8)),
                    'short_description_uz' => $category->name_uz . ' uchun ajoyib mahsulot',
                    'short_description_en' => 'Great product for ' . $category->name_en,
                    'description_uz' => 'Bu ' . $category->name_uz . ' kategoriyasidagi eng yaxshi mahsulotlardan biri.',
                    'description_en' => 'This is one of the best products in ' . $category->name_en . ' category.',
                    'price_usd' => rand(10, 500),
                    'price_uzs' => rand(120000, 6000000),
                    'stock_quantity' => rand(5, 100),
                    'is_featured' => rand(0, 1),
                    'status' => 'active',
                    'specifications' => json_encode([
                        'Material' => 'High Quality',
                        'Color' => 'Various',
                        'Size' => 'Standard'
                    ]),
                    'images' => json_encode([
                        'product_' . $i . '_1.jpg',
                        'product_' . $i . '_2.jpg'
                    ]),
                    'weight' => rand(100, 2000) / 100,
                    'dimensions' => rand(10, 50) . ' x ' . rand(10, 50) . ' x ' . rand(5, 20) . ' cm',
                ]);
            }
        }
    }
}