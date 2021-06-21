<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $guarded = [];

    // public function pembeli(){
    //     return $this->belongsTo(pembeli::class, 'pembeli_id', 'id');
    // }
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function invitation(){
        return  $this->hasOne(invitation::class, 'order_id', 'id');
     }
}
