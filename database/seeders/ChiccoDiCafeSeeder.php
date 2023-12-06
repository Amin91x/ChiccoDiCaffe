<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\MenuItem;

class ChiccoDiCafeSeeder extends Seeder
{
    public function run()
    {
        // Seed categories
        $categories = [
            'BREAKFAST',
            'LUNCH',
            'COFFEE',
            'SANDWICHES',
            // Add more categories as needed
        ];

        foreach ($categories as $categoryName) {
            $category = Category::firstOrCreate([
                'name' => $categoryName,
            ]);
        }

        // Seed menu items
        $menuItems = [
            [
                'category' => 'BREAKFAST',
                'name' => 'Classic Omelette',
                'description' => 'Fluffy omelette with your choice of fillings, served with toast.',
                'price' => 10.00,
            ],
            [
                'category' => 'BREAKFAST',
                'name' => 'Vegetarian Delight',
                'description' => 'A garden-fresh omelette filled with bell peppers, onions, tomatoes, and cheese.',
                'price' => 12.00,
            ],
            [
                'category' => 'LUNCH',
                'name' => 'Spaghetti Carbonara',
                'description' => 'Spaghetti with creamy egg sauce, bacon, and Parmesan cheese.',
                'price' => 18.00,
            ],
            [
                'category' => 'COFFEE',
                'name' => 'Latte',
                'description' => 'Espresso with steamed milk and a light layer of milk foam.',
                'price' => 5.00,
            ],
            [
                'category' => 'COFFEE',
                'name' => 'Caramel Macchiato',
                'description' => 'Espresso with vanilla syrup, steamed milk, and caramel drizzle.',
                'price' => 6.50,
            ],
            [
                'category' => 'SANDWICHES',
                'name' => 'Chicken Club Wrap',
                'description' => 'Grilled chicken, bacon, lettuce, tomato, and ranch dressing in a wrap.',
                'price' => 11.00,
            ],
            [
                'category' => 'SANDWICHES',
                'name' => 'Caprese Panini',
                'description' => 'Fresh mozzarella, sliced tomatoes, basil, and balsamic glaze on a warm panini.',
                'price' => 13.00,
            ],
            [
                'category' => 'LUNCH',
                'name' => 'Chicken Alfredo',
                'description' => 'Grilled chicken with fettuccine pasta in a creamy Alfredo sauce.',
                'price' => 22.00,
            ],
            [
                'category' => 'BREAKFAST',
                'name' => 'Mushroom Medley Omelette',
                'description' => 'A delectable omelette bursting with sautéed mushrooms and Swiss cheese.',
                'price' => 14.00,
            ],
            [
                'category' => 'COFFEE',
                'name' => 'Iced Coffee',
                'description' => 'Chilled coffee with ice, served with your choice of sweeteners and milk.',
                'price' => 8.00,
            ],
            // Add more menu items...
        ];

        foreach ($menuItems as $menuItemData) {
            $category = Category::where('name', $menuItemData['category'])->first();

            MenuItem::create([
                'category_id' => $category->id,
                'name' => $menuItemData['name'],
                'description' => $menuItemData['description'],
                'price' => $menuItemData['price'],
            ]);
        }
    }
}
