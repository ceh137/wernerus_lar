@extends('index.layouts.main')
@section('content')
    <div class="uk-section uk-section-muted"
         uk-height-viewport="offset-top: true;">
        <div class="uk-container">
            <div class="uk-h1 sec-ttl">Контакты</div>
            <div class="card__block card__header">География терминалов</div>
            <article>
                <div style="max-width: 1012px;">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3a0f0ee8b8a3ac3f9c927f2dc5138f64889563f50205480cc529de22969e5a61&width= 100%&height=451&lang=ru_RU&scroll=true"></script>
                </div>
            </article>
            <p>
            </p>
            <button1 style="cursor: pointer" id = "l1" onclick = "Func()" class="card__block card__header">Москва</button1>
            <p style="display: none">
                <span style="color:#5BC3EB">Складской комплекс в Москве</span>
                <br>
                <br>
                Московская область, Каширское шоссе, с229
                <br>
                <br>
                <span class="card__accent">Время работы:</span>
                <br>
                Пн&nbsp;— Пт: c 09:00 до 20:00<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Сб: по звонку<br>
                <br>
                <a class="card__link" href="tel:88006003055">8 (800) 600-30-55</a>
                <br>
                <a class="card__link"
                   href="mailto:info@wernerus.ru">info@wernerus.ru</a>
                <br>
            </p>
            <script>
                let button1 = document.getElementById('l1');
                button1.onclick = function(){
                    this.nextElementSibling.style.display = this.nextElementSibling.style.display == 'none' ? 'block' : 'none' ;
                }
            </script>
            <br>
            <br>
            <button2 style="cursor: pointer" id = "l2" onclick = "Func()" class="card__block card__header">Санкт-Петербург</button2>
            <p style="display: none">
<span style="color:#5BC3EB">Складской
комплекс в Санкт-Петербурге</span>
                <br>
                <br>
                Санкт-Петербург, посёлок Шушары, 1-й Бадаевский
                проезд, д. 9В
                <br>
                <br>
                <span class="card__accent">Время работы:</span>
                <br>
                Пн&nbsp;— Пт: c 09:00 до 20:00<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Сб: по звонку<br>
                <br>
                <a class="card__link" href="tel:88006003055">8
                    (800) 600-30-55</a>
                <br>
                <a class="card__link"
                   href="mailto:info@wernerus.ru">info@wernerus.ru</a>
                <br>
                <br>
                <span style="color:#5BC3EB">Доп. офис по приёму и выдаче отправлений до 50&nbsp;кг</span>
                <br>
                <br>
                Магнитогорская улица, д. 23, к. 1,
                БЦ&nbsp;«Магнитка»
                <br>
                Здесь можно сдать и получить грузы весом до
                50&nbsp;кг
                <span>
<br>
<br>
<span class="card__accent">Время работы:</span>
<br>
Пн&nbsp;—&nbsp;Пт: c 10:00 до 18:00</span>
                <br>
                <br>
                <a class="card__link" href="tel:88006003055">8 (800) 600-30-55</a>
                <br>
                <a class="card__link"
                   href="mailto:info@wernerus.ru">info@wernerus.ru</a>
                <br>
            </p>
            <script>
                let button2 = document.getElementById('l2');
                button2.onclick = function(){
                    this.nextElementSibling.style.display = this.nextElementSibling.style.display == 'none' ? 'block' : 'none' ;
                }
            </script>
            <br>
            <br>
            <button3 style="cursor: pointer" id = "l3" onclick = "Func()" class="card__block card__header">Улан-Удэ</button3>
            <p style="display: none">
                <span style="color:#5BC3EB">Складской комплекс в Улан-Удэ</span>
                <br>
                <br>
                670013, Улан-Удэ ,  ул. Бограда, 73
                <br>
                <br>
                <span class="card__accent">Время работы:</span>
                <br>
                Пн&nbsp;— Пт: c 10:00 до 18:00<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Сб: c 10:00 до 16:00<br>
                <br>
                <a class="card__link" href="tel:88006003055">8 (800) 600-30-55</a>
                <br>
                <a class="card__link"
                   href="mailto:info@wernerus.ru">info@wernerus.ru</a>
                <br>
            </p>
            <script>
                let button3 = document.getElementById('l3');
                button3.onclick = function(){
                    this.nextElementSibling.style.display = this.nextElementSibling.style.display == 'none' ? 'block' : 'none' ;
                }
            </script>
            <br>
            <br>
            <button4 style="cursor: pointer" id = "l4" onclick = "Func()" class="card__block card__header">Красноярск</button4>
            <p style="display: none">
                <span style="color:#5BC3EB">Складской комплекс в Красноярске</span>
                <br>
                <br>
                Красноярск,  пос. Солонцы, Торговый квартал, 5 стр 1
                <br>
                <br>
                <span class="card__accent">Время работы:</span>
                <br>
                Пн&nbsp;— Пт: c 10:00 до 18:00<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Сб: c 10:00 до 16:00<br>
                <br>
                <a class="card__link" href="tel:88006003055">8 (800) 600-30-55</a>
                <br>
                <a class="card__link"
                   href="mailto:info@wernerus.ru">info@wernerus.ru</a>
                <br>
            </p>
            <script>
                let button4 = document.getElementById('l4');
                button4.onclick = function(){
                    this.nextElementSibling.style.display = this.nextElementSibling.style.display == 'none' ? 'block' : 'none' ;
                }
            </script>
        </div>
    </div>
@endsection
