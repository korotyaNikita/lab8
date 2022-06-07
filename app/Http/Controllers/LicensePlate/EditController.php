<?php

namespace App\Http\Controllers\LicensePlate;

use App\Http\Controllers\Controller;
use App\Models\LicensePlate;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(LicensePlate $licensePlate)
    {
        return view('license_plates.edit', compact('licensePlate'));
    }
}
