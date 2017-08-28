<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;
use Illuminate\Support\Facades\Mail;

class PermissionController extends Controller
{


    public function index()
    {
        if (Auth::guest()) {
            // @TODO: Написать проверку прав на показ страницы
            abort(403);
        } else {
            //Role::create(['name' => 'Admin', 'slug' => 'admin', 'permissions' => ['change_privileges' => true,]]);
            $roles = Role::all(["name", "slug", "permissions", "id"]);
            //return var_dump($res);
            return view("PermissionView", compact('roles'));
        }
    }

    public function make()
    {
        //TODO: Сделать инициализацию без костылей
        /*Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'permissions' => [
                'assign_role' => true,
                'manage_role' => true,
                'create_role' => true,
            ],
        ]);*/
        abort(403);
    }

    public function edit(int $id)
    {
        if (Auth::guest()) {
            // @TODO: Написать проверку прав на показ страницы
            abort(403);
        } else {
            //TODO: получение и обработка POST-запроса.
            $role = Role::find($id);
            return view("RoleEditView", compact(['role']));
        }
    }

    public function update(int $id)
    {
        if (Auth::guest()) {
            // @TODO: Написать проверку прав на показ страницы
            abort(403);
        } else {
            $is_ok = true;
            $req = Input::all();
            if (isset($req['perms'])) {
                $perms = $req['perms'];

                foreach (array_keys($perms) as $key) {
                    $valid = Validator::make(
                        array(
                            "key" => $key,
                            "val" => $perms[$key]
                        ),
                        array(
                            "key" => "required|min:5|alpha_dash",
                            "val" => "required|in:0,1,true,false"
                        )
                    );
                    if ($valid->fails()) {
                        $is_ok = false;
                        break;
                    }
                }
                if ($is_ok) {
                    $role = Role::find($id);
                    $role->permissions = $perms;
                    $role->save();
                }

                //alpha_dash boolean
                //min:val
                //unique
            } else {
                $is_ok = false;
            }
            if (isset($role)) unset($role);
            $role = Role::find($id);
            $response['status'] = ($is_ok) ? "Данные прошли валидацию, права изменены" : "Произошла ошибка";
            $response['permissions'] = $role->permissions;

            $mailText = "Изменены права для роли \"" . $role->name . "\"\n";
            $mailText .= "Новые права:\n";

            $mailText .= json_encode($role->permissions);
            $mailText .= "\n";

            Mail::raw($mailText, function ($message) {
                //$message->
                $message->to(env("ADMIN_EMAIL", "admin@tbred.ru"))->subject("Изменение настроек");
            });
            return (json_encode($response));
        }

    }

    public function create()
    {
        if (Auth::guest()) {
            // @TODO: Написать проверку прав на показ страницы
            abort(403);
        } else {
            //TODO: Написать код для создания роли
            $is_ok = true;
            $req = Input::all();
            $role = false;
            if (isset($req['name']) && isset($req['slug'])) {
                //TODO: Выполнение валидации на уникальность
                $valid = Validator::make(
                    array(
                        "name" => $req['name'],
                        "slug" => $req['slug'],
                    ),
                    array(
                        "name" => "required|min:5|alpha_dash",
                        "slug" => "required|min:5|alpha_dash",
                    )
                );
                if ($valid->fails()) {
                    $is_ok = false;
                }
                if ($is_ok) {
                    try {
                        if(isset($role)){
                            unset($role);
                        }
                        $role = Role::create([
                            'name' => $req['name'],
                            'slug' => $req['slug'],
                            'permissions' => [],
                        ]);
                    } catch (exception $e) {
                        $is_ok = false;
                    }
                }

            } else {
                $is_ok = false;
            }

            $response['status'] = ($is_ok) ? "Данные прошли валидацию, роль создана" : "Произошла ошибка";
            $response['id'] = $role['id'];
            $response['name'] = $role['name'];
            $response['slug'] = $role['slug'];
            $response['perm'] = $role['permissions'];
            return ($response);
        }
    }

    public function assign(){
        //$users = User::all();
        if (Auth::guest()) {
            // @TODO: Написать проверку прав на показ страницы
            abort(403);
        } else {
            //Role::create(['name' => 'Admin', 'slug' => 'admin', 'permissions' => ['change_privileges' => true,]]);
            $users = User::all();
            //return var_dump($res);
            return view("RoleAssignView", compact('users'));
        }
    }

}
