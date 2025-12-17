<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table = 'faculty_master';
    protected $primaryKey = 'faculty_id';

    protected $fillable = [
        'faculty_name',
        'country_id',
        'university_id',
        'iStatus',
        'isDelete',
    ];

    public $timestamps = true;

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
    public function university()
    {
        return $this->belongsTo(University::class, 'university_id');
    }
    
}
