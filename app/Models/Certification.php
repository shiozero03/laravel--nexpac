<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;
    protected $table = 'certifications';
    protected $primaryKey = 'certification_id';
    protected $fillable = [
        'certification_name',
        'certification_picture',
        'deleted_at',
        'created_at',
        'updated_at'
    ];
}
