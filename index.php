<!DOCTYPE html>
<html>
<head>
	<title>account-registration-test</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/ico" href="images/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <meta property="og:title" content="account-registration-test"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content="account-registration-test"/>
    <meta property="og:locale" content="ru"/>
    <meta property="og:image" content="images/logo.png"/>
    <meta property="og:image:alt" content="account-registration-test"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="js/moment-with-locales.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/moment-with-locales.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <script src="~/Scripts/jquery-1.10.2.js"></script>
    <script src="svg-inject.min.js"></script>
</head>
<body>
    <header>
        <section>
            <div class="account-registration">
                <div class="account-text">Регистрация аккаунта</div>
            </div>
        </section>
        <section>
            <div class="account-input">
                <input class="row-input" name="name" type="text" placeholder="Имя:"required>
                <input class="row-input" name="name" type="text" placeholder="Фамилия:"required>
            </div>
        </section>
        <section>
            <label><input type="radio" name="button"></label>
            <div class="text-radio">Мужчина</div>
            <label><input type="radio" name="button"></label>
            <div class="text-radio">Женщина</div>
        </section>
        <section>
            <div class="date">
                <div class="date-text">Дата рождения</div>
            </div>
            <input type="date" class="form-date" id="datepicker">

            <script>
                $(function () {
                    $("#datepicker").datepicker({
                        changeMonth: true,
                        changeYear: true,
                        yearRange: '-100:+0'
                    });
                });
            </script>
      </section>
      <section>
        <div class="entrance">
            <div class="entrance-text">Данные для входа в сервис</div>
        </div>
        <div class="entrance-input">
            <input class="row-input-entrance" name="email" type="email" placeholder="Email"required>
            <input class="row-input-entrance" name="password" type="password" placeholder="Пароль"required>
        </div>
        <div class="switch-btn" data-id="#bl-1"></div>
        <div class="text-swith">Получать спецпредложения</div>

        <div id="bl-1" class="bl-hide"></div>
        <div id="bl-2" style="height"></div>
        <div class="swith-button">
            <div class="text-swith-button">Перейти к оплате</div>
        </div>
        <section>
            <div class="account-login">
                <div class="account-login-text">Уже есть аккаунт на Toxin</div>
            </div>
            <div class="button">
                <div class="svg-images">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="99px" height="44px" viewBox="0 0 99 44" enable-background="new 0 0 99 44" xml:space="preserve">  <image id="image0" width="99" height="44" x="0" y="0" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGMAAAAsCAYAAABxNQYsAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                    AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABmJLR0QA/wD/AP+gvaeTAAAA
                    CXBIWXMAAAsTAAALEwEAmpwYAAAGcUlEQVR42u2cz24b1xXGf9+lRNdoAE2ewMwTWOkLiOimcNLA
                    VosuurAtNnEMAwkoAe2apNdtJNVIg7Z2xrbQXQsZMFIXXSTUE1h+gtJPIAYFapnk3K+LISlKlmXZ
                    gsPE5G9D6f4993y8MxjeOUecgM3UyVs9FgiUMSWJeUwCzBn0bA8zUmyDdEidhJ0XaVih/qdHGx/o
                    YzT4HJ31sLK9ynwgj87FM3MMy4fzQNvQAtqIbZmt/xZoLlbUflV/6lU6/ftLLxCpg+dByeEeN2i4
                    CDNwhoYTu69I7ugRZ+X/6NlhJWOr78F+n4FG/T75n8DBdiOWcNicA28Ph9rXT+CYizD4smiwDg/M
                    NRjuAXd+9pHuvVYx/nnTFwpi1aZE32JBM4rtgmj2nvJo90e0T/Lt+KGwmTr5cZeSAyXEWZmyRbm/
                    cwFaMdI497FuH3fMY4nxIHVJJrUpC5Ddjvb67kxYmwTHH5cHqUtEyoIacKa/i7fd3V08d+1060X9
                    XyjGv1JXia4bJbbb2I33rhTWxr3w7zsPbnmJXJQSZsfi+nsfau2oPkeK8SB1zZGasYzWuoHGdCcc
                    n/5OqUW8BCIE6ucqajyvvY4YqBZN3TZErfz8ytGqTnk+X910FXnNgILq7z9HkEPFuH/LNXBdaMeR
                    X3xwRc1xL+iHzld/6cy7MPM1kCiocZggz4hxP3XVMa6BKGS9d9//uLg97oW8Kdz/a7fsUPhGwkgr
                    H1S0Plq/T4zN1KVgPwQSopfPf1RYf6nZpryQzVvZcpBWZXayjn6yeE2tQV0YbSizaZxYuj0V4vWw
                    +GFhDXstird1yulo3VCMzVu9JRPnUfiP2W28/DRTjksMoWHcNixspr0Lg/KhGA6hZiCL2fXFyosf
                    UKa8OosVtaNp5D+pFD4blAvg7zd7FwjaFGr98jfhnXEbOyn848tsB2kukv30V5XZZr4zCuGyAaP6
                    uA2cJKJZj7ZEoQYQNlMnxucRdLW7NW4DJ4mZENYMRDibpk5Ch6wcbRk1fz29V3ynLFbURm6C3z6V
                    ZeUAWrBERjbdFWMg2o8iEApaCBHNW2C0PW7DJpOZb/LzLpdmEHO2MbE1brMmEYtHBpDmQ3R8x0CH
                    2da4DZtEdvOzdKKdBIvEgsr0nGIsVCpqR8AimfGJh5tyYvqvVQTDjoE0dTJumyaRNHUSAUM7GH1r
                    QbHI3LgNm0y6JYQjagXj7WjodLJ3x23WZBJKBhHcDkYt8pOnhXGbNYlEPB9tov0oWKGZ/xwS58dt
                    2CQisWCJGGMzKLJl0Y5SeXoT/25J0yclSwvGFCg2Q6Wits02wr3Qq47bwEmiS6EcsaK5V6monZ9n
                    mEZ+qWJ53AZOEhY1JNvxDvSPXa9UZpsRtyzm/pzuLo/byEngi7udJYLORMfHVyun7sHIGbhiWLER
                    oVCb3jteL1+kT0qYWn4GHuqD8qEYVysz9yyaUSRPCr3auA1+o5mdrRHCGcz21cszdwbF+96bIutV
                    DDuI6p/uTi9Xr4PP73Sqjl6y3XbsLY7W7RPjWuV0K+Lr0SgSVm+k3fK4jX+T+ONG56zFWsREfP3a
                    gWPucLDDJ5eKa3ZsIEGBzc//1pkf9yLeBG6k3bJM04DtxieXimsH24TDOn56+VQ9i7FhnGQZD29s
                    dKbPHyfgxkanygxfI80h1T+9fKp+WLsjg2XWN57WQTUMCtzOulljZfoGybFZTZ2o0K0FsQyyY7xe
                    fY4QcIwwsvWNTtWmLjFn89jQWLlUvD3uhX7fWd/oVA11TCJpB9yoXiwe+TL5sQIsV9MnJWYKm4Kz
                    ABaPTair292a7pQ96qmTuZleFbwMJP3iJr2schw/vVTo8R/uPlkKoVADnbEt5bHSWxFvKRQf9ug+
                    /l9ntlWfgPP0eurkrSJzAeblXhk8b1MGQFjwOLNXfnsxf7o+Dq8UlP/7jacXFLiMdX5kjJFg9mFA
                    /F60e54OYXjkbtAgR4LzfAjDQPxBhgTbGqQlGMliwL5EBv3MCUK2o/o5Fwbz7Mt2MIyez0s9Ov4w
                    X8MhduYB+VaQRjI3DJMO5MuzJdRGbGfOGr+7eLr5sn59JTEGrKZOXMwWMseyzDwikV2ySGCQzeCw
                    WQeZE9xfkxxtac8pZugaiH2nKWhPkL1kFwdSTHgoz0i7YZvhANpLaTC0ydY+2/I0FZD/iDrSD8v+
                    FuWpKqLVkr1V6BWbKye4Kvwf44VOth/8FjoAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjEtMDQtMTlU
                    MTY6NTc6MDkrMDA6MDCT+AYOAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIxLTA0LTE5VDE2OjU3OjA5
                    KzAwOjAw4qW+sgAAAABJRU5ErkJggg==" />
                    </svg>
                    <div class="entrance-button">
                        <a class="entrance-text">Войти</a>
                    </div>
                </div>
            </div>
        </section>
        <script>
        $('.switch-btn').click(function(){
            $(this).toggleClass('switch-on');
            if ($(this).hasClass('switch-on')) {
                $(this).trigger('on.switch');
            } else {
                $(this).trigger('off.switch');
            }
        });
        $('.switch-btn').on('on.switch', function(){
        console.log('Кнопка переключена в состояние on');
        });
        $('.switch-btn').on('off.switch', function(){
        console.log('Кнопка переключена в состояние off');
        });
        </script>
        <script>
            $(function(){
                $('.switch-btn').click(function (e, changeState) {
            if (changeState === undefined) {
            $(this).toggleClass('switch-on');
        }
            if ($(this).hasClass('switch-on')) {
            $(this).trigger('on.switch');
            } else {
            $(this).trigger('off.switch');
        }
        });

        $('.switch-btn').on('on.switch', function(){
            console.log('Кнопка переключена в состояние on');
        });

        $('.switch-btn').on('off.switch', function(){
            console.log('Кнопка переключена в состояние off');
        });

        $('.switch-btn').each(function(){
            $(this).triggerHandler('click', false);
        });

        });
        </script>
        <script>
            $(function () {
            $('.switch-btn').click(function () {
                $(this).toggleClass('switch-on');
                if ($(this).hasClass('switch-on')) {
                    $(this).trigger('on.switch');
                } else {
                    $(this).trigger('off.switch');
                }
            });
            $('.switch-btn').on('on.switch', function () {
                $($(this).attr('data-id')).removeClass('bl-hide');
            });
            $('.switch-btn').on('off.switch', function () {
                $($(this).attr('data-id')).addClass('bl-hide');
            });
            });
        </script>
      </section>
  </header>
</body>