<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $table = 'university_master';
    protected $primaryKey = 'university_id';

    protected $fillable = [
        'country_id',
        'university_name',
        'university_logo',
        'university_address',
        'university_city',
        'university_state',
        'iStatus',
        'isDelete',
    ];

    public $timestamps = true;

    // Relationship (for country dropdown)
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
