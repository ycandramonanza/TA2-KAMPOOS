<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invitation extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(){
       return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function order(){
       return $this->belongsTo(order::class, 'order_id', 'id');
    }
    public function undangan(){
      return $this->hasOne(undangan::class, 'invitation_id', 'id');
   }

}
