<?php

namespace App\Http\Controllers\LicensePlate;

use App\Http\Controllers\Controller;
use App\Models\LicensePlate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DestroyController extends Controller
{
    public function __invoke(LicensePlate $licensePlate)
    {
        try {
            DB::beginTransaction();
            $licensePlate->delete();
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return redirect()->route('license_plates.index');
    }
}
