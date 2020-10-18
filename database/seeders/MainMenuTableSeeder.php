<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $MainMenus=[
          'تنظیمات'=>'fa fa-gears',

        ];

        foreach ($MainMenus as $mainMenu=>$icon){
            DB::table('main_menus')->insert([
                'MainMenu'=>$mainMenu,
                'Icon'=>$icon,
            ]);
        }
    }
}
