@extends('index.layouts.main')
@section('content')
<div id="section-order" class="uk-section uk-section-muted" uk-height-viewport="offset-top: true;">
    <div class="uk-container">
        <div class="uk-h1 sec-ttl">Рассчитать</div>
        <div class="tm-grid-expand uk-grid-medium uk-flex-bottom uk-grid-margin uk-grid" uk-grid>
            <index-calc>
                {{ csrf_field() }}
            </index-calc>
            <div class="uk-grid-item-match banners-grid uk-width-expand@m">
                <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-2@m uk-flex-center" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="el-image"><img alt="" src="/images/banner-01.jpg"></div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="el-image"><img alt="" src="/images/banner-02.jpg"></div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="el-image"><img alt="" src="/images/banner-03.jpg"></div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="el-image"><img alt="" src="/images/banner-04.jpg"></div>
                        </div>
                    </div>
                </div>
                <div class="search-widget">
                    <div class="uk-grid-default uk-grid" uk-grid>
                        <div class="uk-grid-item-match uk-flex-middle uk-width-small@m">
                            <div class="form-ttl">Отследить груз</div>
                        </div>
                        <div class="uk-grid-item-match uk-width-expand@m">
                            <form class="uk-search uk-search-default uk-flex">
                                <input class="uk-search-input" type="search" placeholder="Номер отправления 200******">
                                <button class="uk-button uk-button-primary" type="submit">Найти</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;Оформление Завки на сайте <b>БЕСПЛАТНО</b>!<br>
    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp; Оформление Заявок на Терминале отнимает время и <b>50</b>руб.<br>
</div>
<div id="section-02" class="uk-section uk-section-large">
    <div class="uk-container">
        <div class="tm-grid-expand uk-grid-medium uk-flex-top uk-grid-margin uk-grid" uk-grid>
            <div class="uk-grid-item-match uk-flex-middle uk-width-large@m">
                <div class="uk-h2 sec-ttl">Почему стоит <span><b>выбрать Нас</b> ?</span></div>
            </div>
            <div class="uk-grid-item-match uk-width-expand@m">
                <div class="uk-grid-medium uk-child-width-1-1 grid-our-advantages uk-child-width-1-2@m uk-flex-center" uk-height-match="target: > div > .uk-card" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="el-meta">01</div>
                            <div class="el-title">Экономно:</div>
                            <div class="el-text">
                                <ul class="uk-list uk-list-disc">
                                    <li>Тариф на 40-60% ниже конкурентов</li>
                                    <li>Никаких скрытых платежей</li>
                                    <li>Платите за самое нужное</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="el-meta">02</div>
                            <div class="el-title">Безопасно:</div>
                            <div class="el-text">
                                <ul class="uk-list uk-list-disc">
                                    <li>Все грузы застрахованы</li>
                                    <li>Современный транспорт</li>
                                    <li>Онлайн статус каждого заказа</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="el-meta">03</div>
                            <div class="el-title">Быстро:</div>
                            <div class="el-text">
                                <ul class="uk-list uk-list-disc">
                                    <li>Отправки 6 дней в неделю</li>
                                    <li>Доставка по расписанию</li>
                                    <li>Экспресс 12 часов</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="el-meta">04</div>
                            <div class="el-title">Удобно:</div>
                            <div class="el-text">
                                <ul class="uk-list uk-list-disc">
                                    <li>Получение по смс</li>
                                    <li>Приём и выдача за 7 мин</li>
                                    <li>@ Документооборот</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
