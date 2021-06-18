<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invitation extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function order(){
        $this->belongsTo(order::class, 'pembeli_id', 'id');
    }
}
