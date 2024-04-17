<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class reclamation extends Model
{
    use HasFactory, SoftDeletes;
    protected $date = ['created_at'];
    protected $fillable = [
        'description',
        'email',
        'profile_id'
    ];
}
