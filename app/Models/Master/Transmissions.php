<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transmissions extends Model
{
    use HasFactory;
    protected $table = 'transmissions';
    protected $fillable = [
        'transmission_name',
    ];
}
