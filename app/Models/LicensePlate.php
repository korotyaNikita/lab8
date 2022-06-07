<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LicensePlate extends Model
{
    use HasFactory;

    protected $table = 'license_plates';
    public $timestamps = false;

    protected $fillable = [
        'license_plate',
    ];

    public function vehicles() {
        return $this->hasMany(Vehicle::class, 'license_plate', 'id');
    }
}
