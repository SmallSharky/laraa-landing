<?php

use Illuminate\Database\Seeder;
use App\Menu;
use App\MenuItem;
use App\MenuLink;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $MM = Menu::create(['name' => 'MainMenu', 'text' => 'Главное меню']);
        $MMItem = MenuItem::create(['name' => 'main_page', 'text' => 'Главная страница', 'ref' => '/']);
        MenuLink::create(['menu_id' => $MM->id, 'item_id' => $MMItem->id, 'text'=>'Главная']);

    }


}
