@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        You are logged in!
                        <br>
                        <?php
                        $is_users_empty = false;
                        if (is_array($users)) {
                            $user = $users[0];
                        } else {
                            $is_users_empty = true;
                        }
                        if (!$is_users_empty) {
                            if (isset($user->name)) {
                                echo($user->name);
                            }
                        }
                        ?>
                        <br>
                        <div id="userinfo" class="uInfTab"></div>
                        <br>
                        <div id="userinfojson"></div>
                        <br>
                        <script src="{{asset('js/ajax_crud.js')}}"></script>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
