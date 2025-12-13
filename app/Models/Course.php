<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses_master';
    protected $primaryKey = 'course_id';

    protected $fillable = [
        'university_id',
        'country_id',
        'faculty_id',
        'course_name',
        'course_price',
        'description',
        'iStatus',
        'isDelete',
    ];

    public $timestamps = true;

    public function university()
    {
        return $this->belongsTo(University::class, 'university_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id');
    }
}
