@extends('layouts.landing')

@section('scripts')
    <script>
        $(document).ready(function () {
            $('.parallax').parallax();
        });
        $(document).ready(function () {
            // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
            $('.modal').modal();
            $('#clock').
        });


    </script>
@endsection

@section('styles')
    <style>
        form {
            padding: 20px;
        }

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
            font-size: 15pt;
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
            <div class="col s12 m5 l6">
                <div class="row valign-wrapper white-text" style="font-weight: bold;">
                    <i class="material-icons yellow-text">check</i>УДОБНАЯ РУКОЯТЬ С-ФОРМЫ
                </div>
                <div class="row valign-wrapper white-text" style="font-weight: bold;">
                    <i class="material-icons yellow-text">check</i>ДВОЙНОЙ КУПОЛ
                </div>
                <div class="row valign-wrapper white-text" style="font-weight: bold;">
                    <i class="material-icons yellow-text">check</i>НАДЕЖНЫЙ МЕХАНИЗМ
                </div>
                <div class="row valign-wrapper white-text" style="font-weight: bold;">
                    <i class="material-icons yellow-text">check</i>КАЧЕСТВЕННЫЕ МАТЕРИАЛЫ
                </div>
                <div class="row valign-wrapper white-text" style="font-weight: bold;">
                    <i class="material-icons yellow-text">check</i>ШИРОКИЙ ВЫБОР ЦВЕТОВ
                </div>
                <div class="row price valign-wrapper">
                    <div class="col m6 s6 old">
                        Старая цена
                        <div class="value">
                            {{round(($globals['price']*100)/(100-$globals['sale']))}} р.
                        </div>
                    </div>
                    <div class="col m6 s6 l6 new">
                        Новая цена
                        <div class="value">
                            {{$globals['price']}} р.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <a class="btn orange col m12 l12 s12 waves-effect waves-light btn-buy white-text modal-trigger"
                       href="#OrderModal">
                        ЗАКАЗАТЬ
                    </a>
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
                            <div class="row centered-text">
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
                            <div class="row centered-text">
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
                            <div class="row centered-text">
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

    <div class="section white">
        <div class="row container">
            <div class="header thin col s12 m12 l12 centered-text black-text">
                ХАРАКТЕРИСТИКИ ЗОНТА
                <span class="blue-text">UP-BRELLA</span>
            </div>

            <div class="col s12 m12 l7 ">
                <div class="row">
                    <div class="col s12 m12 l12">

                        <div class="row centered-text">
                            <div class="col s12 m12 l12">
                                <img src="images/5.jpg" alt="" class="responsive-img">
                                <!-- notice the "circle" class -->
                            </div>
                            <div class="col s12 m12 l12">
                                <div class="row valign-wrapper text15">
                                    <i class="material-icons blue-text tiny">fiber_manual_record</i>
                                    <span class="blue-text" style="padding-right: 10px;">
                                        Тип механизма:
                                        </span>
                                    полуавтомат (автооткрытие)
                                </div>
                                <div class="row valign-wrapper text15">
                                    <i class="material-icons blue-text tiny">fiber_manual_record</i>
                                    <span class="blue-text" style="padding-right: 10px;">
                                        Материал:
                                        </span>
                                    эпонж, стекловолокно, пластик
                                </div>
                                <div class="row valign-wrapper text15">
                                    <i class="material-icons blue-text tiny">fiber_manual_record</i>
                                    <span class="blue-text" style="padding-right: 10px;">
                                        Диаметр купола:
                                        </span>
                                    106 см
                                </div>
                                <div class="row valign-wrapper text15">
                                    <i class="material-icons blue-text tiny">fiber_manual_record</i>
                                    <span class="blue-text" style="padding-right: 10px;">
                                        Длина в сложеном виде:
                                        </span>
                                    81 см
                                </div>
                                <div class="row valign-wrapper text15">
                                    <i class="material-icons blue-text tiny">fiber_manual_record</i>
                                    <span class="blue-text" style="padding-right: 10px;">
                                        Вес зонта:
                                        </span>
                                    520г
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col s12 m12 l5">
                <div class="row ">
                    <div class="col s12 m12 l12 valign-wrapper">
                        <div class="row">
                            <div class="col s4 m4 l4">
                                <img src="images/6.jpg" alt="" class="circle responsive-img">
                                <!-- notice the "circle" class -->
                            </div>
                            <div class="col s8 m8 l8">
                                <h5 class="card-header blue-text">
                                    ДВОЙНОЙ КУПОЛ
                                </h5>
                                Повышает надежность зонта и не позволяет ему закрываться при резких порывах ветра
                            </div>

                        </div>
                    </div>
                    <div class="col s12 m12 l12 valign-wrapper">
                        <div class="row">
                            <div class="col s4 m4 l4">
                                <img src="images/7.jpg" alt="" class="circle responsive-img">
                                <!-- notice the "circle" class -->
                            </div>
                            <div class="col s8 m8 l8">
                                <h5 class="card-header blue-text">
                                    ВОДООТТАЛКИВАЮЩИЙ ЭПОНЖ
                                </h5>
                                Дождевые капли скатываются с купола зонта, оставляя его практически сухим
                            </div>

                        </div>
                    </div>
                    <div class="col s12 m12 l12 valign-wrapper">
                        <div class="row">
                            <div class="col s4 m4 l4">
                                <img src="images/8.jpg" alt="" class="circle responsive-img">
                                <!-- notice the "circle" class -->
                            </div>
                            <div class="col s8 m8 l8">
                                <h5 class="card-header blue-text">
                                    СПИЦЫ ИЗ СТЕКЛОВОЛОКНА
                                </h5>
                                Этот материал отличается высокой прочностью и вместе с тем большой долговечностью и
                                упругостью
                            </div>

                        </div>
                    </div>
                    <div class="col s12 m12 l12 valign-wrapper">
                        <div class="row">
                            <div class="col s4 m4 l4">
                                <img src="images/9.jpg" alt="" class="circle responsive-img">
                                <!-- notice the "circle" class -->
                            </div>
                            <div class="col s8 m8 l8">
                                <h5 class="card-header blue-text">
                                    HANDS-FREE РУКОЯТЬ
                                </h5>
                                Особая форма рукояти позволит вам освободить руки для телефона, кофе или просто удобно
                                удерживать зонт на предплечие
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="section light-blue accent-3" style="background-image: url(/images/bg_gift.jpg);">
        <div class="row container">
            <div class="header thin col s12 m12 l12 centered-text white-text">
                <span class="yellow-text">UP-BRELLA</span>
                - ОТЛИЧНЫЙ ПОДАРОК!
            </div>
            <div class="col s12 m12 l8 text12 white-text valign-wrapper">
                <div class="row">
                    <div class="col s12 m6 l6">
                        <h5 class="card-header yellow-text">
                            ЛЮБИТЕЛЯМ КОФЕ
                        </h5>
                        С Up-Brella вы сможете спешить по делам
                        и пить кофе на бегу, несмотря на дождь.
                    </div>
                    <div class="col s12 m6 l6">
                        <h5 class="card-header yellow-text">
                            БЛОГЕРАМ
                        </h5>
                        С зонтом Up-Brella ваши руки свободны и
                        ничто не помешает вам делать фото в любую погоду!
                    </div>
                    <div class="col s12 m6 l6">
                        <h5 class="card-header yellow-text">
                            МОЛОДЫМ МАМАМ
                        </h5>
                        С Up-Brella очень приятно гулять с коляской,
                        ведь вторая рука свободна для других дел.
                    </div>
                    <div class="col s12 m6 l6">
                        <h5 class="card-header yellow-text">
                            ДЕЛОВЫМ МУЖЧИНАМ
                        </h5>
                        Up-Brella - стильный аксессуар, который впишется в любой дресскод!
                    </div>

                </div>


            </div>
            <a class="btn orange col m6 l6 s12 waves-effect waves-light btn-buy white-text modal-trigger"
               href="#OrderModal">
                ЗАКАЗАТЬ СО СКИДКОЙ
            </a>


        </div>

    </div>

    <div class="section white">
        <div class="row container">
            <div class="header thin col s12 m12 l12 centered-text black-text">
                ОТЗЫВЫ НАШИХ КЛИЕНТОВ
            </div>
            <div class="col s12 m12 l12">
                <div class="row card-panel grey lighten-5 z-depth-1">
                    <div class="col s12 m5 l5 centered-text">
                        <img src="/images/10.jpg">
                    </div>
                    <div class="col s12 m7 l7">

                        <div class="chip">
                            <img src="images/11.jpg" alt="Contact Person">
                            Алексей Мартынов
                        </div>
                        <p>
                            Прекрасный зонт, полностью соответствует заявленным требованиям.
                            Очень приятные ощущения, когда садишься в машину в дождливую погоду.
                            Салон остаётся сухим. Порадовала ручка,­ теперь смело пользуюсь смартфоном,
                            пока стою под зонтом. Очень удобно, спасибо зонту Up-Brella!
                        </p>
                    </div>
                </div>
                <div class="row card-panel grey lighten-5 z-depth-1">
                    <div class="col s12 m5 l5 centered-text">
                        <img src="/images/12.jpg">
                    </div>
                    <div class="col s12 m7 l7">

                        <div class="chip">
                            <img src="images/13.jpg" alt="Contact Person">
                            Ирина Кузнецова
                        </div>
                        <p>
                            Зонт просто супер! Несмотря на свои крупные размеры он очень легкий и удобный.
                            Стоя даже под сильным ветром я не переживала что он сломается или улетит из рук.
                            Механизм полуавтомат, а его простота конструкции и качественные материалы делают
                            этот зонт просто вечным. Очень рада такому приобретению!
                        </p>
                    </div>
                </div>
                <div class="row card-panel grey lighten-5 z-depth-1">
                    <div class="col s12 m5 l5 centered-text">
                        <img src="/images/14.jpg">
                    </div>
                    <div class="col s12 m7 l7">

                        <div class="chip">
                            <img src="images/15.jpg" alt="Contact Person">
                            Игорь Перекопский
                        </div>
                        <p>
                            Всем рекомендую этот зонт! Купил себе в машину, чтобы домашние зонты не катать.
                            Он оказался очень необычный, продуманный и функциональный. Буду заказывать еще
                            для своей семьи так как вещь однозначно стоящая и практичная. Выполнен качественно,
                            и прослужит долго. Если кто ищет себе хороший зонт, советую обратить внимание
                            именно на эту модель!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section light-blue accent-3" style="background-image: url(/images/order_steps.jpg);">
        <div class="row container">
            <div class="header thin col s12 m12 l12 centered-text white-text">
                ДОСТАВКА И ОПЛАТА
            </div>
            <div class="col s12 m12 l12 text12 white-text valign-wrapper">
                <div class="row centered-text text15" style="font-weight: bold;">
                    <div class="col s12 m6 l3">
                        <i class="large material-icons yellow-text">chat</i><br>
                        1.Вы оставляете заявку через форму заказа на сайте
                    </div>
                    <div class="col s12 m6 l3">
                        <i class="large material-icons yellow-text">phone</i><br>
                        2.Мы перезваниваем вам для уточнения деталей заказа
                    </div>
                    <div class="col s12 m6 l3">
                        <i class="large material-icons yellow-text">flight</i><br>
                        3.Мы доставим ваш заказ в течение 1-10 дней
                    </div>
                    <div class="col s12 m6 l3">
                        <i class="large material-icons yellow-text">payment</i><br>
                        4.Вы проверяете и оплачиваете заказ при получении
                    </div>

                </div>


            </div>

        </div>

    </div>

    <div class="section white">
        <div class="row container">
            <div class="header thin col s12 m12 l12 centered-text red-text">
                ВЫБЕРИТЕ СВОЙ ЗОНТ СО СКИДКОЙ {{$globals['sale']}}%
            </div>

            <div class="col s12 m5 l5">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <img src="/images/16.jpg">
                    </div>
                </div>
                <div class="row">
                    <div class="col s3 m3 l3">
                        <img class="responsive-img materialboxed" src="/images/16.jpg">
                    </div>
                    <div class="col s3 m3 l3">
                        <img class="responsive-img materialboxed" src="/images/17.jpg">
                    </div>
                    <div class="col s3 m3 l3">
                        <img class="responsive-img materialboxed" src="/images/18.jpg">
                    </div>
                    <div class="col s3 m3 l3">
                        <img class="responsive-img materialboxed" src="/images/19.jpg">
                    </div>
                    <div class="col s3 m3 l3">
                        <img class="responsive-img materialboxed" src="/images/20.jpg">
                    </div>
                    <div class="col s3 m3 l3">
                        <img class="responsive-img materialboxed" src="/images/21.jpg">
                    </div>
                    <div class="col s3 m3 l3">
                        <img class="responsive-img materialboxed" src="/images/22.jpg">
                    </div>
                </div>
            </div>
            <div class="card col s12 m5 l5 offset-m2 offset-l2">

                <form method="POST" action="{{action('UmbrelloController@store')}}" enctype="multipart/form-data">
                    <div class="row centered-text">
                        <div class="col s12 m12 l12">
                            До конца акции осталось:
                        </div>
                        <div class="col s12 m12 l12 orange-text" style="font-size: 30pt;" id="clock">
                            00 : 00 : 00
                        </div>

                    </div>

                    <div class="row valign-wrapper">
                        <div class="col m6 s6" style=" color: rgba(33,58,72,0.69)">
                            Старая цена
                            <div style="text-decoration: line-through; font-size: 20pt; font-variant: thin;">
                                {{round(($globals['price']*100)/(100-$globals['sale']))}}р.
                            </div>
                        </div>
                        <div class="col m6 s6 l6">
                            Новая цена
                            <div style="font-size: 20pt; font-weight: bold;">
                                {{$globals['price']}}р.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col l12 m12 s12">
                            <input id="fio" type="text" class="validate" name="fio" required>
                            <label for="fio">Ваше имя (обязательно)</label>
                        </div>
                        <div class="input-field col l12 m12 s12">
                            <input id="phone" type="tel" class="validate" name="phone" required>
                            <label for="phone">Телефон (обязательно)</label>
                        </div>
                        <div class="input-field col l12 m12 s12">
                            <input id="email" type="email" class="validate" name="email">
                            <label for="email">Электронная почта</label>
                        </div>
                        <button class="btn waves-effect waves-light orange" type="submit">
                            <i class="material-icons right">send</i>
                            Отправить
                        </button>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div id="OrderModal" class="modal">
        <form method="POST" action="{{action('UmbrelloController@store')}}" enctype="multipart/form-data">

            <div class="row">
                <div class="input-field col l12 m12 s12">
                    <input id="fio" type="text" class="validate" name="fio" required>
                    <label for="fio">Ваше имя (обязательно)</label>
                </div>
                <div class="input-field col l12 m12 s12">
                    <input id="phone" type="tel" class="validate" name="phone" required>
                    <label for="phone">Телефон (обязательно)</label>
                </div>
                <div class="input-field col l12 m12 s12">
                    <input id="email" type="email" class="validate" name="email">
                    <label for="email">Электронная почта</label>
                </div>
                <button class="btn waves-effect waves-light orange" type="submit">
                    <i class="material-icons right">send</i>
                    Отправить
                </button>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>


        </form>
    </div>
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large orange waves-effect waves-light modal-trigger pulse"
           href="#OrderModal">
            <i class="large material-icons">local_grocery_store</i>
        </a>
    </div>


@endsection
