<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title>Everlasting Mod</title>
    <link rel="icon" href="/server-icon.png">
    <style>
        a {
            background-color: transparent;
            -webkit-text-decoration-skip: objects
        }

        a:active,
        a:hover {
            outline-width: 0
        }

        *,
        *:after,
        *:before {
            box-sizing: inherit;
            margin: 0;
            padding: 0;
            color: #F9F9F9;
        }

        html {
            box-sizing: border-box;
            font-size: 1px !important;
        }

        body {
            font: normal 14rem/21rem Arial, 'Helvetica CY', 'Nimbus Sans L', sans-serif;
            background-color: rgba(205, 250, 151, 0.80);
            background-image: url("boie.jpg");
            background-position-x: center;
            background-blend-mode: darken;
        }
        .outer {
            display: table;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
        }

        .middle {

            display: table-cell;
            vertical-align: middle;
        }

        #telsa_shifre{
            display: block;
            width: 20%;
            margin: auto;
        }

        .container {
            display: flex;                  /* establish flex container */
            flex-direction: row;            /* default value; can be omitted */
            flex-wrap: nowrap;              /* default value; can be omitted */
            justify-content: space-between; /* switched from default (flex-start, see below) */
        }

        .container_column{
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-right: 5rem;
            margin-left: 5rem;
        }

        .container_multicolumn{
            display: flex;
            flex-direction: row;
        }

        .inner_mod, .inner_rp {
            margin-left: auto;
            margin-right: auto;
            max-width: 50%;
            min-width: 360rem;
            padding: 20rem;
        }

        .inner_rp {
            max-width: 20%;
            min-width: 240rem;
        }

        .inner_mod{
            min-width: 440rem;
        }

        .first_text{
            background-image: linear-gradient(to bottom, rgba(255,0,0,0) 10%, rgb(255, 255,255) 35%);
            background-clip: content-box;
            -webkit-background-clip: text;
            -moz-background-clip: padding;
            -moz-text-fill-color: transparent;
            -webkit-text-fill-color: transparent;
        }

        .last_text{
            background-image: linear-gradient(to top, rgba(255,0,0,0) 10%, rgb(255, 255,255) 35%);
            background-clip: content-box;
            -webkit-background-clip: text;
            -moz-background-clip: padding;
            -moz-text-fill-color: transparent;
            -webkit-text-fill-color: transparent;
        }

        #first_button_1-12, #first_button_1-16{
            background-color: rgba(255,0,0,0);
            background-image: linear-gradient(to bottom, rgba(240,255,102,0) 0%, rgba(240,255,102,1) 25%);
        }

        #first_button_1-12:hover, #first_button_1-16:hover{
            background-image: linear-gradient(to bottom, rgba(240,255,102,0) 0%, rgba(255,247,102,1) 25%);
        }

        #first_button_1-12{
            background-color: rgba(255,0,0,0);
            background-image: linear-gradient(to bottom, rgba(240,255,102,0) 0%, rgb(255, 194, 102) 25%);
        }

        #first_button_1-12:hover{
            background-image: linear-gradient(to bottom, rgba(240,255,102,0) 0%, rgb(255, 204, 102) 25%);
        }

        #last_button_1-12{
            background-color: rgba(255,0,0,0);
            background-image: linear-gradient(to top, rgba(240,255,102,0) 0%, rgba(240,255,102,1) 25%);
        }

        #last_button_1-12:hover{
            background-image: linear-gradient(to top, rgba(240,255,102,0) 0%, rgba(255,247,102,1) 25%);
        }

        /*#first_box_1-12*/ #first_box_1-16 {
                                background-color: rgba(255,0,0,0);
                                background-image: linear-gradient(to bottom, rgba(255,0,0,0) 0%, rgba(165,217,124,1) 35%);
                            }

        #first_box_1-12{
            background-color: rgba(255,0,0,0);
            background-image: linear-gradient(to bottom, rgba(255,0,0,0) 0%, rgb(217, 124, 124) 35%);
        }

        #last_box_1-12, #last_box_1-16 {
            background-color: rgba(255,0,0,0);
            background-image: linear-gradient(to top, rgba(255,0,0,0) 0%, rgba(165,217,124,1) 35%);
        }

        #telsa_table{
            border-collapse: collapse;
            border: solid 1rem;
            border-color: #000000;
            backdrop-filter: blur(10rem) contrast(110%) brightness(150%);
        }

        table th,
        table td {
            color:#ffffff;
            font-family: "Fira Code",monospace;
            font-size: 20rem;
            text-shadow: 0 0 8px #ffdddd;
            border: solid 3rem;
            padding: 3rem 3rem 3rem 3rem;
            width: 15%;
        }

        .tesla_key{
            font-size: 20rem;
            text-align: center;
            border-color: #f0ff66;
            width: 5%;
        }

        .box{
            display: flex;
            align-items: center;
            background-color: #a5d97c;
            border-radius: 5rem;
            padding: 1% 5% 1% 5%;
            margin-bottom: 5rem;
        }

        h1 {

            text-shadow: 3rem 3rem #c75959;
            text-align: -webkit-center;
            line-height: 28rem;
            font-size: 36rem;
            margin-bottom: 8rem;
        }

        h2 {
            text-align: center;
            margin-right: 2%;
            line-height: 26rem;
            font-size: 26rem;
        }

        .button {
            position: relative;
            display: block;
            horiz-align: center;
            text-align: center;
            text-decoration: none;
            background-color: #f0ff66;
            color: #2A2A2A;
            width: 90%;
            padding: 8rem 16rem;
            border-radius: 5rem;
            overflow: hidden;
            font-size: 16rem;
            font-weight: bold;
        }

        .button:hover{
            background-color: #fff766;
        }

        i {
            border: solid #2A2A2A;
            border-width: 0 3rem 3rem 0;
            display: inline-block;
            padding: 3rem;
        }

        .right {
            transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
        }
    </style>
    <style>
        a {
            background-color: transparent;
            -webkit-text-decoration-skip: objects
        }

        a:active,
        a:hover {
            outline-width: 0
        }

        *,
        *:after,
        *:before {
            box-sizing: inherit;
            margin: 0;
            padding: 0;
            color: #F9F9F9;
        }

        html {
            box-sizing: border-box;
            font-size: 1px !important;
        }

        body {
            font: normal 14rem/21rem Arial, 'Helvetica CY', 'Nimbus Sans L', sans-serif;
            background-color: rgba(205, 250, 151, 0.80);
            background-image: url("boie.jpg");
            background-position-x: center;
            background-repeat: no-repeat;
            background-size: 100%;
            background-blend-mode: soft-light;
        }
        .outer {
            display: table;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
        }

        .middle {

            display: table-cell;
            vertical-align: middle;
        }

        #telsa_shifre{
            display: block;
            width: 20%;
            margin: auto;
        }

        .container {
            display: flex;                  /* establish flex container */
            flex-direction: row;            /* default value; can be omitted */
            flex-wrap: nowrap;              /* default value; can be omitted */
            justify-content: space-between; /* switched from default (flex-start, see below) */
        }

        .container_column{
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-right: 5rem;
            margin-left: 5rem;
        }

        .container_multicolumn{
            display: flex;
            flex-direction: row;
        }

        .inner_mod, .inner_rp {
            margin-left: auto;
            margin-right: auto;
            max-width: 50%;
            min-width: 360rem;
            padding: 20rem;
        }

        .inner_rp {
            max-width: 20%;
            min-width: 240rem;
        }

        .inner_mod{
            min-width: 440rem;
        }

        .first_text{
            background-image: linear-gradient(to bottom, rgba(255,0,0,0) 10%, rgb(255, 255,255) 35%);
            background-clip: content-box;
            -webkit-background-clip: text;
            -moz-background-clip: padding;
            -moz-text-fill-color: transparent;
            -webkit-text-fill-color: transparent;
        }

        .last_text{
            background-image: linear-gradient(to top, rgba(255,0,0,0) 10%, rgb(255, 255,255) 35%);
            background-clip: content-box;
            -webkit-background-clip: text;
            -moz-background-clip: padding;
            -moz-text-fill-color: transparent;
            -webkit-text-fill-color: transparent;
        }

        #first_button_1-12, #first_button_1-16{
            background-color: rgba(255,0,0,0);
            background-image: linear-gradient(to bottom, rgba(240,255,102,0) 0%, rgba(240,255,102,1) 25%);
        }

        #first_button_1-12:hover, #first_button_1-16:hover{
            background-image: linear-gradient(to bottom, rgba(240,255,102,0) 0%, rgba(255,247,102,1) 25%);
        }

        #first_button_1-12{
            background-color: rgba(255,0,0,0);
            background-image: linear-gradient(to bottom, rgba(240,255,102,0) 0%, rgb(255, 194, 102) 25%);
        }

        #first_button_1-12:hover{
            background-image: linear-gradient(to bottom, rgba(240,255,102,0) 0%, rgb(255, 204, 102) 25%);
        }

        #last_button_1-12{
            background-color: rgba(255,0,0,0);
            background-image: linear-gradient(to top, rgba(240,255,102,0) 0%, rgba(240,255,102,1) 25%);
        }

        #last_button_1-12:hover{
            background-image: linear-gradient(to top, rgba(240,255,102,0) 0%, rgba(255,247,102,1) 25%);
        }

        /*#first_box_1-12*/ #first_box_1-16 {
                                background-color: rgba(255,0,0,0);
                                background-image: linear-gradient(to bottom, rgba(255,0,0,0) 0%, rgba(165,217,124,1) 35%);
                            }

        #first_box_1-12{
            background-color: rgba(255,0,0,0);
            background-image: linear-gradient(to bottom, rgba(255,0,0,0) 0%, rgb(217, 124, 124) 35%);
        }

        #last_box_1-12, #last_box_1-16 {
            background-color: rgba(255,0,0,0);
            background-image: linear-gradient(to top, rgba(255,0,0,0) 0%, rgba(165,217,124,1) 35%);
        }

        #telsa_table{
            border-collapse: collapse;
            border: solid 1rem;
            border-color: #759a57;
            backdrop-filter: blur(10rem) contrast(110%);
        }

        table th,
        table td {
            color:#2A2A2A;
            font-family: "Fira Code",monospace;
            font-size: 20rem;
            text-shadow: 0 1rem #2A2A2A;
            border: solid 3rem;
            padding: 3rem 3rem 3rem 3rem;
            width: 15%;
        }

        .tesla_key{
            font-size: 20rem;
            text-align: center;
            border-color: #f0ff66;
            width: 5%;
        }

        .box{
            display: flex;
            align-items: center;
            background-color: #a5d97c;
            border-radius: 5rem;
            padding: 1% 5% 1% 5%;
            margin-bottom: 5rem;
        }

        h1 {

            text-shadow: 3rem 3rem #759a57;
            text-align: -webkit-center;
            line-height: 28rem;
            font-size: 36rem;
            margin-bottom: 8rem;
        }

        h2 {
            text-align: center;
            margin-right: 2%;
            line-height: 26rem;
            font-size: 26rem;
        }

        .button {
            position: relative;
            display: block;
            horiz-align: center;
            text-align: center;
            text-decoration: none;
            background-color: #f0ff66;
            color: #2A2A2A;
            width: 90%;
            padding: 8rem 16rem;
            border-radius: 5rem;
            overflow: hidden;
            font-size: 16rem;
            font-weight: bold;
        }

        .button:hover{
            background-color: #fff766;
        }

        i {
            border: solid #2A2A2A;
            border-width: 0 3rem 3rem 0;
            display: inline-block;
            padding: 3rem;
        }

        .right {
            transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
        }
    </style>
