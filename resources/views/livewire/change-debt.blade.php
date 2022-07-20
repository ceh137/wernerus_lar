<div class="p-7">
    <div class="font-semibold font-gray-700 text-2xl">{{ $confirmationTitle }}</div>

    <div class="py-2">
        @if($order->id)
            ID Заявки: {{ $order->id }}
            TrackNum: {{$trackNum}}
        @endif

        <div class=" my-4 font-normal text-gray-600">
            @php
                $order = \App\Models\Order::find($order->id);
            @endphp

            <div class="grid grid-cols-3 max-w-6xl">
                <div class="flex flex-col gap-3 ">
                    <h2 class="text-xl font-bold">{{$order->route->city_from->name}}</h2>
                    <h3 class="text-lg">Адрес: {{$order->address_from ?? "Терминал"}}</h3>
                    <h3 class="text-sm">Дата: {{$order->date_del_from_addr ?? "Не указана"}}</h3>
                    <h3 class="text-xl font-bold">Итого: {{$order->order_prices->total}}&#8381;</h3>
                </div>
                <div class="flex flex-column gap-3 text-xl font-bold">
                    @if($order->method->name == 'ЭКСПРЕСС') &#128640; @else &#128012; @endif <svg width="70" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                </div>
                <div class="flex flex-col gap-3 ">
                    <h2 class="text-xl font-bold">{{$order->route->city_to->name}}</h2>

                    <h3 class="text-lg">Адрес: {{$order->address_to ?? "Терминал"}}</h3>

                    <h3 class="text-sm">Дата: {{$order->date_del_to_addr ?? "Не указана"}}</h3>

                    <h3 class="text-sm"><b>Комментарий:</b> {{$order->comment ?? "Нет"}}</h3>
                </div>
                <div class="col-span-3 my-6">
                    <h3 class="text-lg font-bold">Параметры</h3>
                    <div class="grid grid-cols-5 gap-2">
                        <div class="abc">Вес: {{$order->weight}}&nbsp;кг</div>
                        <div class="abc">Обьем: {{$order->volume}}&nbsp;м<sup>3</sup></div>
                        <div class="abc">Самое тяжелое место: {{$order->heaviest}}&nbsp;кг</div>
                        <div class="abc">Самое длинное место: {{$order->longest}}&nbsp;см</div>
                        <div class="abc">Кол-во мест: {{$order->pieces}}&nbsp;шт</div>
                    </div>
                    <h3 class="text-lg mt-3 font-bold">Доп. Опции</h3>
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
                    <div class="grid grid-cols-3 gap-2">
                        <div class="flex flex-col">
                            <h2 class="text-lg font-bold">Отправитель</h2>
                            <ul class="list-inside list-disc">
                                @if($order->sender_company_id)
                                    <li>Компания: {{$order->sender_comp->name}}</li>
                                    <li>ИНН:  {{$order->sender_comp->INN}}</li>
                                @endif
                                <li>Имя: {{$order->sender->name}}</li>
                                <li>Телефон: {{$order->sender->telnum}}</li>
                                <li>Email: {{$order->sender->email}}</li>
                            </ul>
                            <h3 class="text-sm font-bold">Оплата</h3>
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
                        <div class="flex flex-col">
                            <h2 class="text-lg font-bold">Получатель</h2>
                            <ul class="list-inside list-disc">
                                @if($order->receiver_company_id)
                                    <li>Компания: {{$order->receiver_comp->name}}</li>
                                    <li>ИНН:  {{$order->receiver_comp->INN}}</li>
                                @endif
                                <li>Имя: {{$order->receiver->name}}</li>
                                <li>Телефон: {{$order->receiver->telnum}}</li>
                                <li>Email: {{$order->receiver->email}}</li>
                            </ul>
                            <h3 class="text-sm font-bold">Оплата</h3>
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
                            <div class="flex flex-col">
                                <h2 class="text-lg font-bold">Третье Лицо</h2>
                                <ul class="list-inside list-disc">
                                    @if($order->tp_company_id)
                                        <li>Компания: {{$order->tp_comp->name}}</li>
                                        <li>ИНН:  {{$order->tp_comp->INN}}</li>
                                    @endif
                                    <li>Имя: {{$order->tp->name}}</li>
                                    <li>Телефон: {{$order->tp->telnum}}</li>
                                    <li>Email: {{$order->tp->email}}</li>
                                </ul>
                                <h3 class="text-sm font-bold">Оплата</h3>
                                <ul class="list-inside list-disc mt-1">
                                    @if($order->who_pays->total == $order->sender->id)
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
            </div>
            <div class="grid grid-cols-2 gap-6">
                <div class="relative z-0 w-full mb-6 mx-4 group">
                <input type="number" wire:model="amount" name="amount" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
            </div>
                <div>
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Статус Задолженности</label>
                    <select id="countries" wire:model="debt_status_id" name="debt_status_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="null">Не выбран</option>
                        @foreach($debt_statuses as $debt_status)
                            <option value="{{ $debt_status->id }}">{{ $debt_status->name }}</option>
                        @endforeach

                    </select>
                </div>


            </div>

            <div class="space-x-2 flex justify-end mt-3">
                <button class="bg-gray-200 cursor-pointer text-black border border-gray-400 px-3 py-2 m-2 rounded text-lg"
                        wire:click="confirm">
                    Сохранить
                </button>
            </div>
        </div>
    </div>
</div>
