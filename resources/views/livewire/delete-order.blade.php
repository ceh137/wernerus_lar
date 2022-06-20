<div class="p-7">
    <div class="font-semibold font-gray-700 text-2xl">{{ $confirmationTitle }}</div>

    <div class="py-2">
        @if($order->id)
            ID Заказа: {{ $order->id }}
        @endif

        <div class=" my-4 font-normal text-gray-600">{{ $confirmationDescription }}</div>
        <div class="space-x-2 flex justify-end mt-3">
            <button class="bg-gray-200 cursor-pointer text-black border border-gray-400 px-3 py-2 m-2 rounded text-lg"
                    wire:click="cancel">
                Отменить
            </button>
            <button class="bg-red-500 cursor-pointer text-white px-3 py-2 m-2 rounded text-lg"
                    wire:click="confirm">
                Удалить
            </button>
        </div>
    </div>

</div>
