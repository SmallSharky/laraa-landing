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
        .text15 {
            font-size: 15pt;
        }

        .text12 {
            font-size: 12pt;
        }

        .centered-text {
            text-align: center;
        }

        .card-header {
            font: Roboto;
            font-size: 12pt;
            font-weight: thin;
        }

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

        div {

        }
    </style>
@endsection

@section('content')

    <div class="section light-blue accent-3">
        <div class="row container">
            <div class="header thin col s12 m12 l12 centered-text white-text">
                <span class="yellow-text">Up-Brella</span>
                - совершенная эволюция зонта
            </div>
            <div class="col s12 m7 l6">
                <img src="images/1.png">
            </div>
            <div class="col s12 m5 l6 bold">
                <div class="row valign-wrapper">
                    <i class="material-icons yellow-text">check</i>УДОБНАЯ РУКОЯТЬ С-ФОРМЫ
                </div>
                <div class="row valign-wrapper">
                    <i class="material-icons yellow-text">check</i>ДВОЙНОЙ КУПОЛ
                </div>
                <div class="row valign-wrapper">
                    <i class="material-icons yellow-text">check</i>НАДЕЖНЫЙ МЕХАНИЗМ
                </div>
                <div class="row valign-wrapper">
                    <i class="material-icons yellow-text">check</i>КАЧЕСТВЕННЫЕ МАТЕРИАЛЫ
                </div>
                <div class="row valign-wrapper">
                    <i class="material-icons yellow-text">check</i>ШИРОКИЙ ВЫБОР ЦВЕТОВ
                </div>
                <div class="row price valign-wrapper">
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

    <div class="section white">
        <div class="row container">
            <div class="header thin col s12 m12 l12 centered-text black-text">
                Преимущества
                <span class="blue-text">Up-Brella</span>
            </div>
            <div class="col s12 m12 l12 valign-wrapper">
                <div class="row">
                    <div class="col s12 m6 l4">
                        <div class="card-panel grey lighten-5 z-depth-1">
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <img src="images/2.jpg" alt="" class="circle responsive-img">
                                    <!-- notice the "circle" class -->
                                </div>
                                <div class="col s12 m12 l12">
                                    <h5 class="card-header blue-text">
                                        UP-BRELLA ВСЕГДА СУХОЙ
                                    </h5>
                                </div>
                                <div class="col s12 m12 l12">
                                    Зонт складывается мокрой стороной внутрь, поэтому с внешней стороны он всегда сухой
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card-panel grey lighten-5 z-depth-1">
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <img src="images/3.jpg" alt="" class="circle responsive-img">
                                    <!-- notice the "circle" class -->
                                </div>
                                <div class="col s12 m12 l12">
                                    <h5 class="card-header blue-text">
                                        ОСНАЩЁН УДОБНОЙ РУЧКОЙ
                                    </h5>
                                </div>
                                <div class="col s12 m12 l12">
                                    Специально сконструированная С-образная ручка освобождает ваши руки для более важных
                                    дел
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card-panel grey lighten-5 z-depth-1">
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <img src="images/4.jpg" alt="" class="circle responsive-img">
                                    <!-- notice the "circle" class -->
                                </div>
                                <div class="col s12 m12 l12">
                                    <h5 class="card-header blue-text">
                                        ШИРОКИЙ ВЫБОР ЦВЕТОВ
                                    </h5>
                                </div>
                                <div class="col s12 m12 l12">
                                    На нашем сайте вы сможете заказать любую расцветку, которая подчеркнет ваш стиль
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="section light-blue accent-3">
            <div class="row container">
                <div class="header thin col s12 m12 l12 centered-text white-text">
                    ВИДЕО ОБЗОР
                    <span class="yellow-text">UP-BRELLA</span>
                </div>
                <div class="col s12 m12 l12 centered-text text12 white-text">
                    <p>
                        Познакомьтесь с Up-Brella. Его главная фишка - особый механизм,
                        делающий раскрытие зонта максимально удобным. Благодаря особой конструкции,
                        зонт раскрывается в обратную сторону и не задевает окружающее пространство.
                        Но лучше один раз увидеть. Убедитесь в этом сами!
                    </p>

                </div>
                <div class="col s12 m12 l12">
                    <div class="video-container">
                        <iframe width="853" height="480" src="http://www.youtube.com/embed/udH_nBCrY7Y" frameborder="0"
                                allowfullscreen></iframe>
                    </div>
                </div>

            </div>

        </div>
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