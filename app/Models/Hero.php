<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hero extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'heroes';
    protected $fillable = [
        'image',
        'title',
        'subtitle',
        'link1',
        'link2',
        'is_active',
    ];

    protected $dates = ['deleted_at'];
}
