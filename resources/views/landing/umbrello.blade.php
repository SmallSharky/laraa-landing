@extends('layouts.landing')

@section('scripts')
    <script>
        $(document).ready(function () {
            $('.parallax').parallax();
        });
    </script>
@endsection

@section('styles')
    <style>
        .header {
            font: Roboto;
            font-size: 25pt;
            font-weight: bold;
        }
        .price {
            text-align: center;
        }

        .price .new {
            background-color: yellow;
            border-radius: 0 10px 10px 0;
        }

        .price .new .value {
            font: Roboto;
            font-size: 20pt;
            font-weight: bold;
        }

        .price .old {
            background-color: white;
            border-radius: 10px 0 0 10px;
        }

        .price .old .value {

            font: Roboto;
            font-size: 20pt;
            font-family: thin;
            text-decoration: line-through;

        }

        .btn-buy {
            font: Roboto;
            font-size: 20pt;
            font-weight: bold;
            border-radius: 10px;
        }
        div{

        }
    </style>
@endsection

@section('content')

    <div class="section light-blue accent-3">
        <div class="row container">
            <div class="header thin col s12 m12 l12"><span class="yellow-text">Up-Brella</span> - совершенная эволюция зонта
            </div>
            <div class="col s12 m7 l6">
                <img src="images/1.png">
            </div>
            <div class="col s12 m5 l6 bold">
                <div class="row">
                    <i class="material-icons yellow-text">check</i>УДОБНАЯ РУКОЯТЬ С-ФОРМЫ
                </div>
                <div class="row">
                    <i class="material-icons yellow-text">check</i>ДВОЙНОЙ КУПОЛ
                </div>
                <div class="row">
                    <i class="material-icons yellow-text">check</i>НАДЕЖНЫЙ МЕХАНИЗМ
                </div>
                <div class="row">
                    <i class="material-icons yellow-text">check</i>КАЧЕСТВЕННЫЕ МАТЕРИАЛЫ
                </div>
                <div class="row">
                    <i class="material-icons yellow-text">check</i>ШИРОКИЙ ВЫБОР ЦВЕТОВ
                </div>
                <div class="row price">
                    <div class="col m6 s6 old">
                        Старая цена
                        <div class="value">
                            1500 р.
                        </div>
                    </div>
                    <div class="col m6 s6 l6 new">
                        Новая цена
                        <div class="value">
                            1500 р.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="btn orange col m12 l12 s12 waves-effect waves-light btn-buy">ЗАКАЗАТЬ</div>
                </div>

            </div>
        </div>

    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="images/2.jpg"></div>
    </div>
    <!--
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
    -->

@endsection