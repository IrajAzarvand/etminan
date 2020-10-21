<?php

use App\Models\MainMenu;

function MenuPicker()
{
    //get menus of user
    return MainMenu::with('sub_menus')->get();

}
