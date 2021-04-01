<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huisdier extends Model
{
    protected $table = 'huisdier';

    public function huisdier(){
        return $this->belongsTo('\App\Moels\User', 'user_id','user_id')
    }
}
