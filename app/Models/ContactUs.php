<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    protected $table = 'contact_us';
    protected $primaryKey = 'contact_id';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'company',
        'position',
        'deleted_at',
        'created_at',
        'updated_at'
    ];
}