</head>

<body>
<?php
if($_GET["password"]=="rightAnswer"){
    $MessageLog = fopen("website.html", "r");
    $site = fread($MessageLog,9999999);
    echo $site;
}
/*<div class='outer'>
    <div class='middle'>
        <div class = 'container'>
            <div class='inner_mod'>
                <h1>Everlasting Mod</h1>
                <div class="container_multicolumn">
                    <div class = 'container_column'>
                        <div class = 'box' id = "first_box_1-12">
                            <h2 class="first_text">1.12.2 1.3.1</h2><a href='/EverlastingMod-4.1.0(1.3.1).jar' class='button' id="first_button_1-12">Скачать<i class="right"></i></a>
                        </div>
                        <div class = 'box'>
                            <h2>1.12.2 1.3</h2><a href='EverlastingMod-4.1.0(1.3).jar' class='button'>Скачать<i class="right"></i></a>
                        </div>
                        <div class = 'box'>
                            <h2>1.12.2 1.2.8</h2><a href='/EverlastingMod-4.1.0(1.2.8).jar' class='button'>Скачать<i class="right"></i></a>
                        </div>
                        <div class = 'box' id="last_box_1-12">
                            <h2 class="last_text">1.12.2 1.2.7</h2><a href='/EverlastingMod-4.1.0(1.2.7).jar' class='button' id="last_button_1-12">Скачать<i class="right"></i></a>
                        </div>
                    </div>
                    <div class = 'container_column'>
                        <div class = 'box' id = "first_box_1-16">
                            <h2 class="first_text">1.16.5 0.1.1</h2><a href='/EverlastingMod-1.16.5-0.1.1.jar' class='button' id="first_button_1-16">Скачать<i class="right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inner_rp">
                <h1>Everlasting Resourcepack</h1>
                <div class = 'container_column'>
                    <div class = 'box'>
                        <h2>1.12.2</h2><a href='/Everlasting%20Pack%201.12.2.7z' class='button'>Скачать<i class="right"></i></a>
                    </div>
                    <div class = 'box'>
                        <h2>1.16.5</h2><a href='/Everlasting%20Pack%201.16.5.7z' class='button'>Скачать<i class="right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id = "telsa_shifre">
            <h1>Расшифровка Teslacraft</h1>
            <table id="telsa_table">
                <tr>
                    <td class = "tesla_key">АБС<br>КАЦ<br>КАС<br>КАД<br>КМХС<br>КАБТБ<br>СБЦ<br>ИТР</td>
                    <td>Несколько ударов Entity в один тик (CPS > 20)</td>
                </tr>
                <tr>
                    <td class = "tesla_key">ИРБК</td>
                    <td>Удар на большее расстояние, чем возможно (Reach)</td>
                </tr>
                <tr>
                    <td class = "tesla_key">АН</td>
                    <td>Автоматическая наводка в ближнем бою (AimBot)</td>
                </tr>
                <tr>
                    <td class = "tesla_key">АОС<br>АО</td>
                    <td>Анти Отбрасывание</td>
                </tr>
                <tr>
                    <td class = "tesla_key">ЧДИ</td>
                    <td>Одновременные несколько действий в инвентаре</td>
                </tr>
                <tr>
                    <td class = "tesla_key">БИЦ</td>
                    <td>Слишком быстрое использование еды/зелий</td>
                </tr>
                <tr>
                    <td class = "tesla_key">СБД</td>
                    <td>Слишком быстрое размещение блоков</td>
                </tr>
                <tr>
                    <td class = "tesla_key">НДЦ<br>БСПЦ</td>
                    <td>Невозможное взаимодействие с блоком<br> Примеры: закрытие уже закрытого сундука, размещение блока на застроенной стороне другого блока,
                        открытие откртытой двери<br>"Переклик"</td>
                </tr>
                <tr>
                    <td class = "tesla_key">БЛБ</td>
                    <td>Слишком быстрое разрушение блоков</td>
                </tr>
                <tr>
                    <td class = "tesla_key">ПДВ<br>ПДНС<br>ПБЧ<br>ПА</td>
                    <td>Невозможное перемещение<br>Пример: Fly, High Jump</td>
                </tr>
            </table>
        </div>
    </div>*/
?>
    <script>
        var userLang = navigator.language || navigator.userLanguage;
        var userLang_detected = userLang.toLowerCase();
        if (userLang_detected !== 'ru-ru' && userLang_detected !== 'ru') {
        }
    </script>
</body>

</html>