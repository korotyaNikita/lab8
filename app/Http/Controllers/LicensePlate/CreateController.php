<?php

namespace App\Http\Controllers\LicensePlate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('license_plates.create');
    }
}
