<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
    protected $primaryKey = 'owner_id';
    protected $fillable = ['owner_id','progress','redy','due','delivered'];
}
