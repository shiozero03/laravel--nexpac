<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $table = 'applications';
    protected $primaryKey = 'application_id';
    protected $fillable = [
        'application_picture',
        'application_name',
        'application_spec',
        'application_about',
        'application_category',
        'deleted_at',
        'created_at',
        'updated_at'
    ];
}
