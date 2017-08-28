<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    //
    protected $table = 'menu_items';
    protected $fillable = ['ref', 'who_can_see', 'name', 'submenu_id', 'text'];
}
