@extends('layouts.ConfigLayout')

@section('scripts')
    <script type="text/javascript" src="{{asset("js/RoleEdit.js")}}"></script>

@endsection

@section('content')
    <div class="row">
        <div id="status" class="col m12 s12 l12 red hidden hide"></div>
    </div>
    <div class="row">
        <div class="col">ID роли:</div>
        <div id="roleID" class="col">{{$role['id']}}</div>
    </div>
    <div class="row">
        <div class="col">Название роли: {{ $role['name'] }}</div>
    </div>
    <div class="row">
        <div class="col">Название в коде: {{ $role['slug'] }}</div>
    </div>
    <div class="row">

        <div class="col m6 l6 s12">
            <div class="row blue lighten-5 black-text">Права</div>
            <table class="stripped highlight">
                <thead>
                <tr>
                    <th class="col m10 l10 s10">Название</th>
                    <th class="col m2 l2 s2">
                        on/off
                    </th>
                </tr>
                </thead>

                <tbody id="permissions">

                <form action="#">
                    @foreach(array_keys($role['permissions']) as $permission)
                        <?php
                        $checked = ($role['permissions'][$permission]=="true") ? "checked" : "";
                        ?>

                        <tr>
                            <td class="col m10 l10 s10">{{$permission}}</td>
                            <td class="col m2 l2 s2">
                                <input type="checkbox" {{$checked}} class="permission" id="{{$permission}}"/>
                                <label for="{{$permission}}"></label>
                            </td>
                        </tr>

                    @endforeach
                </form>
                </tbody>
            </table>
        </div>

    </div>
    <div class="row">
        <a class="btn red lighten-2 btn modal-trigger waves-effect waves-light" href="#addPermissionModal"
           id="addPermission">Добавить</a>
        <a class="btn blue lighten-2 waves-effect waves-light"
           id="sendPerms">Сохранить</a>
    </div>



    <!-- Modal Structure -->
    <div id="addPermissionModal" class="modal">
        <div class="modal-content row">
            <h4>Добавление права</h4>
            <form>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="newPermissionName" type="text" class="validate">
                        <label for="newPermissionName">Название права</label>
                    </div>
                    <div class="col s6">
                        <input type="checkbox"  checked id="newPermissionVal">
                        <label for="newPermissionVal">Вкл/выкл</label>
                    </div>
                </div>
            </form>

        </div>
        <div class="modal-footer row">
            <div class="col  left">
                <div class="modal-action modal-close waves-effect waves-green btn-flat" id="addNewPerm">Добавить</div>
                <div class="modal-action modal-close waves-effect red lighten-3 waves-yellow btn-flat">Отмена</div>
            </div>

        </div>
    </div>

@endsection

@section('header')
    Редактирование роли
@endsection