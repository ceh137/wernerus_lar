<div class="p-7">
    <div class="font-semibold font-gray-700 text-2xl">{{ $confirmationTitle }}</div>
    <div class="py-2">


            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input wire:change="search" wire:model="order_id" type="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Введите номер заказа" required>
                <button wire:click="search" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Поиск</button>
            </div>

        <hr class="hr">

        <div class="container mx-auto px-6">
            <ul>
                @if($loading)
                    <li class="my-4">
                        <a href="#" class="block p-6  bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <div role="status" class="max-w-sm animate-pulse">
                                <div class="h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4"></div>
                                <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[360px] mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5"></div>
                            </div>
                        </a>
                    </li>
                    <li class="my-4">
                        <a href="#" class="block p-6  bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <div role="status" class="max-w-sm animate-pulse">
                                <div class="h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4"></div>
                                <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[360px] mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5"></div>
                            </div>
                        </a>
                    </li>
                    <li class="my-4">
                        <a href="#" class="block p-6  bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <div role="status" class="max-w-sm animate-pulse">
                                <div class="h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4"></div>
                                <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[360px] mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5"></div>
                            </div>
                        </a>
                    </li>

                @else
                    @forelse($orders as $order)
                        <li class="my-4">
                            <a wire:click='$emit("openModal", "change-debt", {{ json_encode(["id" => $order->debt->id ?: 1]) }})' class="block p-6  bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                <div role="status" class="max-w-sm animate-pulse">
                                    <div class="text-2xl text-black text-gray-900  w-48 mb-4">{{ $order->order_num }}</div>
                                    <div class="h-2 flex  max-w-[360px] mb-2.5">
                                        <div> {{$order->route->city_to->name}}</div>
                                        <div class="flex justify-center mx-4 ">

                                            <div class="mr-3">
                                                @if($order->method->name == 'ЭКСПРЕСС')
                                                    &#128640;
                                                @else
                                                    &#128012;
                                                @endif
                                            </div>

                                            <div>
                                                <svg width="35" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                                            </div>

                                        </div>
                                        <div>{{$order->route->city_from->name}}</div>

                                    </div>
                                    <div class="h-2 mb-2.5">

                                    </div>
                                </div>
                            </a>
                        </li>

                    @empty

                            <li class="my-4">
                                <div class="text-2xl text-center mx-8 text-gray-400">
                                    Ничего не найдено
                                </div>
                            </li>
                    @endforelse
                @endif

            </ul>
        </div>
    </div>
</div>
