<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryMaster extends Model
{
    protected $table = 'gallery_master';
    protected $primaryKey = 'gallery_id';

    protected $fillable = [
        
        'image',
        'iStatus',
        'isDelete',
        'created_at',
        'updated_at'
    ];
}
