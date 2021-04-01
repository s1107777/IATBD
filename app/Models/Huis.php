<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huis extends Model
{
    protected $table = 'huis';

    public function huis(){
        return $this->belongsTo('\App\Moels\UserOppas', 'userOppas_id','userOppas_id')
    }
}
