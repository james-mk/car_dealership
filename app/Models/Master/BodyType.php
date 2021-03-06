<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodyType extends Model
{
    use HasFactory;
    protected $table = 'body_types';
    protected $fillable = [
        'body_type_name',
        'body_type_desc',
    ];
}
