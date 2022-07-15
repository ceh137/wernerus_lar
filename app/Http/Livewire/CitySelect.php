<?php

namespace App\Http\Livewire;

use App\Models\City;
use Asantibanez\LivewireSelect\LivewireSelect;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class CitySelect extends LivewireSelect
{
    public function render()
    {
        return view('livewire.city-select');
    }

    public function options($searchTerm = null) : Collection
    {
         return  City::all()->map(function (City $item) {
            return [ 'value' =>  $item->id, 'description' => $item->name];
        });
    }

    public function selectedOption($value)
    {
        $city = City::find($value);

        return [
            'value' => optional($city)->id,
            'description' => optional($city)->name
        ];
    }
}
