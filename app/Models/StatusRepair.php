<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatusRepair extends Model
{
    use HasFactory;
    use SoftDeletes;


public function statusRepair()
{
    return $this->belongsTo(Status::class, 'id','name');
}

}