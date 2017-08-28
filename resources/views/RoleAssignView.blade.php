@extends('layouts.ConfigLayout')

@section('scripts')
    <script type="text/javascript" src="{{asset("js/RoleEdit.js")}}"></script>
@endsection

@section('content')

    <div class="row">

        <div class="col m6 l6 s12">
            <div class="row blue lighten-5 black-text">Пользователи</div>
            <table class="stripped highlight">
                <thead>
                <tr>
                    <th class="col m2 l2 s2">ID</th>
                    <th class="col m4 l4 s4">email</th>
                    <th class="col m4 l4 s4">роли</th>
                </tr>
                </thead>

                <tbody id="users">
                @foreach($users as $user)
                    <tr>

                        <td class="col m2 l2 s2">{{$user['id']}}</td>
                        <td class="col m4 l4 s4">{{$user['email']}}</td>
                        <td class="col m4 l4 s4">
                            @foreach($user['roles'] as $role)
                                {{$role['name']}}<br>
                            @endforeach
                            <a class="modal-trigger waves-effect waves-light fillSlugs" id="{{$user['id']}}" href="#assignRolesModal">
                                <i class="material-icons purple-text">add</i>
                            </a>
                        </td>


                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>

    <!-- Modal Structure -->
    <div id="assignRolesModal" class="modal modal-fixed-footer col s12 m6 l4">

        <div class="input-field col s12 center" id="RoleForm">
            <select id="RoleList">
                <option value="" disabled selected>Выберите роль</option>
            </select>
            <label>Добавление роли</label>
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
    Назначение пользовательских групп
@endsection