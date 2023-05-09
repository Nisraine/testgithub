<?php

namespace App\Http\Controllers\visitors;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class restaurant_vController extends Controller
{
    public function index()
    {

        $restaurant = Restaurant::all();
        return view(
            'visitors.listrestaurant',
            [
                'restaurant' => $restaurant
            ]
        );
    }

    public function show(Restaurant $restaurant)
    {
        return view(
            'visitors.rest_index',
            [
                'restaurant' => $restaurant
            ]
        );
    }

    public function filterrest(Request $request)
    {

        isset($request->adresse) ? $rest_adrs = $request->adresse : $rest_adrs = '%';

        $restaurant = Restaurant::where('adresse', 'LIKE', '%' . $rest_adrs . '%')
            ->get();

        return view(
            'visitors.listrestaurant',
            [
                'restaurant' => $restaurant

            ]
        );
    }
}
