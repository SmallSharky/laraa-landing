<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuLink extends Model
{
    //
    protected $table = 'menu_links';
    protected $fillable = ['menu_id', 'item_id', 'text'];

}
