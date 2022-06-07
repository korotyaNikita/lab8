<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'vehicles';
    protected $guarded = false;
    public $timestamps = false;

    public function licensePlate() {
        return $this->belongsTo(LicensePlate::class, 'license_plate', 'id');
    }
}
