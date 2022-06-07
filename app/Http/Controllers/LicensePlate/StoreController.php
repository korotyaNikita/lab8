<?php

namespace App\Http\Controllers\LicensePlate;

use App\Http\Controllers\Controller;
use App\Http\Requests\LicensePlate\StoreRequest;
use App\Models\LicensePlate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->validated();
            LicensePlate::create($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return redirect()->route('license_plates.index');
    }
}
