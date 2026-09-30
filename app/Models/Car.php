<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Model;

#[Guarded()]
class Car extends Model
{
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function RepairRequests()
    {
        return $this->hasMany(RepairRequest::class);
    }
}
