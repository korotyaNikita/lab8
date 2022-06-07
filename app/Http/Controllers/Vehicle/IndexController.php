<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        try {
            $perPage = $request->get('perPage', 2);
            $vehicles = Vehicle::paginate($perPage);
        } catch (\Exception $exception) {
            abort(500);
        }
        return view('vehicles.index', compact('vehicles', 'perPage'));
    }
}
