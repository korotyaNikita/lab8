<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Controllers\Controller;
use App\Models\LicensePlate;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Vehicle $vehicle)
    {
        try {
            $licensePlates = LicensePlate::all();
        } catch (\Exception $exception) {
            abort(500);
        }
        return view('vehicles.edit', compact('vehicle', 'licensePlates'));
    }
}
