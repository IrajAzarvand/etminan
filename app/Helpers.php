<?php
function MenuPicker()
{
    //get menus of user
    return main_menus()->with('sub_menus')->get();

}
