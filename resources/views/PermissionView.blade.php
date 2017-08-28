@extends('layouts.ConfigLayout')

@section('scripts')
    <script type="text/javascript" src="{{asset("js/RoleEdit.js")}}"></script>

@endsection

@section('content')
    <!-- TODO: AJAX - data in JSON format -->
    <!-- TODO: Сделать добавление роли -->
    <div class="col m8 l8 s12">
        <div class="row">
            <div id="status" class="col m12 s12 l12 red hidden hide"></div>
        </div>
        <table class="stripped highlight">
            <thead>
            <tr>

                <th class="col m1 l1 s1">
                    ID
                </th>
                <th class="col m3 l3 s3">
                    Название
                </th>
                <th class="col m4 l4 s4">
                    В коде
                </th>
                <th class="col m4 l4 s4">
                    Права
                </th>
            </tr>
            </thead>

            <tbody id="roles">


            @foreach($roles as $role)

                <tr>
                    <td class="col m1 l1 s1">
                        <?php
                        if (isset($role['id'])) {
                            echo $role['id'];
                        }
                        ?>
                    </td>
                    <td class="col m3 l3 s3">
                        <a href="/settings/roles/edit/{{$role['id']}}">
                            <?php
                            if (isset($role['name'])) {
                                echo $role['name'];
                            }
                            ?>
                        </a>
                    </td>
                    <td class="col m4 l4 s4">
                        <?php
                        if (isset($role['slug'])) {
                            echo $role['slug'];
                        }
                        ?>
                    </td>
                    <td class="col m4 l4 s4">

                        <?php
                        foreach (array_keys($role['permissions']) as $permission) {
                            if ($role['permissions'][$permission] == "true") {
                                echo $permission . "<br>";
                            }
                        }

                        ?>


                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
        <p>
        <a class="btn-floating btn waves-effect waves-light blue right modal-trigger" href="#addRoleModal"><i
                    class="material-icons">add</i></a>
        </p>

    </div>

    <div id="addRoleModal" class="modal">
        <div class="modal-content row">
            <h4>Добавление роли</h4>
            <form>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="newRoleName" type="text" class="validate">
                        <label for="newRoleName">Название роли</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <input id="newRoleSlug" type="text" class="validate">
                        <label for="newRoleSlug">В коде</label>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer row">
            <div class="col  left">
                <div class="modal-action modal-close waves-effect waves-green btn-flat" id="addNewRole">Добавить</div>
                <div class="modal-action modal-close waves-effect red lighten-3 waves-yellow btn-flat">Отмена</div>
            </div>

        </div>
    </div>

@endsection

@section('header')
    Права пользователей

@endsection
