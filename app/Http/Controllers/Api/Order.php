<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Builder;

class Order extends Controller
{
    public function cities_to(Request $request) {
        try {
            return City::query()
                ->select('id', 'name')
                ->orderBy('name')
                ->when(
                    $request->search,
                    fn (Builder $query) => $query
                        ->where('name', 'like', "%{$request->search}%")
                )
                ->when(
                    $request->selected,
                    fn (Builder $query) => $query->whereIn('id', $request->selected),
                    fn (Builder $query) => $query->limit(10)
                )
                ->get()->toArray();
        } catch (\Exception $e) {
            return $e->getMessage();
        }




    }
    public function cities_from(Request $request) {
        try {
            return City::query()
                ->where('code', '=', 'MSK')
                ->orWhere('code', '=', 'SPB')
                ->select('id', 'name')
                ->orderBy('name')
                ->when(
                    $request->search,
                    fn (Builder $query) => $query
                        ->where('name', 'like', "%{$request->search}%")
                )
                ->when(
                    $request->selected,
                    fn (Builder $query) => $query->whereIn('id', $request->selected),
                    fn (Builder $query) => $query->limit(10)
                )
                ->get()->toArray();
        } catch (\Exception $e) {
            return $e->getMessage();
        }




    }
}
