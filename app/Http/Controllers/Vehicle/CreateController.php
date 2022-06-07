<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Controllers\Controller;
use App\Models\LicensePlate;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        try {
            $licensePlates = LicensePlate::all();
        } catch (\Exception $exception) {
            abort(500);
        }
        return view('vehicles.create', compact('licensePlates'));
    }
}
