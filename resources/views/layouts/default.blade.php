<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вёрстка простого макета с Bootstrap v.4. Урок №{{ $lesson }} - Мои курсы</title>

    <meta name="yandex-verification" content="8e76721a4e5b39d4"/>
    <meta name="description" content="Проект, посвященный веб-разработке и заработку в Интернете. infobiz-kidys.ru">
    <meta name="author" content="Китаев Денис Сергеевич">

    <meta property="og:title" content="Вёрстка простого макета с Bootstrap v.4. Урок №{{ $lesson }} - Мои курсы">
    <meta property="og:description"
          content="Проект, посвященный веб-разработке и заработку в Интернете. infobiz-kidys.ru">
    <meta property="og:type" content="website">
    <meta property="og:url" content="//infobiz-kidys.ru">
    <meta property="og:image" content="/i/321.jpg">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <base href="https://infobiz-kidys.ru/">

    <link href="https://fonts.googleapis.com/css?family=Fira+Mono:400,500,700&display=swap&subset=cyrillic"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,700,700i&display=swap&subset=cyrillic"
          rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/styles/hybrid.css">
    <link rel="stylesheet" type="text/css" href="//d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?9ukd8d">
    <style>html, body {
            font-size: 16px;
            line-height: 1.8rem;
            font-family: 'Montserrat',
            sans-serif !important
        }

        code {
            background-color: #f8f8f8;
            padding: 8px;
            font-weight: 400;
            color: #666;
            font-size: .95em
        }

        pre {
            background-color: #1d1f21;
            border-radius: 3px;
            overflow: auto;
            padding: 1rem;
            color: #c5c8c6
        }

        pre code {
            background-color: transparent !important;
            padding: 0 !important;
            font-weight: inherit !important;
            font-size: .95rem;
            color: inherit !important
        }

        .kidys-code {
            display: flex;
            justify-content: space-between;
            align-items: flex-start
        }

        .kidys-code__hljs {
            overflow: auto;
            max-height: 480px;
            flex-grow: 2
        }

        .kidys-code__title-class {
            color: #f0f0f0;
            text-transform: uppercase;
            padding: 8px;
            margin-left: 5px;
            cursor: pointer;
            background-color: rgba(190, 190, 190, .45);
            transition: background-color .5s, color .5s;
        }
      
        .kidys-code__title-class:hover {
            background-color: rgba(190, 190, 190, .65);
            color: #eee;
        }

        pre code, code {
            font-family: 'Fira Mono', monospace !important
        }

        .kidys-code__hljs::selection, .kidys-code__hljs span::selection {
            background: rgba(255, 255, 255, .25);
            color: #eee
        }

        ::-webkit-scrollbar-button {
            width: 8px;
            height: 0
        }

        ::-webkit-scrollbar-track {
            background-color: #ecedee
        }

        ::-webkit-scrollbar-thumb {
            -webkit-border-radius: 0;
            border-radius: 0;
            background-color: #373
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #373
        }

        ::-webkit-resizer {
            width: 4px;
            height: 4px
        }

        ::-webkit-scrollbar {
            width: 4px;
            height: 4px
        }

        h2 {
            line-height: 1.65em
        }

        footer .group-btn button i {
            color: #fff;
            line-height: 1;
            font-size: 1.25em;
        }

        footer .group-btn button {
            margin: 0 3px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0.5em;
        }

        @media all and (max-width: 540px) {
            h2 {
                font-size: 3.65vmax
            }
            
            .kidys-adv {
                text-align: center;
            }
        }

        .block-center {
            margin: 0 auto
        }

        .title-kidys {
            margin: 2.5rem auto
        }

        .main-content-kidys img {
            max-width: 100%;
            height: auto
        }</style>
    <script src="https://vk.com/js/api/openapi.js?160" type="text/javascript"></script>
    <script type="text/javascript">
        VK.init({
            apiId: 7017374,
            onlyWidgets: true
        });
    </script>
</head>
<body>
<br/>
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-10 block-center">
                <div class="h2 text-center title-kidys">Вёрстка простого макета с использованием библиотеки Bootstrap
                    4
                </div>
            </div>
            <div class="col-sm-12 col-lg-8 block-center">
                <img class="img-fluid" src="/i/001.jpg" alt="bootstrap 4 курс">
            </div>
        </div>
    </div>
</header>
<div class="container kidys-adv">
    <div class="row">
        <div class="col-sm-12 col-lg-10 block-center">
            <p class="alert alert-primary title-kidys" role="alert">Хочешь еще глубже изучить процесс вёрстки и
                научиться по-настоящему создавать профессиональные макеты для сайтов? Тогда этот курс для тебя! <a
                        href="/courses/away-link_1" class="btn btn-primary btn-sm" target="_blank">Стань
                    профессионалом!</a></p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-lg-10 main-content-kidys block-center">
            <div class="h3 text-center title-kidys">Основной материал урока №{{ $lesson }}</div>
            @yield('content')
        </div>
    </div>
