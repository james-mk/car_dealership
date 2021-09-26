<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandModels extends Model
{
    use HasFactory;
    protected $table = 'brand_models';
    protected $fillable = [
        'model_name',
        'model_desc',
    ];
}
