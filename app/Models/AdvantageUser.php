<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\SoftDeletes;

class AdvantageUser extends Model
{
    use SoftDeletes;

    public $table = 'advantage_user';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'service_id', 
        'advantage', 
        'updated_at',
        'created_at',
        'deleted_at',
    ];
}
