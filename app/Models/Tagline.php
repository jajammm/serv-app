<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\SoftDeletes;

class Tagline extends Model
{
    use SoftDeletes;

    public $table = 'tagline';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'service_id', 
        'tagline', 
        'updated_at',
        'created_at',
        'deleted_at',
    ];
}
