<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['id','Name','Mobile','owner_id','Work','status','Complete_Date','Amount'];
}
