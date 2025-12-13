<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country_master';
    protected $primaryKey = 'country_id';

    protected $fillable = [
        'country_name',
        'iStatus',
        'isDelete',
    ];

    public $timestamps = true;

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
