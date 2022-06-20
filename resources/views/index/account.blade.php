@extends('index.layouts.main')
@section('content')

    <div class="uk-container uk-margin-large uk-flex-around uk-padding-large">
        <div class="uk-card-large uk-card-default">

            <div class="uk-card-body uk-grid uk-background-muted"  style="border-radius: 10px;">
                <div class="uk-width-1-3">
                    <div class="uk-flex uk-flex-column uk-flex-middle">
                        <img class="uk-margin-bottom" src="https://img.icons8.com/dotty/160/undefined/user.png"/>

                        <button class="uk-button uk-button-small uk-button-secondary uk-margin-bottom">Изменить инфо</button>
                        <button class="uk-button uk-button-small uk-button-danger">Изменить пароль</button>
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
                            <a class="uk-accordion-title" href="#">@if($order->order_code)<b> {{$order->order_code}}</b> | @endif {{$order->route->city_from->name}} &#8594; {{$order->route->city_to->name}}  |  {{ $order->created_at }} | Итого: {{ $order->order_prices->total }} &#8381; | <b> {{$order->status->name}}</b></a>
                            <div class="uk-accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>

        </div>

    </div>

@endsection
