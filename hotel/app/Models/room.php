<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class room extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'type',
        'surface',
        'place',
        'etage',
        'prix',
        'image',
        'description',
        'profile_id'
    ];
    public function profile(){
       return $this->belongsTo(Auths::class);
    }
}
