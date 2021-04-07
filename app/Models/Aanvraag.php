<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aanvraag extends Model
{
    protected $table = 'aanvraag';
    protected $primaryKey = 'aanvraag_id';
    public $timestamps = false;

    public function aanvraag(){
        return $this->belongsTo('\App\Models\UserOppas', 'userOppas_id','userOppas_id');
    }
}
