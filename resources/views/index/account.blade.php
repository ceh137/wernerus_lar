@extends('index.layouts.main')
@section('content')

    <div class="uk-container uk-margin-large uk-flex-around uk-padding-large">
        <div class="uk-card-large uk-card-default">

            <div class="uk-card-body uk-grid uk-background-muted"  style="border-radius: 10px;">
                <div class="uk-width-1-3">
                    <div class="uk-flex uk-flex-column uk-flex-middle">
                        <img class="uk-margin-bottom" src="https://img.icons8.com/dotty/160/undefined/user.png"/>

{{--                        <button class="uk-button uk-button-small uk-button-secondary uk-margin-bottom">Изменить инфо</button>--}}
{{--                        <button class="uk-button uk-button-small uk-button-danger">Изменить пароль</button>--}}
                    </div>
                </div>
                <div class="uk-width-2-3">
                    <div class="uk-grid">
                        <div class="uk-width-2-3">
                            <h4 class="uk-text-bold uk-text-large">{{ auth()->user()->name }}</h4>
                            <ul class="uk-list uk-list-disc">
                                <li>ИНН: 7707070707</li>
                                <li>Компания: ООО "КККУ"</li>
                                <li>Тел.: {{ auth()->user()->telnum }}</li>
                                <li>Email: {{ auth()->user()->email }}</li>
                            </ul>
                        </div>
                        <div class="uk-width-1-3">

                        </div>
                    </div>
                </div>
                <div class="uk-container uk-margin-large-top">
                    <ul uk-accordion>
                        @foreach($orders as $order)
                        <li class="">
                            <a class="uk-accordion-title" href="#">@if($order->order_num)<b> {{$order->order_num}}</b> | @endif {{$order->route->city_from->name}} &#8594; {{$order->route->city_to->name}}  |  {{ $order->created_at }} | Итого: {{ $order->order_prices->total }} &#8381; | <b> {{$order->status->name}}</b></a>
                            <div class="uk-accordion-content">
                                <div class="text-sm font-bold my-2">{{$order->created_at}}</div>
                                <div class="uk-grid">
                                    <div class="uk-flex uk-flex-column">
                                        <span class="uk-text-large font-bold">{{$order->route->city_from->name}}</span>
                                        <span class="uk-text-default">Адрес: {{$order->address_from ?? "Терминал"}}</span>
                                        <span class="uk-text-default">Дата: {{$order->date_del_from_addr ?? "Не указана"}}</span>
                                        <h6 class="uk-text-large font-bold">Итого: {{$order->order_prices->total}}&#8381;</h6>
                                    </div>
                                    <div class="flex flex-column gap-3 text-xl font-bold">
                                        @if($order->method->name == 'ЭКСПРЕСС') &#128640; @else &#128012; @endif <svg width="70" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                                    </div>
                                    <div class="uk-flex uk-flex-column">
                                        <span class="uk-text-large font-bold">{{$order->route->city_to->name}}</span>

                                        <span class="uk-text-default">Адрес: {{$order->address_to ?? "Терминал"}}</span>

                                        <span class="uk-text-default">Дата: {{$order->date_del_to_addr ?? "Не указана"}}</span>

                                        <h6 class="uk-text-default"><b>Комментарий:</b> {{$order->comment ?? "Нет"}}</h6>
                                    </div>
                                </div>
                                    <div class="uk-grid">
                                        <h3 class="text-lg font-bold">Параметры:</h3>
                                        <div class="grid grid-cols-5 gap-2">
                                            <div class="abc">Вес: {{$order->weight}}&nbsp;кг</div>
                                            <div class="abc">Обьем: {{$order->volume}}&nbsp;м<sup>3</sup></div>
                                            <div class="abc">Самое тяжелое место: {{$order->heaviest}}&nbsp;кг</div>
                                            <div class="abc">Самое длинное место: {{$order->longest}}&nbsp;см</div>
                                            <div class="abc">Кол-во мест: {{$order->pieces}}&nbsp;шт</div>
                                        </div>
                                        <h3 class="text-lg mt-3 font-bold">Доп. Опции:</h3>
                                        <div class="grid grid-cols-8 gap-2">
                                            <div class="abc">Доставка до адреса: <b>{{$order->to_addr ? "ДА" : "НЕТ"}}</b> </div>
                                            <div class="abc">Забор груза: <b>{{$order->to_addr ? "ДА" : "НЕТ"}}</b> </div>
                                            <div class="abc">Стрейч: <b>{{$order->stretch_pac ? "ДА" : "НЕТ"}}</b> </div>
                                            <div class="abc">Паллет: <b>{{$order->bort_pac ? "ДА" : "НЕТ"}}</b> </div>
                                            <div class="abc">Жестк. упак: <b>{{$order->rig_pac ? "ДА" : "НЕТ"}}</b> </div>
                                            <div class="abc">ПРР при дост: <b>{{$order->prr_to_addr ? "ДА" : "НЕТ"}}</b> </div>
                                            <div class="abc">ПРР при заборе: <b>{{$order->prr_from_addr ? "ДА" : "НЕТ"}}</b> </div>
                                            <div class="abc">Страховка: <b>{{$order->insurance ? "ДА" : "НЕТ"}} Ценность: {{$order->worth}}&#8381;</b> </div>
                                        </div>
                                    </div>
                                    <div class="col-span-3 my-6">
                                        <div class="uk-margin-large-top uk-grid">
                                            <div class="uk-flex uk-flex-column">
                                                <span class="uk-text-large"><b>Отправитель</b></span>
                                                <ul class="list-inside list-disc">
                                                    @if($order->sender_company_id)
                                                        <li>Компания: {{$order->sender_comp->name}}</li>
                                                        <li>ИНН:  {{$order->sender_comp->INN}}</li>
                                                    @endif
                                                    <li>Имя: {{$order->sender->name}}</li>
                                                    <li>Телефон: {{$order->sender->telnum}}</li>
                                                    <li>Email: {{$order->sender->email}}</li>
                                                </ul>
                                                <span class="uk-text-large font-bold">Оплата</span>
                                                <ul class="list-inside list-disc mt-1">
                                                    @if($order->who_pays->total == $order->sender->id)
                                                        <li>
                                                            За все: {{$order->order_prices->total}}&#8381;
                                                        </li>
                                                    @endif
                                                    @if($order->who_pays->TT == $order->sender->id)
                                                        <li>
                                                            За ТТ: {{$order->order_prices->TT_price}}&#8381;
                                                        </li>
                                                    @endif
                                                    @if($order->who_pays->to_addr == $order->sender->id)
                                                        <li>
                                                            За дост. до адреса: {{$order->order_prices->to_addr_price}}&#8381;
                                                        </li>
                                                    @endif
                                                    @if($order->who_pays->from_addr == $order->sender->id)
                                                        <li>
                                                            За забор с адреса: {{$order->order_prices->from_addr_price}}&#8381;
                                                        </li>
                                                    @endif
                                                    @if($order->who_pays->package == $order->sender->id)
                                                        <li>
                                                            За упаковку: {{$order->order_prices->pac_price}}&#8381;
                                                        </li>
                                                    @endif
                                                    @if($order->who_pays->insurance == $order->sender->id)
                                                        <li>
                                                            За страховку: {{$order->order_prices->insurance_price}}&#8381;
                                                        </li>
                                                    @endif
                                                    @if($order->who_pays->prr_to_addr == $order->sender->id)
                                                        <li>
                                                            За ПРР при доставке: {{$order->order_prices->prr_to_addr_price}}&#8381;
                                                        </li>
                                                    @endif
                                                    @if($order->who_pays->prr_from_addr == $order->sender->id)
                                                        <li>
                                                            За ПРР при заборе: {{$order->order_prices->prr_from_addr_price}}&#8381;
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                            <div class="uk-flex uk-flex-column">
                                                <span class="uk-text-large"><b>Получатель</b></span>
                                                <ul class="list-inside list-disc">
                                                    @if($order->receiver_company_id)
                                                        <li>Компания: {{$order->receiver_comp->name}}</li>
                                                        <li>ИНН:  {{$order->receiver_comp->INN}}</li>
                                                    @endif
                                                    <li>Имя: {{$order->receiver->name}}</li>
                                                    <li>Телефон: {{$order->receiver->telnum}}</li>
                                                    <li>Email: {{$order->receiver->email}}</li>
                                                </ul>
                                                <span class="uk-text-large">Оплата</span>
                                                <ul class="list-inside list-disc mt-1">
                                                    @if($order->who_pays->total == $order->receiver->id)
                                                        <li>
                                                            За все: {{$order->order_prices->total}}&#8381;
                                                        </li>
                                                    @endif
                                                    @if($order->who_pays->TT == $order->receiver->id)
                                                        <li>
                                                            За ТТ: {{$order->order_prices->TT_price}}&#8381;
                                                        </li>
                                                    @endif
                                                    @if($order->who_pays->to_addr == $order->receiver->id)
                                                        <li>
                                                            За дост. до адреса: {{$order->order_prices->to_addr_price}}&#8381;
                                                        </li>
                                                    @endif
                                                    @if($order->who_pays->from_addr == $order->receiver->id)
                                                        <li>
                                                            За забор с адреса: {{$order->order_prices->from_addr_price}}&#8381;
                                                        </li>
                                                    @endif
                                                    @if($order->who_pays->package == $order->receiver->id)
                                                        <li>
                                                            За упаковку: {{$order->order_prices->pac_price}}&#8381;
                                                        </li>
                                                    @endif
                                                    @if($order->who_pays->insurance == $order->receiver->id)
                                                        <li>
                                                            За страховку: {{$order->order_prices->insurance_price}}&#8381;
                                                        </li>
                                                    @endif
                                                    @if($order->who_pays->prr_to_addr == $order->receiver->id)
                                                        <li>
                                                            За ПРР при доставке: {{$order->order_prices->prr_to_addr_price}}&#8381;
                                                        </li>
                                                    @endif
                                                    @if($order->who_pays->prr_from_addr == $order->receiver->id)
                                                        <li>
                                                            За ПРР при заборе: {{$order->order_prices->prr_from_addr_price}}&#8381;
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                            @if($order->tp_id)
                                                <div class="uk-flex uk-flex-column">
                                                    <span class="uk-text-large"><b>Третье Лицо</b></span>
                                                    <ul class="list-inside list-disc">
                                                        @if($order->tp_company_id)
                                                            <li>Компания: {{$order->tp_comp->name}}</li>
                                                            <li>ИНН:  {{$order->tp_comp->INN}}</li>
                                                        @endif
                                                        <li>Имя: {{$order->tp->name}}</li>
                                                        <li>Телефон: {{$order->tp->telnum}}</li>
                                                        <li>Email: {{$order->tp->email}}</li>
                                                    </ul>
                                                    <span class="uk-text-large">Оплата</span>
                                                    <ul class="list-inside list-disc mt-1">
                                                        @if($order->who_pays->total == $order->tp->id)
                                                            <li>
                                                                За все: {{$order->order_prices->total}}&#8381;
                                                            </li>
                                                        @endif
                                                        @if($order->who_pays->TT == $order->tp->id)
                                                            <li>
                                                                За ТТ: {{$order->order_prices->TT_price}}&#8381;
                                                            </li>
                                                        @endif
                                                        @if($order->who_pays->to_addr == $order->tp->id)
                                                            <li>
                                                                За дост. до адреса: {{$order->order_prices->to_addr_price}}&#8381;
                                                            </li>
                                                        @endif
                                                        @if($order->who_pays->from_addr == $order->tp->id)
                                                            <li>
                                                                За забор с адреса: {{$order->order_prices->from_addr_price}}&#8381;
                                                            </li>
                                                        @endif
                                                        @if($order->who_pays->package == $order->tp->id)
                                                            <li>
                                                                За упаковку: {{$order->order_prices->pac_price}}&#8381;
                                                            </li>
                                                        @endif
                                                        @if($order->who_pays->insurance == $order->tp->id)
                                                            <li>
                                                                За страховку: {{$order->order_prices->insurance_price}}&#8381;
                                                            </li>
                                                        @endif
                                                        @if($order->who_pays->prr_to_addr == $order->tp->id)
                                                            <li>
                                                                За ПРР при доставке: {{$order->order_prices->prr_to_addr_price}}&#8381;
                                                            </li>
                                                        @endif
                                                        @if($order->who_pays->prr_from_addr == $order->tp->id)
                                                            <li>
                                                                За ПРР при заборе: {{$order->order_prices->prr_from_addr_price}}&#8381;
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                <hr>
                                </div>

                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>

        </div>

    </div>

@endsection
