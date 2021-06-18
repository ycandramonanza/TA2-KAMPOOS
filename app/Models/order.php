<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function invitation(){
        $this->hasOne(invitation::class, 'order_id', 'id');
    }
    public function pembeli(){
        $this->belongsTo(pembeli::class, 'pembeli_id', 'id');
    }
}
