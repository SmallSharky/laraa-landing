@extends('layouts.landing')

@section('content')
    <form method="POST" action="{{action('UmbrelloController@store')}}" enctype="multipart/form-data">
        <div class="row">
            <div class="input-field col l6 m6 s12">
                <input id="fio" type="text" class="validate" name="fio">
                <label for="fio">Фамилия, имя</label>
            </div>
            <div class="input-field col l6 m6 s12">
                <input id="email" type="email" class="validate" name="email">
                <label for="email">Электронная почта</label>
            </div>
            <button class="btn waves-effect waves-light blue" type="submit">
                <i class="material-icons right">send</i>
                Отправить
            </button>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
        </div>

    </form>

@endsection