<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Vehicle $vehicle)
    {
        return view('vehicles.show', compact('vehicle'));
    }
}
