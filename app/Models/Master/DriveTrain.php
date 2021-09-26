<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriveTrain extends Model
{
    use HasFactory;
    protected $table='drive_trains';
    protected $fillable = [
        'drive_train_name',
        'drive_train_desc',
    ];
}
