<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\LicensePlate;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        try {
            $data['licensePlatesCount'] = LicensePlate::all()->count();
            $data['vehiclesCount'] = Vehicle::all()->count();
        } catch (\Exception $exception) {
            abort(500);
        }
        return view('main.index', compact('data'));
    }
}
