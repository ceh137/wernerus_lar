@extends('index.layouts.main')
@section('content')
    <div class="uk-section uk-section-muted"
         uk-height-viewport="offset-top: true;">
        <div class="uk-container">
            <div class="uk-h1 sec-ttl">Заказ: {{$order_num}}</div>
            <div class="uk-container uk-margin-large-top uk-text-center">
                @if($errors->any())
                    <h1>Извините, заказ № {{$order_num}} не был найден. <br>Удоставерьтесь, что номер заказа был введен верно</h1>
                @else
                    <progress class="uk-progress progress-blue"
                              value="@if($order->status_id == 2) 7
                              @elseif($order->status_id == 3) 27
                              @elseif($order->status_id == 4) 53
                              @elseif($order->status_id == 5) 76
                              @elseif($order->status_id == 6) 100
                              @endif
                              "
                              max="100"></progress>
                    <div class="uk-flex uk-flex-around">
                        <div>Заказ получен</div>
                        <div>Груз ожидает отправления</div>
                        <div>На пути в город назначения</div>
                        <div>В городе назначения</div>
                        <div>Доставлен</div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
