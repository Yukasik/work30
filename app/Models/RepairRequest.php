<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Model;

#[Guarded()]
class RepairRequest extends Model
{
    protected $fillable = [
        'problem_description',
        'status',
        'repair_date',
        'car_id',
        'user_id',
    ];
    
    public function Car()
    {
        return $this->belongsTo(Car::class);
    }

}
