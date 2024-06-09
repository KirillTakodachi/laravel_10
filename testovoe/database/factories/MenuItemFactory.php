<?php

namespace Database\Factories;

use App\Models\MenuItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuItemFactory extends Factory{

    protected $model = MenuItem::class;

    public function definition()
    {
        $menuItemsData = [
            ['title' => 'Все туры', 'url' => '/tours', 'order' => 1],
            ['title' => 'Отзывы', 'url' => '/reviews', 'order' => 2],
            ['title' => 'Контакты', 'url' => '/contacts', 'order' => 3],
        ];

        $menuItemData = $this->faker->randomElement($menuItemsData);

        return [
            'title' => $menuItemData['title'],
            'url' => $menuItemData['url'],
            'order' => $menuItemData['order'],
        ];
    }
}
