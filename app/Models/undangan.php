<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class undangan extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function invitation(){
        return $this->belongsTo(invitation::class, 'invitation_id', 'id');
     }
}