</div>
<div class="container kidys-adv">
    <div class="row">
        <div class="col-sm-12 col-lg-10 block-center">
            <p class="alert alert-primary title-kidys" role="alert">Хочешь еще глубже изучить процесс вёрстки и
                научиться по-настоящему создавать профессиональные макеты для сайтов? Тогда этот курс для тебя! <a
                        href="/courses/away-link_1" class="btn btn-primary btn-sm" target="_blank">Стань
                    профессионалом!</a></p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-lg-8 block-center">
            <div class="h3 text-center title-kidys">Оставить комментарий</div>
            <div id="vk_comments"></div>
            <script type="text/javascript">
                VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*", autoPublish: 1});
            </script>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center title-kidys">
                <div class="ta-c" style="font-size: 1.15rem;margin: 1rem auto">
                    <p>Связь с администрацией проекта в соц.сетях:</p>
                    <div data-id="socials-group-btn" class="group-btn" style="display: flex;justify-content: center;margin: 0.5rem auto">
                        <button data-href="https://vk.com/web_kidys" type="button" class="peter-river-flat-button btn" style="background-color: #5a7fa6;border-bottom-color: #5a7fa6;-webkit-box-shadow: inset 0 -2px #5a7fa6;box-shadow: inset 0 -2px #5a7fa6"><i class="socicon-vkontakte"></i></button>
                        <button data-href="https://www.facebook.com/webkidys" type="button" class="peter-river-flat-button btn" style="background-color: #3e5b98;border-bottom-color: #3e5b98;-webkit-box-shadow: inset 0 -2px #3e5b98;box-shadow: inset 0 -2px #3e5b98"><i class="socicon-facebook"></i></button>
                        <button data-href="https://twitter.com/DenisKidys" type="button" class="peter-river-flat-button btn" style="background-color: #4da7de;border-bottom-color: #4da7de;-webkit-box-shadow: inset 0 -2px #4da7de;box-shadow: inset 0 -2px #4da7de"><i class="socicon-twitter"></i></button>
                        <button data-href="https://ok.ru/group/54561694482573" type="button" class="peter-river-flat-button btn" style="background-color: #f48420;border-bottom-color: #f48420;-webkit-box-shadow: inset 0 -2px #f48420;box-shadow: inset 0 -2px #f48420"><i class="socicon-odnoklassniki"></i></button>
                        <button data-href="https://www.instagram.com/deniskidys" type="button" class="peter-river-flat-button btn" style="background-color: #333333;border-bottom-color: #333333;-webkit-box-shadow: inset 0 -2px #333333;box-shadow: inset 0 -2px #333333"><i class="socicon-instagram"></i></button>
                        <button data-href="https://www.youtube.com/channel/UC72znOKznvtAWevWJGT3Dmw" type="button" class="peter-river-flat-button btn" style="background-color: #e02a20;border-bottom-color: #e02a20;-webkit-box-shadow: inset 0 -2px #e02a20;box-shadow: inset 0 -2px #e02a20"><i class="socicon-youtube"></i></button>
                    </div>
                </div>
                <p>&copy; Все права защищены, 2019</p>
            </div>
        </div>
    </div>
</footer>

<script src="/js/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad()</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.4/clipboard.min.js"></script>
<script>$('.main-content-kidys p img').each(function (i) {
        $(this).parent().toggleClass('title-kidys block-center text-center')
    });
    $('[data-id="socials-group-btn"]>.btn').on('click', function() {
        window.open($(this).data('href'), '_blank');
    });
    $('.main-content-kidys a').each(function (i) {
        var link = $(this).attr('href');
        if (link.match(/https?:\/\/([^\/]+)/)) {
            $(this).attr('target', '_blank');
        }
    });
    new ClipboardJS('.kidys-code__title-class', {
        target: function(trigger) {
            return trigger.previousElementSibling;
        }
    })</script>

<!-- BEGIN JIVOSITE CODE{literal}--><script type='text/javascript'>(function(){var widget_id='szgm7itDGh';var d=document;var w=window;function l(){var s=document.createElement('script');s.type='text/javascript';s.async=!0;s.src='//code.jivosite.com/script/widget/'+widget_id;var ss=document.getElementsByTagName('script')[0];ss.parentNode.insertBefore(s,ss)}
        if(d.readyState=='complete'){l()}else{if(w.attachEvent){w.attachEvent('onload',l)}
        else{w.addEventListener('load',l,!1)}}})();</script><!--{/literal}END JIVOSITE CODE -->

<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(52938562, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/52938562" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</body>
</html>