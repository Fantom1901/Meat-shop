<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/sass/css_reset.scss')
    @vite('resources/sass/app.scss')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,700;1,700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body style="background-color: #EBEBEB">


<div class="container p-0">
    <nav class="navbar p-2 container-fluid">
        <div class="col-xxl-10 col-xl-10 col-lg-9 col-md-9 col-sm-9 col-xs-9">
            <a href="/" class="navbar-brand">logo</a>
        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
            <b class="number_phone text-right">Тел: +7 (996) 430-66-32</b>
        </div>
    </nav>

    <div class="bg_place p-4">
        <div class="hello">
            <div class="container-fluid">
                <div class="hello_bg row align-items-center justify-content-center py-3">
                    <div class="hello_text col-xl-6 col-lg-6 col-md-6 col-sm-5 col-5">
                        <b class="d-block meat_opt">Продажа мяса оптом</b>
                        <b class="d-block about">Мы предлагаем высококачественное мясо оптом по конкурентоспособным
                            ценам. Заказывайте быстро и удобно через Telegram.</b>
                        <button type="button" class="btn btn-light">Заказать сейчас</button>
                    </div>

                    <div class="hello_img col-xl-6 col-lg-6 col-md-6 col-sm-7 col-7">
                        <img class="img-fluid hello_img-img" src="{{asset('imeges/Cows!!.jpg')}}" alt="Картинка с коровами на лугу">
                    </div>
                </div>
            </div>
        </div>

    </div>




    <div class="bg_place">
        <footer class="container justify-content-center align-items-center footer">
            <div class="row">

                <div class="num_footer col-4 text-center">
                    <address class=" d-block">+7 (996) 430-66-32</address>
                </div>

                <div class="address col-4 ">
                    <b class="d-block adres-text" style="color: #5E5E5E">Адрес</b>
                    <b class="d-block">Красноярск ул. Ленина д. 184А</b>
                </div>

                <div class="time col-4 ">
                    <b class="d-block working-hours" style="color: #5E5E5E">Время работы</b>
                    <b class="d-block">Пн-пт 10:00-21:00 </b>
                </div>

            </div>

            <hr>

            <div class="ico col-12 d-flex justify-content-center">
                <img src="{{asset('imeges/tg-ico.svg')}}" alt="Телеграм" class="img">
                <img src="{{asset('imeges/ws-ico.svg')}}" alt="Ватсап" class="img">
                <img src="{{asset('imeges/vk-ico.svg')}}" alt="Вконтакте" class="img">
            </div>
        </footer>
    </div>

</div>


</body>
</html>


