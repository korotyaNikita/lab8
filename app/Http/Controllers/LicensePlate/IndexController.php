<?php

namespace App\Http\Controllers\LicensePlate;

use App\Http\Controllers\Controller;
use App\Models\LicensePlate;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        try {
            $perPage = $request->get('perPage', 2);
            $licensePlates = LicensePlate::paginate($perPage);
        } catch (\Exception $exception) {
            abort(500);
        }
        return view('license_plates.index', compact('licensePlates', 'perPage'));
    }
}
