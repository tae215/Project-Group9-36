<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $primaryKey = 'id_menu';

    public function type()
    {
        return $this->belongsTo(types::class, 'id_types');
    }
}
