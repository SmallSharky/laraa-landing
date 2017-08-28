@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row center">
            <div class="col m12 l12 s12 center">


                <!--<img class="responsive-img" style="width: 250px;" src="https://i.imgur.com/ax0NCsK.gif" />-->
                <div class="section center"></div>

                <h5 class="indigo-text center">Заходите, не стесняйтесь!</h5>
                <div class="section center"></div>

                <div class="container center">
                    <div class="z-depth-1 grey lighten-4 row"
                         style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

                        <form class="col s12" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class='row'>
                                <div class='col s12'>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input class='validate' type='email' name='email' id='email' autofocus required/>
                                    <label for='email'>Электронная почта</label>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input class='validate' type='password' name='password' id='password' required/>
                                    <label for='password'>Пароль</label>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span class="lever"></span>
                                        Запомнить меня
                                    </label>
                                </div>
                            </div>

                            <br/>
                            <div class="center">
                                <div class='row'>
                                    <button type='submit' name='btn_login'
                                            class='col s12 btn btn-large waves-effect indigo'>Войти
                                    </button>
                                </div>
                            </div>
                        </form>
                        <label class='center'>
                            <a class='pink-text' href="{{ route('password.request') }}"><b>Забыли пароль?</b></a>
                        </label>

                    </div>
                </div>
                <a href="{{ route('register') }}">Регистрация</a>

            </div>
        </div>
    </div>
@endsection
