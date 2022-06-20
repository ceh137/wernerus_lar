@extends('index.layouts.main')
@section('content')
    <div class="uk-section uk-section-muted"
         uk-height-viewport="offset-top: true;">
        <div class="uk-container">
            <div class="uk-h1 sec-ttl">ТАРИФЫ</div>
            <div class="uk-section uk-section-muted"
                 uk-height-viewport="offset-top: true;">
                <div class="uk-container"><b>Тариф для небольших по весу и
                        объёму грузов </b>(от 1кг до 50кг)<br>
                    <div class="mobile-table">
                        <meta http-equiv="content-type" content="text/html;
charset=UTF-8">
                        <title></title>
                        <style>
                            /* Стили таблицы (IKSWEB) */
                            table.iksweb{text-decoration: none;border-collapse:collapse;width:100%;text-align:center;}
                            table.iksweb th{font-weight:normal;font-size:20px; color:#ffffff;background-color:#354251;}
                            table.iksweb td{font-size:15px;color:#354251;}
                            table.iksweb td,table.iksweb th{white-space:pre-wrap;padding:10px 5px;line-height:15px;vertical-align: middle;border: 2px solid #354251;} table.iksweb tr:hover{background-color:#f9fafb}
                            table.iksweb tr:hover td{color:#354251;cursor:default;}
                            .mobile-table{width: 100%; max-width: 100%; overflow-x: auto;}
                        </style>
                        <div class="mobile-table">
                            <table class="iksweb">
                                <tbody>
                                <tr>
                                    <td colspan="5">Фиксированная стоимость перевозки <b>за 1 место</b></td>
                                </tr>
                                <tr>
                                    <td rowspan="2" width="204">Наименование услуги</td>
                                    <td align="center" width="290">Объём, м3</td>
                                    <td>0 - 0,01</td>
                                    <td>0,01 - 0,1</td>
                                    <td>0,1 - 0,2</td>
                                </tr>
                                <tr>
                                    <td align="center" width="290">Вес, кг</td>
                                    <td>0,1 - 2,5</td>
                                    <td>2,51 - 25</td>
                                    <td>25 - 50</td>
                                </tr>
                                <tr>
                                    <td rowspan="1" width="204"><b>РЕАЛЬНЫЙ ЭКСПРЕСС</b></td>
                                    <td align="left" width="290"><b> Москва &lt;-&gt; СПб</b></td>
                                    <td>150</td>
                                    <td>300</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td rowspan="5" width="204"><b>НАСТОЯЩИЙ ЭКОНОМ</b></td>
                                    <td align="left" width="290"><b> Москва &lt;-&gt; СПб</b></td>
                                    <td>100</td>
                                    <td>150</td>
                                    <td>300</td>
                                </tr>
                                </tbody>
                            </table>
                            <br>
                            <b>Тариф для тяжёлых и/или объёмных грузов<br>
                                <tb></tb><tb></tb><tb></tb>
                                <table class="iksweb">
                                    <tbody>
                                    <tr>
                                        <td colspan="9">Стоимость перевозки 1 грузового места или партии грузов, <b>за кг </b>или<b> за м3</b><br></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" width="204">Наименование услуги</td>
                                        <td rowspan="2" width="290">Маршрут</td>
                                        <td width="204">Объём, м3</td>
                                        <td>0,2 - 5</td>
                                        <td>5 - 10</td>
                                        <td>10 - 30</td>
                                        <td>30 - 40</td>
                                        <td>40 - 50</td>
                                        <td>50 - 70</td>
                                    </tr>
                                    <tr>
                                        <td width="190">Вес, кг</td>
                                        <td>50 - 1250</td>
                                        <td>1250 - 2500</td>
                                        <td>2500 - 7500</td>
                                        <td>7500 - 10000</td>
                                        <td>10000 - 12500</td>
                                        <td>12500 - 17500</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" width="204"><b>РЕАЛЬНЫЙ ЭКСПРЕСС</b></td>
                                        <td rowspan="2" align="left" width="290"><b> Москва &lt;-&gt; СПб</b></td>
                                        <td width="190">Стоимость, руб/<b>м3</b></td>
                                        <td rowspan="1" colspan="6">1875</td>
                                    </tr>
                                    <tr>
                                        <td width="190">Стоимость, руб/<b>кг</b></td>
                                        <td rowspan="1" colspan="6">7,50</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="23" width="204"><b>НАСТОЯЩИЙ ЭКОНОМ</b></td>
                                        <td rowspan="2" align="left" width="290"><b> Москва &lt;-&gt; СПб</b></td>
                                        <td width="190">Стоимость, руб/<b>м3</b></td>
                                        <td rowspan="1" colspan="6"><b>1375</b></td>
                                    </tr>
                                    <tr>
                                        <td width="190">Стоимость, руб/<b>кг</b></td>
                                        <td rowspan="1" colspan="6"><b>5,50</b></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <br>
                                <br>
                                <b>Региональные тарифы<br>
                                    <tb></tb><tb></tb><tb></tb>
                                    <table class="iksweb">
                                        <tbody>
                                        <tr>
                                            <td colspan="9">Стоимость перевозки 1 грузового места или партии грузов, <b>за кг </b>или<b> за м3</b><br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" width="204"><b>ИЗ</b></td>
                                            <td rowspan="1" width="290"><b>В</b></td>
                                            <td width="204"><b>Минимальная</b> Стоимость, руб</td>
                                            <td>руб/<b>кг</b></td>
                                            <td>руб/<b><b>м3</b></b></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="226" width="204"><b>МОСКВА --&gt; </b></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Абакан</td>
                                            <td rowspan="1" colspan="1" height="10">2926</td>
                                            <td rowspan="1" colspan="1" height="10">23,41<br></td>
                                            <td rowspan="1" colspan="1" height="10">5852<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Адлер</td>
                                            <td rowspan="1" colspan="1" height="10">1968</td>
                                            <td rowspan="1" colspan="1" height="10">15,75<br></td>
                                            <td rowspan="1" colspan="1" height="10">3937<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Алушта</td>
                                            <td rowspan="1" colspan="1" height="10">2932</td>
                                            <td rowspan="1" colspan="1" height="10">23,46<br></td>
                                            <td rowspan="1" colspan="1" height="10">5865<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Альметьевск</td>
                                            <td rowspan="1" colspan="1" height="10">1732</td>
                                            <td rowspan="1" colspan="1" height="10">13,86<br></td>
                                            <td rowspan="1" colspan="1" height="10">3465<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Анапа</td>
                                            <td rowspan="1" colspan="1" height="10">1890</td>
                                            <td rowspan="1" colspan="1" height="10">15,12<br></td>
                                            <td rowspan="1" colspan="1" height="10">3780<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ангарск</td>
                                            <td rowspan="1" colspan="1" height="10">3320</td>
                                            <td rowspan="1" colspan="1" height="10">26,56<br></td>
                                            <td rowspan="1" colspan="1" height="10">6640<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Арзамас</td>
                                            <td rowspan="1" colspan="1" height="10">1312</td>
                                            <td rowspan="1" colspan="1" height="10">10,5<br></td>
                                            <td rowspan="1" colspan="1" height="10">2625<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Армавир</td>
                                            <td rowspan="1" colspan="1" height="10">1535</td>
                                            <td rowspan="1" colspan="1" height="10">12,28<br></td>
                                            <td rowspan="1" colspan="1" height="10">3070<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Армянск</td>
                                            <td rowspan="1" colspan="1" height="10">3090</td>
                                            <td rowspan="1" colspan="1" height="10">24,72<br></td>
                                            <td rowspan="1" colspan="1" height="10">6180<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Архангельск</td>
                                            <td rowspan="1" colspan="1" height="10">1561</td>
                                            <td rowspan="1" colspan="1" height="10">12,49<br></td>
                                            <td rowspan="1" colspan="1" height="10">3122<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Асбест</td>
                                            <td rowspan="1" colspan="1" height="10">1929</td>
                                            <td rowspan="1" colspan="1" height="10">15,43<br></td>
                                            <td rowspan="1" colspan="1" height="10">3857<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Астрахань</td>
                                            <td rowspan="1" colspan="1" height="10">1627</td>
                                            <td rowspan="1" colspan="1" height="10">13,02<br></td>
                                            <td rowspan="1" colspan="1" height="10">3255<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ачинск</td>
                                            <td rowspan="1" colspan="1" height="10">2795</td>
                                            <td rowspan="1" colspan="1" height="10">22,36<br></td>
                                            <td rowspan="1" colspan="1" height="10">5590<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Балаково</td>
                                            <td rowspan="1" colspan="1" height="10">1706</td>
                                            <td rowspan="1" colspan="1" height="10">13,65<br></td>
                                            <td rowspan="1" colspan="1" height="10">3412<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Барнаул</td>
                                            <td rowspan="1" colspan="1" height="10">2585</td>
                                            <td rowspan="1" colspan="1" height="10">20,68<br></td>
                                            <td rowspan="1" colspan="1" height="10">5170<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Батайск</td>
                                            <td rowspan="1" colspan="1" height="10">1588</td>
                                            <td rowspan="1" colspan="1" height="10">12,7<br></td>
                                            <td rowspan="1" colspan="1" height="10">3175<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Бахчисарай</td>
                                            <td rowspan="1" colspan="1" height="10">3018</td>
                                            <td rowspan="1" colspan="1" height="10">24,15<br></td>
                                            <td rowspan="1" colspan="1" height="10">6037<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Белгород</td>
                                            <td rowspan="1" colspan="1" height="10">1246</td>
                                            <td rowspan="1" colspan="1" height="10">9,97<br></td>
                                            <td rowspan="1" colspan="1" height="10">2492<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Белебей</td>
                                            <td rowspan="1" colspan="1" height="10">2300</td>
                                            <td rowspan="1" colspan="1" height="10">18,4<br></td>
                                            <td rowspan="1" colspan="1" height="10">4600<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Белогорск</td>
                                            <td rowspan="1" colspan="1" height="10">2975</td>
                                            <td rowspan="1" colspan="1" height="10">23,8<br></td>
                                            <td rowspan="1" colspan="1" height="10">5950<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Белокуриха</td>
                                            <td rowspan="1" colspan="1" height="10">3866</td>
                                            <td rowspan="1" colspan="1" height="10">30,93<br></td>
                                            <td rowspan="1" colspan="1" height="10">7732<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Белорецк</td>
                                            <td rowspan="1" colspan="1" height="10">1758</td>
                                            <td rowspan="1" colspan="1" height="10">14,07<br></td>
                                            <td rowspan="1" colspan="1" height="10">3517<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Бердск</td>
                                            <td rowspan="1" colspan="1" height="10">2926</td>
                                            <td rowspan="1" colspan="1" height="10">23,41<br></td>
                                            <td rowspan="1" colspan="1" height="10">5852<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Березники</td>
                                            <td rowspan="1" colspan="1" height="10">1876</td>
                                            <td rowspan="1" colspan="1" height="10">15,01<br></td>
                                            <td rowspan="1" colspan="1" height="10">3752<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Березовский</td>
                                            <td rowspan="1" colspan="1" height="10">1969</td>
                                            <td rowspan="1" colspan="1" height="10">15,75<br></td>
                                            <td rowspan="1" colspan="1" height="10">3937<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Бийск</td>
                                            <td rowspan="1" colspan="1" height="10">2664</td>
                                            <td rowspan="1" colspan="1" height="10">21,31<br></td>
                                            <td rowspan="1" colspan="1" height="10">5327<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Биробиджан</td>
                                            <td rowspan="1" colspan="1" height="10">5390</td>
                                            <td rowspan="1" colspan="1" height="10">43,12<br></td>
                                            <td rowspan="1" colspan="1" height="10">10780<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Благовещенск</td>
                                            <td rowspan="1" colspan="1" height="10">3595</td>
                                            <td rowspan="1" colspan="1" height="10">28,76<br></td>
                                            <td rowspan="1" colspan="1" height="10">7190<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Братск</td>
                                            <td rowspan="1" colspan="1" height="10">3215</td>
                                            <td rowspan="1" colspan="1" height="10">25,72<br></td>
                                            <td rowspan="1" colspan="1" height="10">6430<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Брест</td>
                                            <td rowspan="1" colspan="1" height="10">3018</td>
                                            <td rowspan="1" colspan="1" height="10">24,15<br></td>
                                            <td rowspan="1" colspan="1" height="10">6037<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Брянск</td>
                                            <td rowspan="1" colspan="1" height="10">1181</td>
                                            <td rowspan="1" colspan="1" height="10">9,45<br></td>
                                            <td rowspan="1" colspan="1" height="10">2362<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Бугульма</td>
                                            <td rowspan="1" colspan="1" height="10">2098</td>
                                            <td rowspan="1" colspan="1" height="10">16,79<br></td>
                                            <td rowspan="1" colspan="1" height="10">4197<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Бузулук</td>
                                            <td rowspan="1" colspan="1" height="10">1798</td>
                                            <td rowspan="1" colspan="1" height="10">14,38<br></td>
                                            <td rowspan="1" colspan="1" height="10">3595<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Великий Новгород</td>
                                            <td rowspan="1" colspan="1" height="10">1115</td>
                                            <td rowspan="1" colspan="1" height="10">8,92<br></td>
                                            <td rowspan="1" colspan="1" height="10">2230<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Верхняя Пышма</td>
                                            <td rowspan="1" colspan="1" height="10">1969</td>
                                            <td rowspan="1" colspan="1" height="10">15,75<br></td>
                                            <td rowspan="1" colspan="1" height="10">3937<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Верхняя Салда</td>
                                            <td rowspan="1" colspan="1" height="10">2501</td>
                                            <td rowspan="1" colspan="1" height="10">20,01<br></td>
                                            <td rowspan="1" colspan="1" height="10">5002<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Владивосток</td>
                                            <td rowspan="1" colspan="1" height="10">3618</td>
                                            <td rowspan="1" colspan="1" height="10">28,95<br></td>
                                            <td rowspan="1" colspan="1" height="10">7237<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Владикавказ</td>
                                            <td rowspan="1" colspan="1" height="10">1627</td>
                                            <td rowspan="1" colspan="1" height="10">13,02<br></td>
                                            <td rowspan="1" colspan="1" height="10">3255<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Владимир</td>
                                            <td rowspan="1" colspan="1" height="10">1036</td>
                                            <td rowspan="1" colspan="1" height="10">8,29<br></td>
                                            <td rowspan="1" colspan="1" height="10">2072<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Волгоград</td>
                                            <td rowspan="1" colspan="1" height="10">1483</td>
                                            <td rowspan="1" colspan="1" height="10">11,86<br></td>
                                            <td rowspan="1" colspan="1" height="10">2965<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Волгодонск</td>
                                            <td rowspan="1" colspan="1" height="10">1903</td>
                                            <td rowspan="1" colspan="1" height="10">15,22<br></td>
                                            <td rowspan="1" colspan="1" height="10">3805<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Волжск</td>
                                            <td rowspan="1" colspan="1" height="10">1969</td>
                                            <td rowspan="1" colspan="1" height="10">15,75<br></td>
                                            <td rowspan="1" colspan="1" height="10">3937<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Волжский</td>
                                            <td rowspan="1" colspan="1" height="10">1470</td>
                                            <td rowspan="1" colspan="1" height="10">11,76<br></td>
                                            <td rowspan="1" colspan="1" height="10">2940<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Вологда</td>
                                            <td rowspan="1" colspan="1" height="10">1155</td>
                                            <td rowspan="1" colspan="1" height="10">9,24<br></td>
                                            <td rowspan="1" colspan="1" height="10">2310<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Воркута</td>
                                            <td rowspan="1" colspan="1" height="10">4500</td>
                                            <td rowspan="1" colspan="1" height="10">36<br></td>
                                            <td rowspan="1" colspan="1" height="10">9000<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Воронеж</td>
                                            <td rowspan="1" colspan="1" height="10">1196</td>
                                            <td rowspan="1" colspan="1" height="10">9,57<br></td>
                                            <td rowspan="1" colspan="1" height="10">2392<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Воткинск</td>
                                            <td rowspan="1" colspan="1" height="10">1681</td>
                                            <td rowspan="1" colspan="1" height="10">13,45<br></td>
                                            <td rowspan="1" colspan="1" height="10">3362<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Выборг</td>
                                            <td rowspan="1" colspan="1" height="10">1496</td>
                                            <td rowspan="1" colspan="1" height="10">11,97<br></td>
                                            <td rowspan="1" colspan="1" height="10">2992<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Геленджик</td>
                                            <td rowspan="1" colspan="1" height="10">2213</td>
                                            <td rowspan="1" colspan="1" height="10">17,71<br></td>
                                            <td rowspan="1" colspan="1" height="10">4427<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Глазов</td>
                                            <td rowspan="1" colspan="1" height="10">2034</td>
                                            <td rowspan="1" colspan="1" height="10">16,27<br></td>
                                            <td rowspan="1" colspan="1" height="10">4067<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Гомель</td>
                                            <td rowspan="1" colspan="1" height="10">3018</td>
                                            <td rowspan="1" colspan="1" height="10">24,15<br></td>
                                            <td rowspan="1" colspan="1" height="10">6037<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Горно-Алтайск</td>
                                            <td rowspan="1" colspan="1" height="10">2889</td>
                                            <td rowspan="1" colspan="1" height="10">23,11<br></td>
                                            <td rowspan="1" colspan="1" height="10">5777<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Губкинский</td>
                                            <td rowspan="1" colspan="1" height="10">4413</td>
                                            <td rowspan="1" colspan="1" height="10">35,3<br></td>
                                            <td rowspan="1" colspan="1" height="10">8825<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Джанкой</td>
                                            <td rowspan="1" colspan="1" height="10">3018</td>
                                            <td rowspan="1" colspan="1" height="10">24,15<br></td>
                                            <td rowspan="1" colspan="1" height="10">6037<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Дзержинск</td>
                                            <td rowspan="1" colspan="1" height="10">1141</td>
                                            <td rowspan="1" colspan="1" height="10">9,13<br></td>
                                            <td rowspan="1" colspan="1" height="10">2282<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Димитровград</td>
                                            <td rowspan="1" colspan="1" height="10">1680</td>
                                            <td rowspan="1" colspan="1" height="10">13,44<br></td>
                                            <td rowspan="1" colspan="1" height="10">3360<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Евпатория</td>
                                            <td rowspan="1" colspan="1" height="10">2533</td>
                                            <td rowspan="1" colspan="1" height="10">20,26<br></td>
                                            <td rowspan="1" colspan="1" height="10">5065<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ейск</td>
                                            <td rowspan="1" colspan="1" height="10">1365</td>
                                            <td rowspan="1" colspan="1" height="10">10,92<br></td>
                                            <td rowspan="1" colspan="1" height="10">2730<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Екатеринбург</td>
                                            <td rowspan="1" colspan="1" height="10">1732</td>
                                            <td rowspan="1" colspan="1" height="10">13,86<br></td>
                                            <td rowspan="1" colspan="1" height="10">3465<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Забайкальск</td>
                                            <td rowspan="1" colspan="1" height="10">4554</td>
                                            <td rowspan="1" colspan="1" height="10">36,43<br></td>
                                            <td rowspan="1" colspan="1" height="10">9107<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Заволжье</td>
                                            <td rowspan="1" colspan="1" height="10">1768</td>
                                            <td rowspan="1" colspan="1" height="10">14,14<br></td>
                                            <td rowspan="1" colspan="1" height="10">3535<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Заинск</td>
                                            <td rowspan="1" colspan="1" height="10">1897</td>
                                            <td rowspan="1" colspan="1" height="10">15,18<br></td>
                                            <td rowspan="1" colspan="1" height="10">3795<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Златоуст</td>
                                            <td rowspan="1" colspan="1" height="10">1706</td>
                                            <td rowspan="1" colspan="1" height="10">13,65<br></td>
                                            <td rowspan="1" colspan="1" height="10">3412<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Иваново</td>
                                            <td rowspan="1" colspan="1" height="10">1102</td>
                                            <td rowspan="1" colspan="1" height="10">8,82<br></td>
                                            <td rowspan="1" colspan="1" height="10">2205<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ижевск</td>
                                            <td rowspan="1" colspan="1" height="10">1535</td>
                                            <td rowspan="1" colspan="1" height="10">12,28<br></td>
                                            <td rowspan="1" colspan="1" height="10">3070<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Иркутск</td>
                                            <td rowspan="1" colspan="1" height="10">2643</td>
                                            <td rowspan="1" colspan="1" height="10">21,15<br></td>
                                            <td rowspan="1" colspan="1" height="10">5287<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ишим</td>
                                            <td rowspan="1" colspan="1" height="10">2213</td>
                                            <td rowspan="1" colspan="1" height="10">17,71<br></td>
                                            <td rowspan="1" colspan="1" height="10">4427<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Йошкар-Ола</td>
                                            <td rowspan="1" colspan="1" height="10">1417</td>
                                            <td rowspan="1" colspan="1" height="10">11,34<br></td>
                                            <td rowspan="1" colspan="1" height="10">2835<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Казань</td>
                                            <td rowspan="1" colspan="1" height="10">1347</td>
                                            <td rowspan="1" colspan="1" height="10">10,78<br></td>
                                            <td rowspan="1" colspan="1" height="10">2695<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Калининград</td>
                                            <td rowspan="1" colspan="1" height="10">2506</td>
                                            <td rowspan="1" colspan="1" height="10">20,05<br></td>
                                            <td rowspan="1" colspan="1" height="10">5012<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Калуга</td>
                                            <td rowspan="1" colspan="1" height="10">1089</td>
                                            <td rowspan="1" colspan="1" height="10">8,71<br></td>
                                            <td rowspan="1" colspan="1" height="10">2177<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Каменск-Уральский</td>
                                            <td rowspan="1" colspan="1" height="10">1995</td>
                                            <td rowspan="1" colspan="1" height="10">15,96<br></td>
                                            <td rowspan="1" colspan="1" height="10">3990<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Каменск-Шахтинский</td>
                                            <td rowspan="1" colspan="1" height="10">1575</td>
                                            <td rowspan="1" colspan="1" height="10">12,6<br></td>
                                            <td rowspan="1" colspan="1" height="10">3150<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Камышин</td>
                                            <td rowspan="1" colspan="1" height="10">1496</td>
                                            <td rowspan="1" colspan="1" height="10">11,97<br></td>
                                            <td rowspan="1" colspan="1" height="10">2992<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Кандалакша</td>
                                            <td rowspan="1" colspan="1" height="10">1811</td>
                                            <td rowspan="1" colspan="1" height="10">14,49<br></td>
                                            <td rowspan="1" colspan="1" height="10">3622<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Карасук</td>
                                            <td rowspan="1" colspan="1" height="10">3205</td>
                                            <td rowspan="1" colspan="1" height="10">25,64<br></td>
                                            <td rowspan="1" colspan="1" height="10">6410<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Качканар</td>
                                            <td rowspan="1" colspan="1" height="10">3360</td>
                                            <td rowspan="1" colspan="1" height="10">26,88<br></td>
                                            <td rowspan="1" colspan="1" height="10">6720<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Кемерово</td>
                                            <td rowspan="1" colspan="1" height="10">2638</td>
                                            <td rowspan="1" colspan="1" height="10">21,1<br></td>
                                            <td rowspan="1" colspan="1" height="10">5275<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Керчь</td>
                                            <td rowspan="1" colspan="1" height="10">2559</td>
                                            <td rowspan="1" colspan="1" height="10">20,47<br></td>
                                            <td rowspan="1" colspan="1" height="10">5117<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Киров</td>
                                            <td rowspan="1" colspan="1" height="10">1404</td>
                                            <td rowspan="1" colspan="1" height="10">11,23<br></td>
                                            <td rowspan="1" colspan="1" height="10">2807<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ковров</td>
                                            <td rowspan="1" colspan="1" height="10">1155</td>
                                            <td rowspan="1" colspan="1" height="10">9,24<br></td>
                                            <td rowspan="1" colspan="1" height="10">2310<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Когалым</td>
                                            <td rowspan="1" colspan="1" height="10">2587</td>
                                            <td rowspan="1" colspan="1" height="10">20,7<br></td>
                                            <td rowspan="1" colspan="1" height="10">5175<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Комсомольск-на-Амуре</td>
                                            <td rowspan="1" colspan="1" height="10">4147</td>
                                            <td rowspan="1" colspan="1" height="10">33,18<br></td>
                                            <td rowspan="1" colspan="1" height="10">8295<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Кострома</td>
                                            <td rowspan="1" colspan="1" height="10">1141</td>
                                            <td rowspan="1" colspan="1" height="10">9,13<br></td>
                                            <td rowspan="1" colspan="1" height="10">2282<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Котлас</td>
                                            <td rowspan="1" colspan="1" height="10">1653</td>
                                            <td rowspan="1" colspan="1" height="10">13,23<br></td>
                                            <td rowspan="1" colspan="1" height="10">3307<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Краснодар</td>
                                            <td rowspan="1" colspan="1" height="10">1622</td>
                                            <td rowspan="1" colspan="1" height="10">12,98<br></td>
                                            <td rowspan="1" colspan="1" height="10">3245<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Краснокамск</td>
                                            <td rowspan="1" colspan="1" height="10">1995</td>
                                            <td rowspan="1" colspan="1" height="10">15,96<br></td>
                                            <td rowspan="1" colspan="1" height="10">3990<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Красноперекопск</td>
                                            <td rowspan="1" colspan="1" height="10">3061</td>
                                            <td rowspan="1" colspan="1" height="10">24,49<br></td>
                                            <td rowspan="1" colspan="1" height="10">6122<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Краснотурьинск</td>
                                            <td rowspan="1" colspan="1" height="10">2903</td>
                                            <td rowspan="1" colspan="1" height="10">23,23<br></td>
                                            <td rowspan="1" colspan="1" height="10">5807<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Красноуфимск</td>
                                            <td rowspan="1" colspan="1" height="10">2170</td>
                                            <td rowspan="1" colspan="1" height="10">17,36<br></td>
                                            <td rowspan="1" colspan="1" height="10">4340<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Красноярск</td>
                                            <td rowspan="1" colspan="1" height="10">2326</td>
                                            <td rowspan="1" colspan="1" height="10">18,61<br></td>
                                            <td rowspan="1" colspan="1" height="10">4652<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Крымск</td>
                                            <td rowspan="1" colspan="1" height="10">1883</td>
                                            <td rowspan="1" colspan="1" height="10">15,06<br></td>
                                            <td rowspan="1" colspan="1" height="10">3765<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Кстово</td>
                                            <td rowspan="1" colspan="1" height="10">1495</td>
                                            <td rowspan="1" colspan="1" height="10">11,96<br></td>
                                            <td rowspan="1" colspan="1" height="10">2990<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Куйбышев</td>
                                            <td rowspan="1" colspan="1" height="10">2903</td>
                                            <td rowspan="1" colspan="1" height="10">23,23<br></td>
                                            <td rowspan="1" colspan="1" height="10">5807<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Кунгур</td>
                                            <td rowspan="1" colspan="1" height="10">2070</td>
                                            <td rowspan="1" colspan="1" height="10">16,56<br></td>
                                            <td rowspan="1" colspan="1" height="10">4140<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Курган</td>
                                            <td rowspan="1" colspan="1" height="10">2021</td>
                                            <td rowspan="1" colspan="1" height="10">16,17<br></td>
                                            <td rowspan="1" colspan="1" height="10">4042<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Курск</td>
                                            <td rowspan="1" colspan="1" height="10">1220</td>
                                            <td rowspan="1" colspan="1" height="10">9,76<br></td>
                                            <td rowspan="1" colspan="1" height="10">2440<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Кызыл</td>
                                            <td rowspan="1" colspan="1" height="10">4183</td>
                                            <td rowspan="1" colspan="1" height="10">33,46<br></td>
                                            <td rowspan="1" colspan="1" height="10">8365<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Лабытнанги</td>
                                            <td rowspan="1" colspan="1" height="10">3838</td>
                                            <td rowspan="1" colspan="1" height="10">30,7<br></td>
                                            <td rowspan="1" colspan="1" height="10">7675<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Лангепас</td>
                                            <td rowspan="1" colspan="1" height="10">2831</td>
                                            <td rowspan="1" colspan="1" height="10">22,65<br></td>
                                            <td rowspan="1" colspan="1" height="10">5662<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ленинск-Кузнецкий</td>
                                            <td rowspan="1" colspan="1" height="10">2585</td>
                                            <td rowspan="1" colspan="1" height="10">20,68<br></td>
                                            <td rowspan="1" colspan="1" height="10">5170<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Лесной</td>
                                            <td rowspan="1" colspan="1" height="10">3550</td>
                                            <td rowspan="1" colspan="1" height="10">28,4<br></td>
                                            <td rowspan="1" colspan="1" height="10">7100<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Липецк</td>
                                            <td rowspan="1" colspan="1" height="10">1155</td>
                                            <td rowspan="1" colspan="1" height="10">9,24<br></td>
                                            <td rowspan="1" colspan="1" height="10">2310<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Магадан</td>
                                            <td rowspan="1" colspan="1" height="10">5617</td>
                                            <td rowspan="1" colspan="1" height="10">44,94<br></td>
                                            <td rowspan="1" colspan="1" height="10">11235<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Магнитогорск</td>
                                            <td rowspan="1" colspan="1" height="10">1758</td>
                                            <td rowspan="1" colspan="1" height="10">14,07<br></td>
                                            <td rowspan="1" colspan="1" height="10">3517<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Майкоп</td>
                                            <td rowspan="1" colspan="1" height="10">1903</td>
                                            <td rowspan="1" colspan="1" height="10">15,22<br></td>
                                            <td rowspan="1" colspan="1" height="10">3805<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Махачкала</td>
                                            <td rowspan="1" colspan="1" height="10">1496</td>
                                            <td rowspan="1" colspan="1" height="10">11,97<br></td>
                                            <td rowspan="1" colspan="1" height="10">2992<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Междуреченск</td>
                                            <td rowspan="1" colspan="1" height="10">2889</td>
                                            <td rowspan="1" colspan="1" height="10">23,11<br></td>
                                            <td rowspan="1" colspan="1" height="10">5777<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Миасс</td>
                                            <td rowspan="1" colspan="1" height="10">1942</td>
                                            <td rowspan="1" colspan="1" height="10">15,54<br></td>
                                            <td rowspan="1" colspan="1" height="10">3885<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Миллерово</td>
                                            <td rowspan="1" colspan="1" height="10">2070</td>
                                            <td rowspan="1" colspan="1" height="10">16,56<br></td>
                                            <td rowspan="1" colspan="1" height="10">4140<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Минск</td>
                                            <td rowspan="1" colspan="1" height="10">2375</td>
                                            <td rowspan="1" colspan="1" height="10">19<br></td>
                                            <td rowspan="1" colspan="1" height="10">4750<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Можга</td>
                                            <td rowspan="1" colspan="1" height="10">1998</td>
                                            <td rowspan="1" colspan="1" height="10">15,98<br></td>
                                            <td rowspan="1" colspan="1" height="10">3995<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Мончегорск</td>
                                            <td rowspan="1" colspan="1" height="10">1897</td>
                                            <td rowspan="1" colspan="1" height="10">15,18<br></td>
                                            <td rowspan="1" colspan="1" height="10">3795<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Муравленко</td>
                                            <td rowspan="1" colspan="1" height="10">3521</td>
                                            <td rowspan="1" colspan="1" height="10">28,17<br></td>
                                            <td rowspan="1" colspan="1" height="10">7042<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Мурманск</td>
                                            <td rowspan="1" colspan="1" height="10">1771</td>
                                            <td rowspan="1" colspan="1" height="10">14,17<br></td>
                                            <td rowspan="1" colspan="1" height="10">3542<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Муром</td>
                                            <td rowspan="1" colspan="1" height="10">1246</td>
                                            <td rowspan="1" colspan="1" height="10">9,97<br></td>
                                            <td rowspan="1" colspan="1" height="10">2492<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Набережные Челны</td>
                                            <td rowspan="1" colspan="1" height="10">1312</td>
                                            <td rowspan="1" colspan="1" height="10">10,5<br></td>
                                            <td rowspan="1" colspan="1" height="10">2625<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Надым</td>
                                            <td rowspan="1" colspan="1" height="10">4096</td>
                                            <td rowspan="1" colspan="1" height="10">32,77<br></td>
                                            <td rowspan="1" colspan="1" height="10">8192<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Нальчик</td>
                                            <td rowspan="1" colspan="1" height="10">1575</td>
                                            <td rowspan="1" colspan="1" height="10">12,6<br></td>
                                            <td rowspan="1" colspan="1" height="10">3150<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Нарьян-Мар</td>
                                            <td rowspan="1" colspan="1" height="10">11341</td>
                                            <td rowspan="1" colspan="1" height="10">90,73<br></td>
                                            <td rowspan="1" colspan="1" height="10">22682<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Находка</td>
                                            <td rowspan="1" colspan="1" height="10">4620</td>
                                            <td rowspan="1" colspan="1" height="10">36,96<br></td>
                                            <td rowspan="1" colspan="1" height="10">9240<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Невинномысск</td>
                                            <td rowspan="1" colspan="1" height="10">1548</td>
                                            <td rowspan="1" colspan="1" height="10">12,39<br></td>
                                            <td rowspan="1" colspan="1" height="10">3097<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Нерюнгри</td>
                                            <td rowspan="1" colspan="1" height="10">5376</td>
                                            <td rowspan="1" colspan="1" height="10">43,01<br></td>
                                            <td rowspan="1" colspan="1" height="10">10752<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Нефтекамск</td>
                                            <td rowspan="1" colspan="1" height="10">1391</td>
                                            <td rowspan="1" colspan="1" height="10">11,13<br></td>
                                            <td rowspan="1" colspan="1" height="10">2782<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Нефтеюганск</td>
                                            <td rowspan="1" colspan="1" height="10">2520</td>
                                            <td rowspan="1" colspan="1" height="10">20,16<br></td>
                                            <td rowspan="1" colspan="1" height="10">5040<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Нижневартовск</td>
                                            <td rowspan="1" colspan="1" height="10">2428</td>
                                            <td rowspan="1" colspan="1" height="10">19,42<br></td>
                                            <td rowspan="1" colspan="1" height="10">4855<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Нижнекамск</td>
                                            <td rowspan="1" colspan="1" height="10">1351</td>
                                            <td rowspan="1" colspan="1" height="10">10,81<br></td>
                                            <td rowspan="1" colspan="1" height="10">2702<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Нижний Новгород</td>
                                            <td rowspan="1" colspan="1" height="10">1086</td>
                                            <td rowspan="1" colspan="1" height="10">8,69<br></td>
                                            <td rowspan="1" colspan="1" height="10">2172<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Нижний Тагил</td>
                                            <td rowspan="1" colspan="1" height="10">1863</td>
                                            <td rowspan="1" colspan="1" height="10">14,91<br></td>
                                            <td rowspan="1" colspan="1" height="10">3727<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Новокузнецк</td>
                                            <td rowspan="1" colspan="1" height="10">2493</td>
                                            <td rowspan="1" colspan="1" height="10">19,95<br></td>
                                            <td rowspan="1" colspan="1" height="10">4987<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Новороссийск</td>
                                            <td rowspan="1" colspan="1" height="10">1548</td>
                                            <td rowspan="1" colspan="1" height="10">12,39<br></td>
                                            <td rowspan="1" colspan="1" height="10">3097<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Новосибирск</td>
                                            <td rowspan="1" colspan="1" height="10">2310</td>
                                            <td rowspan="1" colspan="1" height="10">18,48<br></td>
                                            <td rowspan="1" colspan="1" height="10">4620<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Новоуральск</td>
                                            <td rowspan="1" colspan="1" height="10">2349</td>
                                            <td rowspan="1" colspan="1" height="10">18,79<br></td>
                                            <td rowspan="1" colspan="1" height="10">4697<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Новый Уренгой</td>
                                            <td rowspan="1" colspan="1" height="10">2979</td>
                                            <td rowspan="1" colspan="1" height="10">23,83<br></td>
                                            <td rowspan="1" colspan="1" height="10">5957<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ноябрьск</td>
                                            <td rowspan="1" colspan="1" height="10">2533</td>
                                            <td rowspan="1" colspan="1" height="10">20,26<br></td>
                                            <td rowspan="1" colspan="1" height="10">5065<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Нягань</td>
                                            <td rowspan="1" colspan="1" height="10">2975</td>
                                            <td rowspan="1" colspan="1" height="10">23,8<br></td>
                                            <td rowspan="1" colspan="1" height="10">5950<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Обнинск</td>
                                            <td rowspan="1" colspan="1" height="10">1010</td>
                                            <td rowspan="1" colspan="1" height="10">8,08<br></td>
                                            <td rowspan="1" colspan="1" height="10">2020<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Озерск</td>
                                            <td rowspan="1" colspan="1" height="10">2362</td>
                                            <td rowspan="1" colspan="1" height="10">18,9<br></td>
                                            <td rowspan="1" colspan="1" height="10">4725<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Октябрьский</td>
                                            <td rowspan="1" colspan="1" height="10">1548</td>
                                            <td rowspan="1" colspan="1" height="10">12,39<br></td>
                                            <td rowspan="1" colspan="1" height="10">3097<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Омск</td>
                                            <td rowspan="1" colspan="1" height="10">2131</td>
                                            <td rowspan="1" colspan="1" height="10">17,05<br></td>
                                            <td rowspan="1" colspan="1" height="10">4262<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Орел</td>
                                            <td rowspan="1" colspan="1" height="10">1155</td>
                                            <td rowspan="1" colspan="1" height="10">9,24<br></td>
                                            <td rowspan="1" colspan="1" height="10">2310<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Оренбург</td>
                                            <td rowspan="1" colspan="1" height="10">1588</td>
                                            <td rowspan="1" colspan="1" height="10">12,7<br></td>
                                            <td rowspan="1" colspan="1" height="10">3175<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Орск</td>
                                            <td rowspan="1" colspan="1" height="10">1798</td>
                                            <td rowspan="1" colspan="1" height="10">14,38<br></td>
                                            <td rowspan="1" colspan="1" height="10">3595<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Петропавловск-Камчатский</td>
                                            <td rowspan="1" colspan="1" height="10">5125</td>
                                            <td rowspan="1" colspan="1" height="10">41<br></td>
                                            <td rowspan="1" colspan="1" height="10">10250<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Павлово</td>
                                            <td rowspan="1" colspan="1" height="10">1638</td>
                                            <td rowspan="1" colspan="1" height="10">13,11<br></td>
                                            <td rowspan="1" colspan="1" height="10">3277<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Пенза</td>
                                            <td rowspan="1" colspan="1" height="10">1260</td>
                                            <td rowspan="1" colspan="1" height="10">10,08<br></td>
                                            <td rowspan="1" colspan="1" height="10">2520<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Первоуральск</td>
                                            <td rowspan="1" colspan="1" height="10">1680</td>
                                            <td rowspan="1" colspan="1" height="10">13,44<br></td>
                                            <td rowspan="1" colspan="1" height="10">3360<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Пермь</td>
                                            <td rowspan="1" colspan="1" height="10">1540</td>
                                            <td rowspan="1" colspan="1" height="10">12,32<br></td>
                                            <td rowspan="1" colspan="1" height="10">3080<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Петрозаводск</td>
                                            <td rowspan="1" colspan="1" height="10">1312</td>
                                            <td rowspan="1" colspan="1" height="10">10,5<br></td>
                                            <td rowspan="1" colspan="1" height="10">2625<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Полевской</td>
                                            <td rowspan="1" colspan="1" height="10">2630</td>
                                            <td rowspan="1" colspan="1" height="10">21,04<br></td>
                                            <td rowspan="1" colspan="1" height="10">5260<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Прокопьевск</td>
                                            <td rowspan="1" colspan="1" height="10">3125</td>
                                            <td rowspan="1" colspan="1" height="10">25<br></td>
                                            <td rowspan="1" colspan="1" height="10">6250<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Псков</td>
                                            <td rowspan="1" colspan="1" height="10">1312</td>
                                            <td rowspan="1" colspan="1" height="10">10,5<br></td>
                                            <td rowspan="1" colspan="1" height="10">2625<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Пятигорск</td>
                                            <td rowspan="1" colspan="1" height="10">1417</td>
                                            <td rowspan="1" colspan="1" height="10">11,34<br></td>
                                            <td rowspan="1" colspan="1" height="10">2835<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Радужный</td>
                                            <td rowspan="1" colspan="1" height="10">3780</td>
                                            <td rowspan="1" colspan="1" height="10">30,24<br></td>
                                            <td rowspan="1" colspan="1" height="10">7560<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ревда</td>
                                            <td rowspan="1" colspan="1" height="10">2486</td>
                                            <td rowspan="1" colspan="1" height="10">19,89<br></td>
                                            <td rowspan="1" colspan="1" height="10">4972<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ростов-на-Дону</td>
                                            <td rowspan="1" colspan="1" height="10">1416</td>
                                            <td rowspan="1" colspan="1" height="10">11,33<br></td>
                                            <td rowspan="1" colspan="1" height="10">2832<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Рубцовск</td>
                                            <td rowspan="1" colspan="1" height="10">2782</td>
                                            <td rowspan="1" colspan="1" height="10">22,26<br></td>
                                            <td rowspan="1" colspan="1" height="10">5565<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Рыбинск</td>
                                            <td rowspan="1" colspan="1" height="10">1181</td>
                                            <td rowspan="1" colspan="1" height="10">9,45<br></td>
                                            <td rowspan="1" colspan="1" height="10">2362<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Рязань</td>
                                            <td rowspan="1" colspan="1" height="10">1155</td>
                                            <td rowspan="1" colspan="1" height="10">9,24<br></td>
                                            <td rowspan="1" colspan="1" height="10">2310<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Сальск</td>
                                            <td rowspan="1" colspan="1" height="10">2185</td>
                                            <td rowspan="1" colspan="1" height="10">17,48<br></td>
                                            <td rowspan="1" colspan="1" height="10">4370<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Самара</td>
                                            <td rowspan="1" colspan="1" height="10">1430</td>
                                            <td rowspan="1" colspan="1" height="10">11,44<br></td>
                                            <td rowspan="1" colspan="1" height="10">2860<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Саранск</td>
                                            <td rowspan="1" colspan="1" height="10">1286</td>
                                            <td rowspan="1" colspan="1" height="10">10,29<br></td>
                                            <td rowspan="1" colspan="1" height="10">2572<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Сарапул</td>
                                            <td rowspan="1" colspan="1" height="10">1854</td>
                                            <td rowspan="1" colspan="1" height="10">14,83<br></td>
                                            <td rowspan="1" colspan="1" height="10">3707<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Саратов</td>
                                            <td rowspan="1" colspan="1" height="10">1430</td>
                                            <td rowspan="1" colspan="1" height="10">11,44<br></td>
                                            <td rowspan="1" colspan="1" height="10">2860<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Саров</td>
                                            <td rowspan="1" colspan="1" height="10">2012</td>
                                            <td rowspan="1" colspan="1" height="10">16,1<br></td>
                                            <td rowspan="1" colspan="1" height="10">4025<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Севастополь</td>
                                            <td rowspan="1" colspan="1" height="10">2415</td>
                                            <td rowspan="1" colspan="1" height="10">19,32<br></td>
                                            <td rowspan="1" colspan="1" height="10">4830<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Северодвинск</td>
                                            <td rowspan="1" colspan="1" height="10">1706</td>
                                            <td rowspan="1" colspan="1" height="10">13,65<br></td>
                                            <td rowspan="1" colspan="1" height="10">3412<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Серов</td>
                                            <td rowspan="1" colspan="1" height="10">2415</td>
                                            <td rowspan="1" colspan="1" height="10">19,32<br></td>
                                            <td rowspan="1" colspan="1" height="10">4830<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Сибай</td>
                                            <td rowspan="1" colspan="1" height="10">2429</td>
                                            <td rowspan="1" colspan="1" height="10">19,43<br></td>
                                            <td rowspan="1" colspan="1" height="10">4857<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Симферополь</td>
                                            <td rowspan="1" colspan="1" height="10">2231</td>
                                            <td rowspan="1" colspan="1" height="10">17,85<br></td>
                                            <td rowspan="1" colspan="1" height="10">4462<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Смоленск</td>
                                            <td rowspan="1" colspan="1" height="10">1168</td>
                                            <td rowspan="1" colspan="1" height="10">9,34<br></td>
                                            <td rowspan="1" colspan="1" height="10">2335<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Советский</td>
                                            <td rowspan="1" colspan="1" height="10">3105</td>
                                            <td rowspan="1" colspan="1" height="10">24,84<br></td>
                                            <td rowspan="1" colspan="1" height="10">6210<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Соликамск</td>
                                            <td rowspan="1" colspan="1" height="10">1969</td>
                                            <td rowspan="1" colspan="1" height="10">15,75<br></td>
                                            <td rowspan="1" colspan="1" height="10">3937<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Сочи</td>
                                            <td rowspan="1" colspan="1" height="10">1955</td>
                                            <td rowspan="1" colspan="1" height="10">15,64<br></td>
                                            <td rowspan="1" colspan="1" height="10">3910<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ставрополь</td>
                                            <td rowspan="1" colspan="1" height="10">1575</td>
                                            <td rowspan="1" colspan="1" height="10">12,6<br></td>
                                            <td rowspan="1" colspan="1" height="10">3150<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Старый Оскол</td>
                                            <td rowspan="1" colspan="1" height="10">1168</td>
                                            <td rowspan="1" colspan="1" height="10">9,34<br></td>
                                            <td rowspan="1" colspan="1" height="10">2335<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Стерлитамак</td>
                                            <td rowspan="1" colspan="1" height="10">1719</td>
                                            <td rowspan="1" colspan="1" height="10">13,75<br></td>
                                            <td rowspan="1" colspan="1" height="10">3437<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Судак</td>
                                            <td rowspan="1" colspan="1" height="10">3061</td>
                                            <td rowspan="1" colspan="1" height="10">24,49<br></td>
                                            <td rowspan="1" colspan="1" height="10">6122<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Сургут</td>
                                            <td rowspan="1" colspan="1" height="10">2480</td>
                                            <td rowspan="1" colspan="1" height="10">19,84<br></td>
                                            <td rowspan="1" colspan="1" height="10">4960<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Сухой лог</td>
                                            <td rowspan="1" colspan="1" height="10">2386</td>
                                            <td rowspan="1" colspan="1" height="10">19,09<br></td>
                                            <td rowspan="1" colspan="1" height="10">4772<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Сызрань</td>
                                            <td rowspan="1" colspan="1" height="10">1325</td>
                                            <td rowspan="1" colspan="1" height="10">10,6<br></td>
                                            <td rowspan="1" colspan="1" height="10">2650<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Сыктывкар</td>
                                            <td rowspan="1" colspan="1" height="10">1640</td>
                                            <td rowspan="1" colspan="1" height="10">13,12<br></td>
                                            <td rowspan="1" colspan="1" height="10">3280<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Таганрог</td>
                                            <td rowspan="1" colspan="1" height="10">1496</td>
                                            <td rowspan="1" colspan="1" height="10">11,97<br></td>
                                            <td rowspan="1" colspan="1" height="10">2992<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Тамбов</td>
                                            <td rowspan="1" colspan="1" height="10">1181</td>
                                            <td rowspan="1" colspan="1" height="10">9,45<br></td>
                                            <td rowspan="1" colspan="1" height="10">2362<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Тарко-Сале</td>
                                            <td rowspan="1" colspan="1" height="10">5146</td>
                                            <td rowspan="1" colspan="1" height="10">41,17<br></td>
                                            <td rowspan="1" colspan="1" height="10">10292<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Тверь</td>
                                            <td rowspan="1" colspan="1" height="10">1076</td>
                                            <td rowspan="1" colspan="1" height="10">8,61<br></td>
                                            <td rowspan="1" colspan="1" height="10">2152<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Тобольск</td>
                                            <td rowspan="1" colspan="1" height="10">1824</td>
                                            <td rowspan="1" colspan="1" height="10">14,59<br></td>
                                            <td rowspan="1" colspan="1" height="10">3647<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Тольятти</td>
                                            <td rowspan="1" colspan="1" height="10">1375</td>
                                            <td rowspan="1" colspan="1" height="10">11<br></td>
                                            <td rowspan="1" colspan="1" height="10">2750<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Томск</td>
                                            <td rowspan="1" colspan="1" height="10">2598</td>
                                            <td rowspan="1" colspan="1" height="10">20,79<br></td>
                                            <td rowspan="1" colspan="1" height="10">5197<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Тарко-Сале</td>
                                            <td rowspan="1" colspan="1" height="10">5146</td>
                                            <td rowspan="1" colspan="1" height="10">41,17<br></td>
                                            <td rowspan="1" colspan="1" height="10">10292<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Туапсе</td>
                                            <td rowspan="1" colspan="1" height="10">2086</td>
                                            <td rowspan="1" colspan="1" height="10">16,69<br></td>
                                            <td rowspan="1" colspan="1" height="10">4172<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Туймазы</td>
                                            <td rowspan="1" colspan="1" height="10">2055</td>
                                            <td rowspan="1" colspan="1" height="10">16,44<br></td>
                                            <td rowspan="1" colspan="1" height="10">4110<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Тула</td>
                                            <td rowspan="1" colspan="1" height="10">1063</td>
                                            <td rowspan="1" colspan="1" height="10">8,5<br></td>
                                            <td rowspan="1" colspan="1" height="10">2125<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Тюмень</td>
                                            <td rowspan="1" colspan="1" height="10">1916</td>
                                            <td rowspan="1" colspan="1" height="10">15,33<br></td>
                                            <td rowspan="1" colspan="1" height="10">3832<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Улан-Удэ</td>
                                            <td rowspan="1" colspan="1" height="10">2796</td>
                                            <td rowspan="1" colspan="1" height="10">22,37<br></td>
                                            <td rowspan="1" colspan="1" height="10">5592<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ульяновск</td>
                                            <td rowspan="1" colspan="1" height="10">1299</td>
                                            <td rowspan="1" colspan="1" height="10">10,39<br></td>
                                            <td rowspan="1" colspan="1" height="10">2597<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Урай</td>
                                            <td rowspan="1" colspan="1" height="10">3521</td>
                                            <td rowspan="1" colspan="1" height="10">28,17<br></td>
                                            <td rowspan="1" colspan="1" height="10">7042<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Усинск</td>
                                            <td rowspan="1" colspan="1" height="10">5446</td>
                                            <td rowspan="1" colspan="1" height="10">43,57<br></td>
                                            <td rowspan="1" colspan="1" height="10">10892<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Уссурийск</td>
                                            <td rowspan="1" colspan="1" height="10">4291</td>
                                            <td rowspan="1" colspan="1" height="10">34,33<br></td>
                                            <td rowspan="1" colspan="1" height="10">8582<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Уфа</td>
                                            <td rowspan="1" colspan="1" height="10">1595</td>
                                            <td rowspan="1" colspan="1" height="10">12,76<br></td>
                                            <td rowspan="1" colspan="1" height="10">3190<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ухта</td>
                                            <td rowspan="1" colspan="1" height="10">2178</td>
                                            <td rowspan="1" colspan="1" height="10">17,43<br></td>
                                            <td rowspan="1" colspan="1" height="10">4357<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Феодосия</td>
                                            <td rowspan="1" colspan="1" height="10">2506</td>
                                            <td rowspan="1" colspan="1" height="10">20,05<br></td>
                                            <td rowspan="1" colspan="1" height="10">5012<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ханты-Мансийск</td>
                                            <td rowspan="1" colspan="1" height="10">3234</td>
                                            <td rowspan="1" colspan="1" height="10">25,87<br></td>
                                            <td rowspan="1" colspan="1" height="10">6467<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Хабаровск</td>
                                            <td rowspan="1" colspan="1" height="10">3725</td>
                                            <td rowspan="1" colspan="1" height="10">29,8<br></td>
                                            <td rowspan="1" colspan="1" height="10">7450<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Чайковский</td>
                                            <td rowspan="1" colspan="1" height="10">1940</td>
                                            <td rowspan="1" colspan="1" height="10">15,52<br></td>
                                            <td rowspan="1" colspan="1" height="10">3880<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Чебоксары</td>
                                            <td rowspan="1" colspan="1" height="10">1351</td>
                                            <td rowspan="1" colspan="1" height="10">10,81<br></td>
                                            <td rowspan="1" colspan="1" height="10">2702<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Челябинск</td>
                                            <td rowspan="1" colspan="1" height="10">1705</td>
                                            <td rowspan="1" colspan="1" height="10">13,64<br></td>
                                            <td rowspan="1" colspan="1" height="10">3410<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Череповец</td>
                                            <td rowspan="1" colspan="1" height="10">1181</td>
                                            <td rowspan="1" colspan="1" height="10">9,45<br></td>
                                            <td rowspan="1" colspan="1" height="10">2362<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Черкесск</td>
                                            <td rowspan="1" colspan="1" height="10">1940</td>
                                            <td rowspan="1" colspan="1" height="10">15,52<br></td>
                                            <td rowspan="1" colspan="1" height="10">3880<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Черноморское</td>
                                            <td rowspan="1" colspan="1" height="10">3090</td>
                                            <td rowspan="1" colspan="1" height="10">24,72<br></td>
                                            <td rowspan="1" colspan="1" height="10">6180<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Чернушка</td>
                                            <td rowspan="1" colspan="1" height="10">2458</td>
                                            <td rowspan="1" colspan="1" height="10">19,66<br></td>
                                            <td rowspan="1" colspan="1" height="10">4915<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Чита</td>
                                            <td rowspan="1" colspan="1" height="10">2926</td>
                                            <td rowspan="1" colspan="1" height="10">23,41<br></td>
                                            <td rowspan="1" colspan="1" height="10">5852<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Чусовой</td>
                                            <td rowspan="1" colspan="1" height="10">2070</td>
                                            <td rowspan="1" colspan="1" height="10">16,56<br></td>
                                            <td rowspan="1" colspan="1" height="10">4140<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Шадринск</td>
                                            <td rowspan="1" colspan="1" height="10">1926</td>
                                            <td rowspan="1" colspan="1" height="10">15,41<br></td>
                                            <td rowspan="1" colspan="1" height="10">3852<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Шахты</td>
                                            <td rowspan="1" colspan="1" height="10">1246</td>
                                            <td rowspan="1" colspan="1" height="10">9,97<br></td>
                                            <td rowspan="1" colspan="1" height="10">2492<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Энгельс</td>
                                            <td rowspan="1" colspan="1" height="10">1522</td>
                                            <td rowspan="1" colspan="1" height="10">12,18<br></td>
                                            <td rowspan="1" colspan="1" height="10">3045<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Югорск</td>
                                            <td rowspan="1" colspan="1" height="10">2990</td>
                                            <td rowspan="1" colspan="1" height="10">23,92<br></td>
                                            <td rowspan="1" colspan="1" height="10">5980<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Южно-Сахалинск</td>
                                            <td rowspan="1" colspan="1" height="10">3675</td>
                                            <td rowspan="1" colspan="1" height="10">29,4<br></td>
                                            <td rowspan="1" colspan="1" height="10">7350<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Южноуральск</td>
                                            <td rowspan="1" colspan="1" height="10">2141</td>
                                            <td rowspan="1" colspan="1" height="10">17,13<br></td>
                                            <td rowspan="1" colspan="1" height="10">4282<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Юрга</td>
                                            <td rowspan="1" colspan="1" height="10">2745</td>
                                            <td rowspan="1" colspan="1" height="10">21,96<br></td>
                                            <td rowspan="1" colspan="1" height="10">5490<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Юрюзань</td>
                                            <td rowspan="1" colspan="1" height="10">2716</td>
                                            <td rowspan="1" colspan="1" height="10">21,73<br></td>
                                            <td rowspan="1" colspan="1" height="10">5432<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Якутск</td>
                                            <td rowspan="1" colspan="1" height="10">7625</td>
                                            <td rowspan="1" colspan="1" height="10">61<br></td>
                                            <td rowspan="1" colspan="1" height="10">15250<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ялта</td>
                                            <td rowspan="1" colspan="1" height="10">2625</td>
                                            <td rowspan="1" colspan="1" height="10">21<br></td>
                                            <td rowspan="1" colspan="1" height="10">5250<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ялуторовск</td>
                                            <td rowspan="1" colspan="1" height="10">2501</td>
                                            <td rowspan="1" colspan="1" height="10">20,01<br></td>
                                            <td rowspan="1" colspan="1" height="10">5002<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ярославль</td>
                                            <td rowspan="1" colspan="1" height="10">1089</td>
                                            <td rowspan="1" colspan="1" height="10">8,71<br></td>
                                            <td rowspan="1" colspan="1" height="10">2177<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="226" width="204"><b>САНКТ-ПЕТЕРБУРГ --&gt; </b></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Абакан</td>
                                            <td rowspan="1" colspan="1" height="10">3294</td>
                                            <td rowspan="1" colspan="1" height="10">26,35<br></td>
                                            <td rowspan="1" colspan="1" height="10">6587<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Адлер</td>
                                            <td rowspan="1" colspan="1" height="10">2511</td>
                                            <td rowspan="1" colspan="1" height="10">20,09<br></td>
                                            <td rowspan="1" colspan="1" height="10">5022<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Алушта</td>
                                            <td rowspan="1" colspan="1" height="10">3277</td>
                                            <td rowspan="1" colspan="1" height="10">26,22<br></td>
                                            <td rowspan="1" colspan="1" height="10">6555<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Альметьевск</td>
                                            <td rowspan="1" colspan="1" height="10">2170</td>
                                            <td rowspan="1" colspan="1" height="10">17,36<br></td>
                                            <td rowspan="1" colspan="1" height="10">4340<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Анапа</td>
                                            <td rowspan="1" colspan="1" height="10">2645</td>
                                            <td rowspan="1" colspan="1" height="10">21,16<br></td>
                                            <td rowspan="1" colspan="1" height="10">5290<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ангарск</td>
                                            <td rowspan="1" colspan="1" height="10">3780</td>
                                            <td rowspan="1" colspan="1" height="10">30,24<br></td>
                                            <td rowspan="1" colspan="1" height="10">7560<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Арзамас</td>
                                            <td rowspan="1" colspan="1" height="10">1782</td>
                                            <td rowspan="1" colspan="1" height="10">14,26<br></td>
                                            <td rowspan="1" colspan="1" height="10">3565<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Армавир</td>
                                            <td rowspan="1" colspan="1" height="10">2084</td>
                                            <td rowspan="1" colspan="1" height="10">16,67<br></td>
                                            <td rowspan="1" colspan="1" height="10">4167<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Армянск</td>
                                            <td rowspan="1" colspan="1" height="10">3435</td>
                                            <td rowspan="1" colspan="1" height="10">27,48<br></td>
                                            <td rowspan="1" colspan="1" height="10">6870<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Архангельск</td>
                                            <td rowspan="1" colspan="1" height="10">1624</td>
                                            <td rowspan="1" colspan="1" height="10">12,99<br></td>
                                            <td rowspan="1" colspan="1" height="10">3247<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Асбест</td>
                                            <td rowspan="1" colspan="1" height="10">2244</td>
                                            <td rowspan="1" colspan="1" height="10">17,95<br></td>
                                            <td rowspan="1" colspan="1" height="10">4487<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Астрахань</td>
                                            <td rowspan="1" colspan="1" height="10">2156</td>
                                            <td rowspan="1" colspan="1" height="10">17,25<br></td>
                                            <td rowspan="1" colspan="1" height="10">4312<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ачинск</td>
                                            <td rowspan="1" colspan="1" height="10">3291</td>
                                            <td rowspan="1" colspan="1" height="10">26,33<br></td>
                                            <td rowspan="1" colspan="1" height="10">6582<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Балаково</td>
                                            <td rowspan="1" colspan="1" height="10">2156</td>
                                            <td rowspan="1" colspan="1" height="10">17,25<br></td>
                                            <td rowspan="1" colspan="1" height="10">4312<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Барнаул</td>
                                            <td rowspan="1" colspan="1" height="10">3076</td>
                                            <td rowspan="1" colspan="1" height="10">24,61<br></td>
                                            <td rowspan="1" colspan="1" height="10">6152<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Батайск</td>
                                            <td rowspan="1" colspan="1" height="10">2041</td>
                                            <td rowspan="1" colspan="1" height="10">16,33<br></td>
                                            <td rowspan="1" colspan="1" height="10">4082<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Бахчисарай</td>
                                            <td rowspan="1" colspan="1" height="10">3924</td>
                                            <td rowspan="1" colspan="1" height="10">31,39<br></td>
                                            <td rowspan="1" colspan="1" height="10">7847<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Белгород</td>
                                            <td rowspan="1" colspan="1" height="10">1840</td>
                                            <td rowspan="1" colspan="1" height="10">14,72<br></td>
                                            <td rowspan="1" colspan="1" height="10">3680<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Белебей</td>
                                            <td rowspan="1" colspan="1" height="10">2127</td>
                                            <td rowspan="1" colspan="1" height="10">17,02<br></td>
                                            <td rowspan="1" colspan="1" height="10">4255<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Белогорск</td>
                                            <td rowspan="1" colspan="1" height="10">3406</td>
                                            <td rowspan="1" colspan="1" height="10">27,25<br></td>
                                            <td rowspan="1" colspan="1" height="10">6812<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Белокуриха</td>
                                            <td rowspan="1" colspan="1" height="10">3636</td>
                                            <td rowspan="1" colspan="1" height="10">29,09<br></td>
                                            <td rowspan="1" colspan="1" height="10">7272<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Белорецк</td>
                                            <td rowspan="1" colspan="1" height="10">2152</td>
                                            <td rowspan="1" colspan="1" height="10">17,22<br></td>
                                            <td rowspan="1" colspan="1" height="10">4305<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Бердск</td>
                                            <td rowspan="1" colspan="1" height="10">3189</td>
                                            <td rowspan="1" colspan="1" height="10">25,51<br></td>
                                            <td rowspan="1" colspan="1" height="10">6377<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Березники</td>
                                            <td rowspan="1" colspan="1" height="10">2285</td>
                                            <td rowspan="1" colspan="1" height="10">18,28<br></td>
                                            <td rowspan="1" colspan="1" height="10">4570<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Березовский</td>
                                            <td rowspan="1" colspan="1" height="10">2141</td>
                                            <td rowspan="1" colspan="1" height="10">17,13<br></td>
                                            <td rowspan="1" colspan="1" height="10">4282<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Бийск</td>
                                            <td rowspan="1" colspan="1" height="10">3090</td>
                                            <td rowspan="1" colspan="1" height="10">24,72<br></td>
                                            <td rowspan="1" colspan="1" height="10">6180<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Биробиджан</td>
                                            <td rowspan="1" colspan="1" height="10">5678</td>
                                            <td rowspan="1" colspan="1" height="10">45,42<br></td>
                                            <td rowspan="1" colspan="1" height="10">11355<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Благовещенск</td>
                                            <td rowspan="1" colspan="1" height="10">5290</td>
                                            <td rowspan="1" colspan="1" height="10">42,32<br></td>
                                            <td rowspan="1" colspan="1" height="10">10580<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Братск</td>
                                            <td rowspan="1" colspan="1" height="10">3852</td>
                                            <td rowspan="1" colspan="1" height="10">30,82<br></td>
                                            <td rowspan="1" colspan="1" height="10">7705<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Брест</td>
                                            <td rowspan="1" colspan="1" height="10">3953</td>
                                            <td rowspan="1" colspan="1" height="10">31,62<br></td>
                                            <td rowspan="1" colspan="1" height="10">7905<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Брянск</td>
                                            <td rowspan="1" colspan="1" height="10">1753</td>
                                            <td rowspan="1" colspan="1" height="10">14,03<br></td>
                                            <td rowspan="1" colspan="1" height="10">3507<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Бугульма</td>
                                            <td rowspan="1" colspan="1" height="10">1883</td>
                                            <td rowspan="1" colspan="1" height="10">15,06<br></td>
                                            <td rowspan="1" colspan="1" height="10">3765<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Бузулук</td>
                                            <td rowspan="1" colspan="1" height="10">2178</td>
                                            <td rowspan="1" colspan="1" height="10">17,43<br></td>
                                            <td rowspan="1" colspan="1" height="10">4357<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Великий Новгород</td>
                                            <td rowspan="1" colspan="1" height="10">905</td>
                                            <td rowspan="1" colspan="1" height="10">7,24<br></td>
                                            <td rowspan="1" colspan="1" height="10">1810<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Верхняя Пышма</td>
                                            <td rowspan="1" colspan="1" height="10">2141</td>
                                            <td rowspan="1" colspan="1" height="10">17,13<br></td>
                                            <td rowspan="1" colspan="1" height="10">4282<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Верхняя Салда</td>
                                            <td rowspan="1" colspan="1" height="10">2788</td>
                                            <td rowspan="1" colspan="1" height="10">22,31<br></td>
                                            <td rowspan="1" colspan="1" height="10">5577<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Владивосток</td>
                                            <td rowspan="1" colspan="1" height="10">4959</td>
                                            <td rowspan="1" colspan="1" height="10">39,67<br></td>
                                            <td rowspan="1" colspan="1" height="10">9917<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Владикавказ</td>
                                            <td rowspan="1" colspan="1" height="10">2012</td>
                                            <td rowspan="1" colspan="1" height="10">16,1<br></td>
                                            <td rowspan="1" colspan="1" height="10">4025<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Владимир</td>
                                            <td rowspan="1" colspan="1" height="10">1753</td>
                                            <td rowspan="1" colspan="1" height="10">14,03<br></td>
                                            <td rowspan="1" colspan="1" height="10">3507<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Волгоград</td>
                                            <td rowspan="1" colspan="1" height="10">1969</td>
                                            <td rowspan="1" colspan="1" height="10">15,75<br></td>
                                            <td rowspan="1" colspan="1" height="10">3937<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Волгодонск</td>
                                            <td rowspan="1" colspan="1" height="10">2285</td>
                                            <td rowspan="1" colspan="1" height="10">18,28<br></td>
                                            <td rowspan="1" colspan="1" height="10">4570<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Волжск</td>
                                            <td rowspan="1" colspan="1" height="10">2328</td>
                                            <td rowspan="1" colspan="1" height="10">18,63<br></td>
                                            <td rowspan="1" colspan="1" height="10">4657<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Волжский</td>
                                            <td rowspan="1" colspan="1" height="10">1811</td>
                                            <td rowspan="1" colspan="1" height="10">14,49<br></td>
                                            <td rowspan="1" colspan="1" height="10">3622<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Вологда</td>
                                            <td rowspan="1" colspan="1" height="10">1408</td>
                                            <td rowspan="1" colspan="1" height="10">11,27<br></td>
                                            <td rowspan="1" colspan="1" height="10">2817<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Воркута</td>
                                            <td rowspan="1" colspan="1" height="10">3953</td>
                                            <td rowspan="1" colspan="1" height="10">31,62<br></td>
                                            <td rowspan="1" colspan="1" height="10">7905<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Воронеж</td>
                                            <td rowspan="1" colspan="1" height="10">1681</td>
                                            <td rowspan="1" colspan="1" height="10">13,45<br></td>
                                            <td rowspan="1" colspan="1" height="10">3362<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Воткинск</td>
                                            <td rowspan="1" colspan="1" height="10">2429</td>
                                            <td rowspan="1" colspan="1" height="10">19,43<br></td>
                                            <td rowspan="1" colspan="1" height="10">4857<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Выборг</td>
                                            <td rowspan="1" colspan="1" height="10">1308</td>
                                            <td rowspan="1" colspan="1" height="10">10,46<br></td>
                                            <td rowspan="1" colspan="1" height="10">2615<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Геленджик</td>
                                            <td rowspan="1" colspan="1" height="10">2760</td>
                                            <td rowspan="1" colspan="1" height="10">22,08<br></td>
                                            <td rowspan="1" colspan="1" height="10">5520<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Глазов</td>
                                            <td rowspan="1" colspan="1" height="10">2323</td>
                                            <td rowspan="1" colspan="1" height="10">18,58<br></td>
                                            <td rowspan="1" colspan="1" height="10">4645<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Гомель</td>
                                            <td rowspan="1" colspan="1" height="10">3953</td>
                                            <td rowspan="1" colspan="1" height="10">31,62<br></td>
                                            <td rowspan="1" colspan="1" height="10">7905<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Горно-Алтайск</td>
                                            <td rowspan="1" colspan="1" height="10">3378</td>
                                            <td rowspan="1" colspan="1" height="10">27,02<br></td>
                                            <td rowspan="1" colspan="1" height="10">6755<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Губкинский</td>
                                            <td rowspan="1" colspan="1" height="10">4140</td>
                                            <td rowspan="1" colspan="1" height="10">33,12<br></td>
                                            <td rowspan="1" colspan="1" height="10">8280<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Джанкой</td>
                                            <td rowspan="1" colspan="1" height="10">3435</td>
                                            <td rowspan="1" colspan="1" height="10">27,48<br></td>
                                            <td rowspan="1" colspan="1" height="10">6870<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Дзержинск</td>
                                            <td rowspan="1" colspan="1" height="10">1696</td>
                                            <td rowspan="1" colspan="1" height="10">13,57<br></td>
                                            <td rowspan="1" colspan="1" height="10">3392<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Димитровград</td>
                                            <td rowspan="1" colspan="1" height="10">2429</td>
                                            <td rowspan="1" colspan="1" height="10">19,43<br></td>
                                            <td rowspan="1" colspan="1" height="10">4857<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Евпатория</td>
                                            <td rowspan="1" colspan="1" height="10">2992</td>
                                            <td rowspan="1" colspan="1" height="10">23,94<br></td>
                                            <td rowspan="1" colspan="1" height="10">5985<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ейск</td>
                                            <td rowspan="1" colspan="1" height="10">2178</td>
                                            <td rowspan="1" colspan="1" height="10">17,43<br></td>
                                            <td rowspan="1" colspan="1" height="10">4357<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Екатеринбург</td>
                                            <td rowspan="1" colspan="1" height="10">2141</td>
                                            <td rowspan="1" colspan="1" height="10">17,13<br></td>
                                            <td rowspan="1" colspan="1" height="10">4282<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Забайкальск</td>
                                            <td rowspan="1" colspan="1" height="10">4948</td>
                                            <td rowspan="1" colspan="1" height="10">39,58<br></td>
                                            <td rowspan="1" colspan="1" height="10">9895<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Заволжье</td>
                                            <td rowspan="1" colspan="1" height="10">1753</td>
                                            <td rowspan="1" colspan="1" height="10">14,03<br></td>
                                            <td rowspan="1" colspan="1" height="10">3507<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Заинск</td>
                                            <td rowspan="1" colspan="1" height="10">2170</td>
                                            <td rowspan="1" colspan="1" height="10">17,36<br></td>
                                            <td rowspan="1" colspan="1" height="10">4340<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Златоуст</td>
                                            <td rowspan="1" colspan="1" height="10">2218</td>
                                            <td rowspan="1" colspan="1" height="10">17,74<br></td>
                                            <td rowspan="1" colspan="1" height="10">4435<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Иваново</td>
                                            <td rowspan="1" colspan="1" height="10">1610</td>
                                            <td rowspan="1" colspan="1" height="10">12,88<br></td>
                                            <td rowspan="1" colspan="1" height="10">3220<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ижевск</td>
                                            <td rowspan="1" colspan="1" height="10">1998</td>
                                            <td rowspan="1" colspan="1" height="10">15,98<br></td>
                                            <td rowspan="1" colspan="1" height="10">3995<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Иркутск</td>
                                            <td rowspan="1" colspan="1" height="10">3536</td>
                                            <td rowspan="1" colspan="1" height="10">28,29<br></td>
                                            <td rowspan="1" colspan="1" height="10">7072<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ишим</td>
                                            <td rowspan="1" colspan="1" height="10">2156</td>
                                            <td rowspan="1" colspan="1" height="10">17,25<br></td>
                                            <td rowspan="1" colspan="1" height="10">4312<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Йошкар-Ола</td>
                                            <td rowspan="1" colspan="1" height="10">2026</td>
                                            <td rowspan="1" colspan="1" height="10">16,21<br></td>
                                            <td rowspan="1" colspan="1" height="10">4052<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Казань</td>
                                            <td rowspan="1" colspan="1" height="10">1854</td>
                                            <td rowspan="1" colspan="1" height="10">14,83<br></td>
                                            <td rowspan="1" colspan="1" height="10">3707<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Калининград</td>
                                            <td rowspan="1" colspan="1" height="10">2745</td>
                                            <td rowspan="1" colspan="1" height="10">21,96<br></td>
                                            <td rowspan="1" colspan="1" height="10">5490<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Калуга</td>
                                            <td rowspan="1" colspan="1" height="10">1739</td>
                                            <td rowspan="1" colspan="1" height="10">13,91<br></td>
                                            <td rowspan="1" colspan="1" height="10">3477<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Каменск-Уральский</td>
                                            <td rowspan="1" colspan="1" height="10">2415</td>
                                            <td rowspan="1" colspan="1" height="10">19,32<br></td>
                                            <td rowspan="1" colspan="1" height="10">4830<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Каменск-Шахтинский</td>
                                            <td rowspan="1" colspan="1" height="10">2041</td>
                                            <td rowspan="1" colspan="1" height="10">16,33<br></td>
                                            <td rowspan="1" colspan="1" height="10">4082<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Камышин</td>
                                            <td rowspan="1" colspan="1" height="10">1876</td>
                                            <td rowspan="1" colspan="1" height="10">15,01<br></td>
                                            <td rowspan="1" colspan="1" height="10">3752<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Кандалакша</td>
                                            <td rowspan="1" colspan="1" height="10">1768</td>
                                            <td rowspan="1" colspan="1" height="10">14,14<br></td>
                                            <td rowspan="1" colspan="1" height="10">3535<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Карасук</td>
                                            <td rowspan="1" colspan="1" height="10">3493</td>
                                            <td rowspan="1" colspan="1" height="10">27,94<br></td>
                                            <td rowspan="1" colspan="1" height="10">6985<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Качканар</td>
                                            <td rowspan="1" colspan="1" height="10">3425</td>
                                            <td rowspan="1" colspan="1" height="10">27,4<br></td>
                                            <td rowspan="1" colspan="1" height="10">6850<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Кемерово</td>
                                            <td rowspan="1" colspan="1" height="10">3033</td>
                                            <td rowspan="1" colspan="1" height="10">24,26<br></td>
                                            <td rowspan="1" colspan="1" height="10">6065<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Керчь</td>
                                            <td rowspan="1" colspan="1" height="10">3435</td>
                                            <td rowspan="1" colspan="1" height="10">27,48<br></td>
                                            <td rowspan="1" colspan="1" height="10">6870<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Киров</td>
                                            <td rowspan="1" colspan="1" height="10">1983</td>
                                            <td rowspan="1" colspan="1" height="10">15,87<br></td>
                                            <td rowspan="1" colspan="1" height="10">3967<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ковров</td>
                                            <td rowspan="1" colspan="1" height="10">1940</td>
                                            <td rowspan="1" colspan="1" height="10">15,52<br></td>
                                            <td rowspan="1" colspan="1" height="10">3880<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Когалым</td>
                                            <td rowspan="1" colspan="1" height="10">2975</td>
                                            <td rowspan="1" colspan="1" height="10">23,8<br></td>
                                            <td rowspan="1" colspan="1" height="10">5950<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Комсомольск-на-Амуре</td>
                                            <td rowspan="1" colspan="1" height="10">5074</td>
                                            <td rowspan="1" colspan="1" height="10">40,59<br></td>
                                            <td rowspan="1" colspan="1" height="10">10147<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Кострома</td>
                                            <td rowspan="1" colspan="1" height="10">1782</td>
                                            <td rowspan="1" colspan="1" height="10">14,26<br></td>
                                            <td rowspan="1" colspan="1" height="10">3565<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Котлас</td>
                                            <td rowspan="1" colspan="1" height="10">1955</td>
                                            <td rowspan="1" colspan="1" height="10">15,64<br></td>
                                            <td rowspan="1" colspan="1" height="10">3910<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Краснодар</td>
                                            <td rowspan="1" colspan="1" height="10">2055</td>
                                            <td rowspan="1" colspan="1" height="10">16,44<br></td>
                                            <td rowspan="1" colspan="1" height="10">4110<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Краснокамск</td>
                                            <td rowspan="1" colspan="1" height="10">2231</td>
                                            <td rowspan="1" colspan="1" height="10">17,85<br></td>
                                            <td rowspan="1" colspan="1" height="10">4462<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Красноперекопск</td>
                                            <td rowspan="1" colspan="1" height="10">3435</td>
                                            <td rowspan="1" colspan="1" height="10">27,48<br></td>
                                            <td rowspan="1" colspan="1" height="10">6870<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Краснотурьинск</td>
                                            <td rowspan="1" colspan="1" height="10">3105</td>
                                            <td rowspan="1" colspan="1" height="10">24,84<br></td>
                                            <td rowspan="1" colspan="1" height="10">6210<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Красноуфимск</td>
                                            <td rowspan="1" colspan="1" height="10">2501</td>
                                            <td rowspan="1" colspan="1" height="10">20,01<br></td>
                                            <td rowspan="1" colspan="1" height="10">5002<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Красноярск</td>
                                            <td rowspan="1" colspan="1" height="10">3306</td>
                                            <td rowspan="1" colspan="1" height="10">26,45<br></td>
                                            <td rowspan="1" colspan="1" height="10">6612<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Крымск</td>
                                            <td rowspan="1" colspan="1" height="10">2458</td>
                                            <td rowspan="1" colspan="1" height="10">19,66<br></td>
                                            <td rowspan="1" colspan="1" height="10">4915<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Кстово</td>
                                            <td rowspan="1" colspan="1" height="10">2185</td>
                                            <td rowspan="1" colspan="1" height="10">17,48<br></td>
                                            <td rowspan="1" colspan="1" height="10">4370<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Куйбышев</td>
                                            <td rowspan="1" colspan="1" height="10">3061</td>
                                            <td rowspan="1" colspan="1" height="10">24,49<br></td>
                                            <td rowspan="1" colspan="1" height="10">6122<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Кунгур</td>
                                            <td rowspan="1" colspan="1" height="10">2343</td>
                                            <td rowspan="1" colspan="1" height="10">18,74<br></td>
                                            <td rowspan="1" colspan="1" height="10">4685<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Курган</td>
                                            <td rowspan="1" colspan="1" height="10">2443</td>
                                            <td rowspan="1" colspan="1" height="10">19,55<br></td>
                                            <td rowspan="1" colspan="1" height="10">4887<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Курск</td>
                                            <td rowspan="1" colspan="1" height="10">1768</td>
                                            <td rowspan="1" colspan="1" height="10">14,14<br></td>
                                            <td rowspan="1" colspan="1" height="10">3535<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Кызыл</td>
                                            <td rowspan="1" colspan="1" height="10">4758</td>
                                            <td rowspan="1" colspan="1" height="10">38,06<br></td>
                                            <td rowspan="1" colspan="1" height="10">9515<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Лабытнанги</td>
                                            <td rowspan="1" colspan="1" height="10">4772</td>
                                            <td rowspan="1" colspan="1" height="10">38,18<br></td>
                                            <td rowspan="1" colspan="1" height="10">9545<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Лангепас</td>
                                            <td rowspan="1" colspan="1" height="10">3478</td>
                                            <td rowspan="1" colspan="1" height="10">27,83<br></td>
                                            <td rowspan="1" colspan="1" height="10">6957<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ленинск-Кузнецкий</td>
                                            <td rowspan="1" colspan="1" height="10">3058</td>
                                            <td rowspan="1" colspan="1" height="10">24,46<br></td>
                                            <td rowspan="1" colspan="1" height="10">6115<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Лесной</td>
                                            <td rowspan="1" colspan="1" height="10">3608</td>
                                            <td rowspan="1" colspan="1" height="10">28,86<br></td>
                                            <td rowspan="1" colspan="1" height="10">7215<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Липецк</td>
                                            <td rowspan="1" colspan="1" height="10">1825</td>
                                            <td rowspan="1" colspan="1" height="10">14,6<br></td>
                                            <td rowspan="1" colspan="1" height="10">3650<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Магадан</td>
                                            <td rowspan="1" colspan="1" height="10">6511</td>
                                            <td rowspan="1" colspan="1" height="10">52,09<br></td>
                                            <td rowspan="1" colspan="1" height="10">13022<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Магнитогорск</td>
                                            <td rowspan="1" colspan="1" height="10">2357</td>
                                            <td rowspan="1" colspan="1" height="10">18,86<br></td>
                                            <td rowspan="1" colspan="1" height="10">4715<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Майкоп</td>
                                            <td rowspan="1" colspan="1" height="10">2400</td>
                                            <td rowspan="1" colspan="1" height="10">19,2<br></td>
                                            <td rowspan="1" colspan="1" height="10">4800<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Махачкала</td>
                                            <td rowspan="1" colspan="1" height="10">2597</td>
                                            <td rowspan="1" colspan="1" height="10">20,77<br></td>
                                            <td rowspan="1" colspan="1" height="10">5192<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Междуреченск</td>
                                            <td rowspan="1" colspan="1" height="10">3234</td>
                                            <td rowspan="1" colspan="1" height="10">25,87<br></td>
                                            <td rowspan="1" colspan="1" height="10">6467<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Миасс</td>
                                            <td rowspan="1" colspan="1" height="10">2415</td>
                                            <td rowspan="1" colspan="1" height="10">19,32<br></td>
                                            <td rowspan="1" colspan="1" height="10">4830<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Миллерово</td>
                                            <td rowspan="1" colspan="1" height="10">2429</td>
                                            <td rowspan="1" colspan="1" height="10">19,43<br></td>
                                            <td rowspan="1" colspan="1" height="10">4857<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Минск</td>
                                            <td rowspan="1" colspan="1" height="10">2458</td>
                                            <td rowspan="1" colspan="1" height="10">19,66<br></td>
                                            <td rowspan="1" colspan="1" height="10">4915<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Можга</td>
                                            <td rowspan="1" colspan="1" height="10">2285</td>
                                            <td rowspan="1" colspan="1" height="10">18,28<br></td>
                                            <td rowspan="1" colspan="1" height="10">4570<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Мончегорск</td>
                                            <td rowspan="1" colspan="1" height="10">1710</td>
                                            <td rowspan="1" colspan="1" height="10">13,68<br></td>
                                            <td rowspan="1" colspan="1" height="10">3420<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Муравленко</td>
                                            <td rowspan="1" colspan="1" height="10">4096</td>
                                            <td rowspan="1" colspan="1" height="10">32,77<br></td>
                                            <td rowspan="1" colspan="1" height="10">8192<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Мурманск</td>
                                            <td rowspan="1" colspan="1" height="10">1552</td>
                                            <td rowspan="1" colspan="1" height="10">12,42<br></td>
                                            <td rowspan="1" colspan="1" height="10">3105<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Муром</td>
                                            <td rowspan="1" colspan="1" height="10">2012</td>
                                            <td rowspan="1" colspan="1" height="10">16,1<br></td>
                                            <td rowspan="1" colspan="1" height="10">4025<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Набережные Челны</td>
                                            <td rowspan="1" colspan="1" height="10">1854</td>
                                            <td rowspan="1" colspan="1" height="10">14,83<br></td>
                                            <td rowspan="1" colspan="1" height="10">3707<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Надым</td>
                                            <td rowspan="1" colspan="1" height="10">5448</td>
                                            <td rowspan="1" colspan="1" height="10">43,58<br></td>
                                            <td rowspan="1" colspan="1" height="10">10895<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Нальчик</td>
                                            <td rowspan="1" colspan="1" height="10">2228</td>
                                            <td rowspan="1" colspan="1" height="10">17,82<br></td>
                                            <td rowspan="1" colspan="1" height="10">4455<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Нарьян-Мар</td>
                                            <td rowspan="1" colspan="1" height="10">11442</td>
                                            <td rowspan="1" colspan="1" height="10">91,54<br></td>
                                            <td rowspan="1" colspan="1" height="10">22885<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Находка</td>
                                            <td rowspan="1" colspan="1" height="10">4961</td>
                                            <td rowspan="1" colspan="1" height="10">39,69<br></td>
                                            <td rowspan="1" colspan="1" height="10">9922<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Невинномысск</td>
                                            <td rowspan="1" colspan="1" height="10">2141</td>
                                            <td rowspan="1" colspan="1" height="10">17,13<br></td>
                                            <td rowspan="1" colspan="1" height="10">4282<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Нерюнгри</td>
                                            <td rowspan="1" colspan="1" height="10">5922</td>
                                            <td rowspan="1" colspan="1" height="10">47,38<br></td>
                                            <td rowspan="1" colspan="1" height="10">11845<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Нефтекамск</td>
                                            <td rowspan="1" colspan="1" height="10">2055</td>
                                            <td rowspan="1" colspan="1" height="10">16,44<br></td>
                                            <td rowspan="1" colspan="1" height="10">4110<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Нефтеюганск</td>
                                            <td rowspan="1" colspan="1" height="10">3033</td>
                                            <td rowspan="1" colspan="1" height="10">24,26<br></td>
                                            <td rowspan="1" colspan="1" height="10">6065<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Нижневартовск</td>
                                            <td rowspan="1" colspan="1" height="10">2903</td>
                                            <td rowspan="1" colspan="1" height="10">23,23<br></td>
                                            <td rowspan="1" colspan="1" height="10">5807<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Нижнекамск</td>
                                            <td rowspan="1" colspan="1" height="10">2026</td>
                                            <td rowspan="1" colspan="1" height="10">16,21<br></td>
                                            <td rowspan="1" colspan="1" height="10">4052<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Нижний Новгород</td>
                                            <td rowspan="1" colspan="1" height="10">1538</td>
                                            <td rowspan="1" colspan="1" height="10">12,3<br></td>
                                            <td rowspan="1" colspan="1" height="10">3075<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Нижний Тагил</td>
                                            <td rowspan="1" colspan="1" height="10">2328</td>
                                            <td rowspan="1" colspan="1" height="10">18,63<br></td>
                                            <td rowspan="1" colspan="1" height="10">4657<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Новокузнецк</td>
                                            <td rowspan="1" colspan="1" height="10">3047</td>
                                            <td rowspan="1" colspan="1" height="10">24,38<br></td>
                                            <td rowspan="1" colspan="1" height="10">6095<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Новороссийск</td>
                                            <td rowspan="1" colspan="1" height="10">2228</td>
                                            <td rowspan="1" colspan="1" height="10">17,82<br></td>
                                            <td rowspan="1" colspan="1" height="10">4455<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Новосибирск</td>
                                            <td rowspan="1" colspan="1" height="10">2918</td>
                                            <td rowspan="1" colspan="1" height="10">23,34<br></td>
                                            <td rowspan="1" colspan="1" height="10">5835<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Новоуральск</td>
                                            <td rowspan="1" colspan="1" height="10">2401</td>
                                            <td rowspan="1" colspan="1" height="10">19,21<br></td>
                                            <td rowspan="1" colspan="1" height="10">4802<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Новый Уренгой</td>
                                            <td rowspan="1" colspan="1" height="10">3753</td>
                                            <td rowspan="1" colspan="1" height="10">30,03<br></td>
                                            <td rowspan="1" colspan="1" height="10">7507<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ноябрьск</td>
                                            <td rowspan="1" colspan="1" height="10">2875</td>
                                            <td rowspan="1" colspan="1" height="10">23<br></td>
                                            <td rowspan="1" colspan="1" height="10">5750<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Нягань</td>
                                            <td rowspan="1" colspan="1" height="10">3220</td>
                                            <td rowspan="1" colspan="1" height="10">25,76<br></td>
                                            <td rowspan="1" colspan="1" height="10">6440<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Обнинск</td>
                                            <td rowspan="1" colspan="1" height="10">1595</td>
                                            <td rowspan="1" colspan="1" height="10">12,76<br></td>
                                            <td rowspan="1" colspan="1" height="10">3190<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Озерск</td>
                                            <td rowspan="1" colspan="1" height="10">2625</td>
                                            <td rowspan="1" colspan="1" height="10">21<br></td>
                                            <td rowspan="1" colspan="1" height="10">5250<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Октябрьский</td>
                                            <td rowspan="1" colspan="1" height="10">1840</td>
                                            <td rowspan="1" colspan="1" height="10">14,72<br></td>
                                            <td rowspan="1" colspan="1" height="10">3680<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Омск</td>
                                            <td rowspan="1" colspan="1" height="10">2803</td>
                                            <td rowspan="1" colspan="1" height="10">22,42<br></td>
                                            <td rowspan="1" colspan="1" height="10">5605<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Орел</td>
                                            <td rowspan="1" colspan="1" height="10">1595</td>
                                            <td rowspan="1" colspan="1" height="10">12,76<br></td>
                                            <td rowspan="1" colspan="1" height="10">3190<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Оренбург</td>
                                            <td rowspan="1" colspan="1" height="10">2328</td>
                                            <td rowspan="1" colspan="1" height="10">18,63<br></td>
                                            <td rowspan="1" colspan="1" height="10">4657<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Орск</td>
                                            <td rowspan="1" colspan="1" height="10">2314</td>
                                            <td rowspan="1" colspan="1" height="10">18,51<br></td>
                                            <td rowspan="1" colspan="1" height="10">4627<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Петропавловск-Камчатский</td>
                                            <td rowspan="1" colspan="1" height="10">5606</td>
                                            <td rowspan="1" colspan="1" height="10">44,85<br></td>
                                            <td rowspan="1" colspan="1" height="10">11212<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Павлово</td>
                                            <td rowspan="1" colspan="1" height="10">1969</td>
                                            <td rowspan="1" colspan="1" height="10">15,75<br></td>
                                            <td rowspan="1" colspan="1" height="10">3937<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Пенза</td>
                                            <td rowspan="1" colspan="1" height="10">1811</td>
                                            <td rowspan="1" colspan="1" height="10">14,49<br></td>
                                            <td rowspan="1" colspan="1" height="10">3622<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Первоуральск</td>
                                            <td rowspan="1" colspan="1" height="10">2113</td>
                                            <td rowspan="1" colspan="1" height="10">16,9<br></td>
                                            <td rowspan="1" colspan="1" height="10">4225<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Пермь</td>
                                            <td rowspan="1" colspan="1" height="10">1998</td>
                                            <td rowspan="1" colspan="1" height="10">15,98<br></td>
                                            <td rowspan="1" colspan="1" height="10">3995<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Петрозаводск</td>
                                            <td rowspan="1" colspan="1" height="10">1178</td>
                                            <td rowspan="1" colspan="1" height="10">9,43<br></td>
                                            <td rowspan="1" colspan="1" height="10">2357<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Полевской</td>
                                            <td rowspan="1" colspan="1" height="10">2630</td>
                                            <td rowspan="1" colspan="1" height="10">21,04<br></td>
                                            <td rowspan="1" colspan="1" height="10">5260<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Прокопьевск</td>
                                            <td rowspan="1" colspan="1" height="10">3263</td>
                                            <td rowspan="1" colspan="1" height="10">26,1<br></td>
                                            <td rowspan="1" colspan="1" height="10">6525<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Псков</td>
                                            <td rowspan="1" colspan="1" height="10">1279</td>
                                            <td rowspan="1" colspan="1" height="10">10,23<br></td>
                                            <td rowspan="1" colspan="1" height="10">2557<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Пятигорск</td>
                                            <td rowspan="1" colspan="1" height="10">1911</td>
                                            <td rowspan="1" colspan="1" height="10">15,29<br></td>
                                            <td rowspan="1" colspan="1" height="10">3822<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Радужный</td>
                                            <td rowspan="1" colspan="1" height="10">3780</td>
                                            <td rowspan="1" colspan="1" height="10">30,24<br></td>
                                            <td rowspan="1" colspan="1" height="10">7560<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ревда</td>
                                            <td rowspan="1" colspan="1" height="10">2630</td>
                                            <td rowspan="1" colspan="1" height="10">21,04<br></td>
                                            <td rowspan="1" colspan="1" height="10">5260<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ростов-на-Дону</td>
                                            <td rowspan="1" colspan="1" height="10">1911</td>
                                            <td rowspan="1" colspan="1" height="10">15,29<br></td>
                                            <td rowspan="1" colspan="1" height="10">3822<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Рубцовск</td>
                                            <td rowspan="1" colspan="1" height="10">3248</td>
                                            <td rowspan="1" colspan="1" height="10">25,99<br></td>
                                            <td rowspan="1" colspan="1" height="10">6497<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Рыбинск</td>
                                            <td rowspan="1" colspan="1" height="10">1624</td>
                                            <td rowspan="1" colspan="1" height="10">12,99<br></td>
                                            <td rowspan="1" colspan="1" height="10">3247<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Рязань</td>
                                            <td rowspan="1" colspan="1" height="10">1897</td>
                                            <td rowspan="1" colspan="1" height="10">15,18<br></td>
                                            <td rowspan="1" colspan="1" height="10">3795<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Сальск</td>
                                            <td rowspan="1" colspan="1" height="10">2443</td>
                                            <td rowspan="1" colspan="1" height="10">19,55<br></td>
                                            <td rowspan="1" colspan="1" height="10">4887<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Самара</td>
                                            <td rowspan="1" colspan="1" height="10">2026</td>
                                            <td rowspan="1" colspan="1" height="10">16,21<br></td>
                                            <td rowspan="1" colspan="1" height="10">4052<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Саранск</td>
                                            <td rowspan="1" colspan="1" height="10">1897</td>
                                            <td rowspan="1" colspan="1" height="10">15,18<br></td>
                                            <td rowspan="1" colspan="1" height="10">3795<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Сарапул</td>
                                            <td rowspan="1" colspan="1" height="10">2328</td>
                                            <td rowspan="1" colspan="1" height="10">18,63<br></td>
                                            <td rowspan="1" colspan="1" height="10">4657<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Саратов</td>
                                            <td rowspan="1" colspan="1" height="10">1911</td>
                                            <td rowspan="1" colspan="1" height="10">15,29<br></td>
                                            <td rowspan="1" colspan="1" height="10">3822<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Саров</td>
                                            <td rowspan="1" colspan="1" height="10">2386</td>
                                            <td rowspan="1" colspan="1" height="10">19,09<br></td>
                                            <td rowspan="1" colspan="1" height="10">4772<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Севастополь</td>
                                            <td rowspan="1" colspan="1" height="10">2875</td>
                                            <td rowspan="1" colspan="1" height="10">23<br></td>
                                            <td rowspan="1" colspan="1" height="10">5750<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Северодвинск</td>
                                            <td rowspan="1" colspan="1" height="10">1710</td>
                                            <td rowspan="1" colspan="1" height="10">13,68<br></td>
                                            <td rowspan="1" colspan="1" height="10">3420<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Серов</td>
                                            <td rowspan="1" colspan="1" height="10">2533</td>
                                            <td rowspan="1" colspan="1" height="10">20,26<br></td>
                                            <td rowspan="1" colspan="1" height="10">5065<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Сибай</td>
                                            <td rowspan="1" colspan="1" height="10">2831</td>
                                            <td rowspan="1" colspan="1" height="10">22,65<br></td>
                                            <td rowspan="1" colspan="1" height="10">5662<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Симферополь</td>
                                            <td rowspan="1" colspan="1" height="10">2831</td>
                                            <td rowspan="1" colspan="1" height="10">22,65<br></td>
                                            <td rowspan="1" colspan="1" height="10">5662<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Смоленск</td>
                                            <td rowspan="1" colspan="1" height="10">1753</td>
                                            <td rowspan="1" colspan="1" height="10">14,03<br></td>
                                            <td rowspan="1" colspan="1" height="10">3507<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Советский</td>
                                            <td rowspan="1" colspan="1" height="10">3450</td>
                                            <td rowspan="1" colspan="1" height="10">27,6<br></td>
                                            <td rowspan="1" colspan="1" height="10">6900<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Соликамск</td>
                                            <td rowspan="1" colspan="1" height="10">2343</td>
                                            <td rowspan="1" colspan="1" height="10">18,74<br></td>
                                            <td rowspan="1" colspan="1" height="10">4685<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Сочи</td>
                                            <td rowspan="1" colspan="1" height="10">2501</td>
                                            <td rowspan="1" colspan="1" height="10">20,01<br></td>
                                            <td rowspan="1" colspan="1" height="10">5002<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ставрополь</td>
                                            <td rowspan="1" colspan="1" height="10">2127</td>
                                            <td rowspan="1" colspan="1" height="10">17,02<br></td>
                                            <td rowspan="1" colspan="1" height="10">4255<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Старый Оскол</td>
                                            <td rowspan="1" colspan="1" height="10">1854</td>
                                            <td rowspan="1" colspan="1" height="10">14,83<br></td>
                                            <td rowspan="1" colspan="1" height="10">3707<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Стерлитамак</td>
                                            <td rowspan="1" colspan="1" height="10">2228</td>
                                            <td rowspan="1" colspan="1" height="10">17,82<br></td>
                                            <td rowspan="1" colspan="1" height="10">4455<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Судак</td>
                                            <td rowspan="1" colspan="1" height="10">3435</td>
                                            <td rowspan="1" colspan="1" height="10">27,48<br></td>
                                            <td rowspan="1" colspan="1" height="10">6870<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Сургут</td>
                                            <td rowspan="1" colspan="1" height="10">2803</td>
                                            <td rowspan="1" colspan="1" height="10">22,42<br></td>
                                            <td rowspan="1" colspan="1" height="10">5605<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Сухой лог</td>
                                            <td rowspan="1" colspan="1" height="10">2501</td>
                                            <td rowspan="1" colspan="1" height="10">20,01<br></td>
                                            <td rowspan="1" colspan="1" height="10">5002<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Сызрань</td>
                                            <td rowspan="1" colspan="1" height="10">2026</td>
                                            <td rowspan="1" colspan="1" height="10">16,21<br></td>
                                            <td rowspan="1" colspan="1" height="10">4052<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Сыктывкар</td>
                                            <td rowspan="1" colspan="1" height="10">2357</td>
                                            <td rowspan="1" colspan="1" height="10">18,86<br></td>
                                            <td rowspan="1" colspan="1" height="10">4715<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Таганрог</td>
                                            <td rowspan="1" colspan="1" height="10">1883</td>
                                            <td rowspan="1" colspan="1" height="10">15,06<br></td>
                                            <td rowspan="1" colspan="1" height="10">3765<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Тамбов</td>
                                            <td rowspan="1" colspan="1" height="10">1725</td>
                                            <td rowspan="1" colspan="1" height="10">13,8<br></td>
                                            <td rowspan="1" colspan="1" height="10">3450<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Тарко-Сале</td>
                                            <td rowspan="1" colspan="1" height="10">4830</td>
                                            <td rowspan="1" colspan="1" height="10">38,64<br></td>
                                            <td rowspan="1" colspan="1" height="10">9660<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Тверь</td>
                                            <td rowspan="1" colspan="1" height="10">1739</td>
                                            <td rowspan="1" colspan="1" height="10">13,91<br></td>
                                            <td rowspan="1" colspan="1" height="10">3477<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Тобольск</td>
                                            <td rowspan="1" colspan="1" height="10">2178</td>
                                            <td rowspan="1" colspan="1" height="10">17,43<br></td>
                                            <td rowspan="1" colspan="1" height="10">4357<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Тольятти</td>
                                            <td rowspan="1" colspan="1" height="10">1854</td>
                                            <td rowspan="1" colspan="1" height="10">14,83<br></td>
                                            <td rowspan="1" colspan="1" height="10">3707<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Томск</td>
                                            <td rowspan="1" colspan="1" height="10">3090</td>
                                            <td rowspan="1" colspan="1" height="10">24,72<br></td>
                                            <td rowspan="1" colspan="1" height="10">6180<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Тарко-Сале</td>
                                            <td rowspan="1" colspan="1" height="10">2760</td>
                                            <td rowspan="1" colspan="1" height="10">22,08<br></td>
                                            <td rowspan="1" colspan="1" height="10">5520<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Туапсе</td>
                                            <td rowspan="1" colspan="1" height="10">2788</td>
                                            <td rowspan="1" colspan="1" height="10">22,31<br></td>
                                            <td rowspan="1" colspan="1" height="10">5577<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Туймазы</td>
                                            <td rowspan="1" colspan="1" height="10">1940</td>
                                            <td rowspan="1" colspan="1" height="10">15,52<br></td>
                                            <td rowspan="1" colspan="1" height="10">3880<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Тула</td>
                                            <td rowspan="1" colspan="1" height="10">1753</td>
                                            <td rowspan="1" colspan="1" height="10">14,03<br></td>
                                            <td rowspan="1" colspan="1" height="10">3507<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Тюмень</td>
                                            <td rowspan="1" colspan="1" height="10">2371</td>
                                            <td rowspan="1" colspan="1" height="10">18,97<br></td>
                                            <td rowspan="1" colspan="1" height="10">4742<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Улан-Удэ</td>
                                            <td rowspan="1" colspan="1" height="10">3996</td>
                                            <td rowspan="1" colspan="1" height="10">31,97<br></td>
                                            <td rowspan="1" colspan="1" height="10">7992<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ульяновск</td>
                                            <td rowspan="1" colspan="1" height="10">2012</td>
                                            <td rowspan="1" colspan="1" height="10">16,1<br></td>
                                            <td rowspan="1" colspan="1" height="10">4025<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Урай</td>
                                            <td rowspan="1" colspan="1" height="10">3406</td>
                                            <td rowspan="1" colspan="1" height="10">27,25<br></td>
                                            <td rowspan="1" colspan="1" height="10">6812<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Усинск</td>
                                            <td rowspan="1" colspan="1" height="10">5893</td>
                                            <td rowspan="1" colspan="1" height="10">47,14<br></td>
                                            <td rowspan="1" colspan="1" height="10">11785<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Уссурийск</td>
                                            <td rowspan="1" colspan="1" height="10">5031</td>
                                            <td rowspan="1" colspan="1" height="10">40,25<br></td>
                                            <td rowspan="1" colspan="1" height="10">10062<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Уфа</td>
                                            <td rowspan="1" colspan="1" height="10">2113</td>
                                            <td rowspan="1" colspan="1" height="10">16,9<br></td>
                                            <td rowspan="1" colspan="1" height="10">4225<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ухта</td>
                                            <td rowspan="1" colspan="1" height="10">2745</td>
                                            <td rowspan="1" colspan="1" height="10">21,96<br></td>
                                            <td rowspan="1" colspan="1" height="10">5490<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Феодосия</td>
                                            <td rowspan="1" colspan="1" height="10">3234</td>
                                            <td rowspan="1" colspan="1" height="10">25,87<br></td>
                                            <td rowspan="1" colspan="1" height="10">6467<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ханты-Мансийск</td>
                                            <td rowspan="1" colspan="1" height="10">3004</td>
                                            <td rowspan="1" colspan="1" height="10">24,03<br></td>
                                            <td rowspan="1" colspan="1" height="10">6007<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Хабаровск</td>
                                            <td rowspan="1" colspan="1" height="10">5088</td>
                                            <td rowspan="1" colspan="1" height="10">40,71<br></td>
                                            <td rowspan="1" colspan="1" height="10">10177<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Чайковский</td>
                                            <td rowspan="1" colspan="1" height="10">2228</td>
                                            <td rowspan="1" colspan="1" height="10">17,82<br></td>
                                            <td rowspan="1" colspan="1" height="10">4455<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Чебоксары</td>
                                            <td rowspan="1" colspan="1" height="10">1840</td>
                                            <td rowspan="1" colspan="1" height="10">14,72<br></td>
                                            <td rowspan="1" colspan="1" height="10">3680<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Челябинск</td>
                                            <td rowspan="1" colspan="1" height="10">2084</td>
                                            <td rowspan="1" colspan="1" height="10">16,67<br></td>
                                            <td rowspan="1" colspan="1" height="10">4167<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Череповец</td>
                                            <td rowspan="1" colspan="1" height="10">1408</td>
                                            <td rowspan="1" colspan="1" height="10">11,27<br></td>
                                            <td rowspan="1" colspan="1" height="10">2817<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Черкесск</td>
                                            <td rowspan="1" colspan="1" height="10">2429</td>
                                            <td rowspan="1" colspan="1" height="10">19,43<br></td>
                                            <td rowspan="1" colspan="1" height="10">4857<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Черноморское</td>
                                            <td rowspan="1" colspan="1" height="10">3435</td>
                                            <td rowspan="1" colspan="1" height="10">27,48<br></td>
                                            <td rowspan="1" colspan="1" height="10">6870<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Чернушка</td>
                                            <td rowspan="1" colspan="1" height="10">2788</td>
                                            <td rowspan="1" colspan="1" height="10">22,31<br></td>
                                            <td rowspan="1" colspan="1" height="10">5577<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Чита</td>
                                            <td rowspan="1" colspan="1" height="10">4255</td>
                                            <td rowspan="1" colspan="1" height="10">34,04<br></td>
                                            <td rowspan="1" colspan="1" height="10">8510<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Чусовой</td>
                                            <td rowspan="1" colspan="1" height="10">2300</td>
                                            <td rowspan="1" colspan="1" height="10">18,4<br></td>
                                            <td rowspan="1" colspan="1" height="10">4600<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Шадринск</td>
                                            <td rowspan="1" colspan="1" height="10">2021</td>
                                            <td rowspan="1" colspan="1" height="10">16,17<br></td>
                                            <td rowspan="1" colspan="1" height="10">4042<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Шахты</td>
                                            <td rowspan="1" colspan="1" height="10">1725</td>
                                            <td rowspan="1" colspan="1" height="10">13,8<br></td>
                                            <td rowspan="1" colspan="1" height="10">3450<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Энгельс</td>
                                            <td rowspan="1" colspan="1" height="10">2070</td>
                                            <td rowspan="1" colspan="1" height="10">16,56<br></td>
                                            <td rowspan="1" colspan="1" height="10">4140<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Югорск</td>
                                            <td rowspan="1" colspan="1" height="10">3133</td>
                                            <td rowspan="1" colspan="1" height="10">25,07<br></td>
                                            <td rowspan="1" colspan="1" height="10">6267<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Южно-Сахалинск</td>
                                            <td rowspan="1" colspan="1" height="10">4930</td>
                                            <td rowspan="1" colspan="1" height="10">39,44<br></td>
                                            <td rowspan="1" colspan="1" height="10">9860<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Южноуральск</td>
                                            <td rowspan="1" colspan="1" height="10">2716</td>
                                            <td rowspan="1" colspan="1" height="10">21,73<br></td>
                                            <td rowspan="1" colspan="1" height="10">5432<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Юрга</td>
                                            <td rowspan="1" colspan="1" height="10">3248</td>
                                            <td rowspan="1" colspan="1" height="10">25,99<br></td>
                                            <td rowspan="1" colspan="1" height="10">6497<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Юрюзань</td>
                                            <td rowspan="1" colspan="1" height="10">3090</td>
                                            <td rowspan="1" colspan="1" height="10">24,72<br></td>
                                            <td rowspan="1" colspan="1" height="10">6180<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Якутск</td>
                                            <td rowspan="1" colspan="1" height="10">7489</td>
                                            <td rowspan="1" colspan="1" height="10">59,91<br></td>
                                            <td rowspan="1" colspan="1" height="10">14977<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ялта</td>
                                            <td rowspan="1" colspan="1" height="10">3277</td>
                                            <td rowspan="1" colspan="1" height="10">26,22<br></td>
                                            <td rowspan="1" colspan="1" height="10">6555<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ялуторовск</td>
                                            <td rowspan="1" colspan="1" height="10">3004</td>
                                            <td rowspan="1" colspan="1" height="10">24,03<br></td>
                                            <td rowspan="1" colspan="1" height="10">6007<br></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1" colspan="1" align="left" height="10" width="290"> Ярославль</td>
                                            <td rowspan="1" colspan="1" height="10">1365</td>
                                            <td rowspan="1" colspan="1" height="10">10,92<br></td>
                                            <td rowspan="1" colspan="1" height="10">2730<br></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <b>Тариф на перевозку «от двери до терминала» и
                                        «от терминала до двери» в городах:</b><br>
                                    <table class="iksweb">
                                        <tbody>
                                        <tr>
                                            <td colspan="14">Внутригородская перевозка</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2" width="204">Наименование услуги</td>
                                            <td width="290">Объём, м3</td>
                                            <td>0 - 0,01</td>
                                            <td>0,01 - 0,1</td>
                                            <td>0,1 - 0,2</td>
                                            <td>&lt;1</td>
                                            <td>&lt;3</td>
                                            <td>&lt;5</td>
                                            <td>&lt;7</td>
                                            <td>&lt;10</td>
                                            <td>&lt;20</td>
                                            <td>&lt;30</td>
                                            <td>&lt;40</td>
                                            <td>&gt;40</td>
                                        </tr>
                                        <tr>
                                            <td width="290">Вес, кг</td>
                                            <td>0,1 - 2,5</td>
                                            <td>2,51 - 25</td>
                                            <td>25 - 50</td>
                                            <td>до 250</td>
                                            <td>до 750</td>
                                            <td>до 1250</td>
                                            <td>до 1750</td>
                                            <td>до 2500</td>
                                            <td>до 5000</td>
                                            <td>до 7500</td>
                                            <td>до 10000</td>
                                            <td>до 20000</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4" width="204"><b>ПО ГОРОДУ</b></td>
                                        </tr>
                                        <tr>
                                            <td align="left" width="290"> Москва (в пределах <b>МКАД</b>)</td>
                                            <td>240</td>
                                            <td>450</td>
                                            <td>700</td>
                                            <td>900</td>
                                            <td>1600</td>
                                            <td>2000</td>
                                            <td>3200</td>
                                            <td>5200</td>
                                            <td>6700</td>
                                            <td>8100</td>
                                            <td>8100</td>
                                            <td>12000</td>
                                        </tr>
                                        <tr>
                                            <td align="left" width="290"> СПб (в пределах <b>КАД</b>)<br></td>
                                            <td>240</td>
                                            <td>450</td>
                                            <td>600</td>
                                            <td>800</td>
                                            <td>1300</td>
                                            <td>1800</td>
                                            <td>2800</td>
                                            <td>4700</td>
                                            <td>6200</td>
                                            <td>8000</td>
                                            <td>8000</td>
                                            <td>10000</td>
                                        </tr>
                                        <tr>
                                            <td align="left" width="290"> Остальные города</td>
                                            <td rowspan="1" colspan="4">700</td>
                                            <td>1200</td>
                                            <td>1700</td>
                                            <td>2700</td>
                                            <td>4200</td>
                                            <td>5900</td>
                                            <td>7700</td>
                                            <td>7900</td>
                                            <td>9900</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </b></b> 1) Для доставки в гипермаркеты действует
                            единая наценка на доставку — 500 рублей. Она включает
                            1 час простоя и авизацию. </div>
                        2) Сдача груза в нерабочее время (после 18:00 и до 9:00)
                        только по предварительному согласоованию, надбавка к
                        тарифу 50%.</div>
                    3) При наличии ограничения по типу транспортного средства
                    (ТС) применяется минимальный тариф в соответствиеи с
                    объемом требуемого ТС. </div>
                <br>
                <b>Тариф за простой на адресе более 20 минут:</b><br>
                <table class="iksweb">
                    <tbody>
                    <tr>
                        <td colspan="6">Внутригородская перевозка</td>
                    </tr>
                    <tr>
                        <td rowspan="1" width="505">Грузоподъёмность ТС</td>
                        <td>0 - 0,5т</td>
                        <td>0,5 - 2т</td>
                        <td>2 - 5т</td>
                        <td>5 - 10т</td>
                        <td>10 - 20т</td>
                    </tr>
                    <tr>
                        <td rowspan="1" width="505">Стоимость <b>простоя</b>, ₽/час</td>
                        <td>500</td>
                        <td>700</td>
                        <td>850</td>
                        <td>1000</td>
                        <td>1500</td>
                    </tr>
                    </tbody>
                </table>
                <b><b> <b><b> </b></b></b></b></div>
            <b> <b><b> </b></b></b></div>
        <b> <b><b> </b></b></b></div>
    <b> <b><b> </b></b></b></div>
    <b> <b><b> </b></b></b> <b> <b><b>
@endsection
