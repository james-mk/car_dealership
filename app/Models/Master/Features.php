<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Features extends Model
{
    use HasFactory;
    protected $table = 'features';
    protected $fillable = [
'feature_name',
'feature_desc',
    ];
}
