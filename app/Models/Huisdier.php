<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huisdier extends Model
{
    protected $table = 'huisdier';
    protected $primaryKey = 'huisdier_id';

    public function huisdier(){
        return $this->belongsTo('\App\Models\User', 'user_id','user_id');
    }
}
