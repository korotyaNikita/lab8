<?php

namespace App\Http\Controllers\LicensePlate;

use App\Http\Controllers\Controller;
use App\Http\Requests\LicensePlate\UpdateRequest;
use App\Models\LicensePlate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, LicensePlate $licensePlate)
    {
        try {
            DB::beginTransaction();
            $data = $request->validated();
            $licensePlate->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return redirect()->route('license_plates.index');
    }
}
