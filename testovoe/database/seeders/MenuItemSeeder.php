<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuItemSeeder extends Seeder{
    /**
     * Run the database seeds.
     */

    public function run(){
        MenuItem::factory(0)->create();

        $menuItemsData = [
            ['title' => 'Все туры', 'url' => '/tours', 'order' => 1],
            ['title' => 'Отзывы', 'url' => '/reviews', 'order' => 2],
            ['title' => 'Контакты', 'url' => '/contacts', 'order' => 3],
        ];

        foreach ($menuItemsData as $menuItem) {
            MenuItem::create($menuItem);
        }
    }
}
