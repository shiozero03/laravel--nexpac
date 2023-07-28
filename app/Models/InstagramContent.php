<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstagramContent extends Model
{
    use HasFactory;
    protected $table = 'instagram_contents';
    protected $primaryKey = 'instagram_id';
    protected $fillable = [
        'instagram_name',
        'instagram_link',
        'instagram_picture',
        'deleted_at',
        'created_at',
        'updated_at'
    ];
}
