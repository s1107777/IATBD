<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huis extends Model
{
    protected $table = 'huis';
    protected $primaryKey = 'huis_id';

    public function huis(){
        return $this->belongsTo('\App\Models\User', 'user_id','user_id');
    }
}
