<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'visitors';
    protected $fillable = [
        'ip_address',
        'user_agent',
        'visit_date',
    ];
    protected $dates = ['visit_date'];
}
