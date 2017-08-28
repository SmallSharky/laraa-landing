<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\MenuLink;
use App\MenuItem;
use App\User;
use Illuminate\Support\Facades\Auth;


class Menu extends Model
{
    //
    protected $table = 'menu';
    protected $fillable = ['name', 'who_can_see', 'text'];

    public function getJSON()
    {
        $userCanSee =
            (Auth::user()->hasAccess($this->who_can_see)) ||
            (env('APP_DEBUG', 'false') == 'true');
        if (!($userCanSee)) {
            return "";
        }

        $ret = $this->getAssoc();

        return json_encode($ret);
    }

    public function getAssoc(){
        $userCanSee =
            (Auth::user()->hasAccess($this->who_can_see)) ||
            (env('APP_DEBUG', 'false') == 'true');
        if (!($userCanSee)) {
            return [];
        }

        $ret['name'] = $this->name;
        $i = 0;
        $links = MenuLink::where('menu_id', '=', $this->id);
        foreach ($links as $link) {
            $item = MenuItem::where('id', '=', $link->item_id)->first();
            if (isset($item)) {
                $userCanSee =
                    (Auth::user()->hasAccess($item->who_can_see)) ||
                    (env('APP_DEBUG', 'false') == 'true');
                if ($userCanSee) {
                    $ret_item['text'] = ($link->text != 'none') ? ($link->text) : ($item->text);
                    $ret_item['ref'] = $item->ref;
                    if ($item->submenu_id != 0) {
                        $ret_item['submenu'] = Menu::where('id', '=', $item->submenu_id)->first()->getAssoc();
                    }
                    ($ret['items'])[$i] = $ret_item;
                    unset($ret_item);
                    $i++;
                }
            }
        }
        return $ret;
    }

}
